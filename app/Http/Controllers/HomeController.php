<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Review;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Models\OrderItem;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ServiceCategory;
use App\Services\PaymentService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class HomeController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }
    public function index()
    {
        $services = Service::all();


        return view('new.home', ['services' => $services]);
    }

    public function about()
    {
        return view('new.about');
    }

    public function booking(Request $request)
    {
        $services = Service::all();

        return view('booking', ['services' => $services]);
    }


    public function bookingPost(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'payment_type' => 'required|string',
        ]);

        $validated['user_id'] = Auth::id();

        $appointment = Appointment::create($validated);

        return redirect()->route('checkout', [
            'checkout_type' => 'appointment',
            'appointment_id' => $appointment->id
        ]);
    }


    public function shop(Request $request)
    {
        $products = Product::with('category')->latest();

        if ($request->category_id) {
            $products = Product::with('category')->where('product_category_id', $request->category_id)->latest();
        }

        if ($request->min_price && $request->max_price) {
            $products = $products->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        $showedCategories = $products->pluck('product_category_id')->toArray();


        $products = $products->paginate(16);
        $categories = ProductCategory::whereIn('id', $showedCategories)->get();

        $minPrice = Product::min('price');
        $maxPrice = Product::max('price');

        return view('new.shop', [
            'categories' => $categories,
            'products' => $products,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);

        return view('new.product', ['product' => $product]);
    }



    public function checkout()
    {
        return view('new.checkout');
    }

    public function checkoutAppointmentPost(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            'gateway' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'payment_type' => 'required|string',

        ]);

        $user = Auth::user();

        if (!$user) {
            $user = User::factory()->create([
                'email' => $validated['email'],
                'name' => $validated['full_name'],
            ]);
        }

        $appointment = Appointment::create([
            'user_id' => $user->id,
            'service_id' => $validated['service_id'],
            'payment_type' => $validated['payment_type'],
            'date' => $validated['date'],
            'time' => $validated['time'],
        ]);

        if ($validated['gateway'] === 'paypal') {
            $paymentUrl = $this->paymentService->processPayPal($appointment);

            if ($paymentUrl !== null) {
                return redirect()->away($paymentUrl);
            } else {
                return redirect()->back()->with('error', 'Something went wrong while processing PayPal payment');
            }

        } elseif ($validated['gateway'] === 'stripe') {

            return redirect()->back()->with('error', 'Credit/Debit Card unavailable for now!');
        }
    }

    public function checkoutOrderPost(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'gateway' => 'required',
            'total_price' => 'required',
        ]);

        $user = Auth::user();

        if (!$user) {
            $user = User::factory()->create([
                'email' => $request->email,
                'name' => $request->full_name,
            ]);

            Auth::login($user);
        }

        $cartItems = $user->cart()->with('product')->get();


        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });

        DB::beginTransaction();
        try {
            // 1. Create Order
            $order = Order::create([
                'user_id' => $user->id,
                'total_price' => $totalPrice,
                'status' => 'Pending', // Will change after successful payment
            ]);

            // 2. Insert Order Items
            foreach ($cartItems as $cartItem) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'price' => $cartItem->product->price,
                ]);
            }

            // 3. Clear Cart
            $user->cart()->delete();

            DB::commit();

            if ($request->gateway === 'paypal') {
                $paymentUrl = $this->paymentService->processPayPal($order);

                if ($paymentUrl !== null) {
                    return redirect()->away($paymentUrl);
                } else {
                    return redirect()->back()->with('error', 'Something went wrong while processing PayPal payment');
                }
            } else {
                return redirect()->back()->with('error', 'Credit/Debit Card unavailable for now!');

                $this->paymentService->processStripe($order, $request->payment_method_id);
            }
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->route('cart')->with('error', 'Checkout failed: ' . $e->getMessage());
        }

    }

    public function success() {
        return view('new.payment-success');
    }

    public function paypalSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);


        if (isset($response['status']) & $response['status'] == 'COMPLETED') {

            if ($request->transaction_id) {
                $payment = Payment::where('transaction_id', $request->transaction_id)->first();
                if ($request->transaction_type === 'products_order') {
                    $payment->update(['status' => 'successful']);
                    $order = $payment->payable;
                    $order->update(['payment_status' => 'paid']);
                } else {
                    $payment->update(['status' => 'successful']);
                    $appointment = $payment->payable;
                    $appointment->update(['status' => 'completed']);
                }
            }

            return redirect()->route('success')->with('success', 'Payment successful');
        } else {
            return redirect()->route('home')->with('error', 'Something went wrong!');
        }
    }


    public function paypalCancel(Request $request)
    {
        return redirect()->back()->with('error', 'You have cancelled the transaction!');
    }

    public function contact()
    {
        return view('new.contact');
    }

    public function contactPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'We received your message!');

    }

    public function services()
    {
        $services = Service::with('category')->latest()->paginate(12);

        return view('new.services', ['services' => $services]);
    }

    public function serviceShow($id)
    {
        $service = Service::with('category')->where('id', $id)->first();

        if ($service) {
            $previousItems = Service::where('id', '<', $service->id)
                ->orderBy('id', 'desc')
                ->take(5)
                ->get();

            $nextItems = Service::where('id', '>', $service->id)
                ->orderBy('id', 'asc')
                ->take(5)
                ->get();

            $items = $previousItems->reverse()->merge([$service])->merge($nextItems);

            if ($items->count() < 6) {
                if ($previousItems->isEmpty()) {
                    $additionalItems = Service::where('id', '>', $service->id)
                        ->orderBy('id', 'asc')
                        ->take(6 - $items->count())
                        ->get();
                    $items = $items->merge($additionalItems);
                } else {
                    $additionalItems = Service::where('id', '<', $service->id)
                        ->orderBy('id', 'desc')
                        ->take(6 - $items->count())
                        ->get();
                    $items = $additionalItems->reverse()->merge($items);
                }
            }

            $items = $items->take(6);
        }

        return view('new.service-show', ['service' => $service, 'services' => $items]);
    }

    public function reviewPost(Request $request) {
        $validated = $request->validate([
            'service_id' => 'required',
            'content' => 'required',
            'rating' => 'required|int'
        ]);

        $validated['user_id'] = Auth::id();

        Review::create($validated);

        return redirect()->back()->with('success', 'Review posted successfully!');

    }

    public function gallery()
    {
        $directory = public_path('assets/gallery-images');

        $files = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        $images = array_map('basename', $files);
        return view('new.gallery', ['images' => $images]);
    }

    public function faq()
    {
        return view('faq');
    }

    public function termsAndConditions()
    {
        return view('terms-and-conditions');
    }
}
