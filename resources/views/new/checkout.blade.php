@extends('new.layout')
@section('title', 'Checkout')

@section('content')
    <div class="page-header parallaxie"
         style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        C
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        h
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        e
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        c
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        k
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        o
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        u
                                    </div>
                                    <div
                                        style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                        t
                                    </div>

                                </div>
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Checkout Section Start -->
    <div class="page-contact-us">
        @if(request('checkout_type') == 'products_order')
            @php
                if(Auth::check()) {
                    $items = auth()->user()->cart()->with('product')->get();
                } else {
                    $items = collect(Session::get('cart', []));
                }
                $subTotal = 0;
            @endphp
            <form id="checkoutForm" action="{{ route('checkout.order.post') }}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section_left aos-init aos-animate" data-aos="fade-left">
                                <h2 class="py-3">Billing / Shipping Information</h2>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="full_name"
                                               value="@auth {{auth()->user()->name}} @endauth"
                                               placeholder="Full Name*" required>
                                    </div>
                                    @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror


                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="email"
                                               value="@auth {{auth()->user()->email}} @endauth"
                                               placeholder="Email Address*" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="phone" value=""
                                               placeholder="Phone Number*" required>
                                    </div>
                                    <div class="col-md-12">
                                        <select id="inputState" class="form-select" name="country" required>
                                            <option selected="" disabled="">Your Country*</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="city" class="form-control" name="city" placeholder="City / Town*"
                                               required>

                                    </div>
                                    <div class="col-md-6">
                                        <input id="street_address" class="form-control" name="street_address" placeholder="Street Address"
                                               required>

                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="state" value=""
                                               placeholder="State*" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="zipcode" value=""
                                               placeholder="Zip / Postcode*" required>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Select Payment Method</h4>
                                    </div>

                                    <div class="col-md-12 d-flex align-items-center justify-content-between">
                                        <div class="form-check d-flex align-items-center">
                                            <label for="paypal" class="form-check-label">Paypal <img height="40px"
                                                                                                     src="{{ asset('assets/uploads/gateway/paypal.jpg') }}"
                                                                                                     alt="gateway image">
                                                <input id="paypal" type="radio" class="form-check-input d-inline-block mt-2" name="gateway"
                                                       required value="paypal">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label for="stripe" class="form-check-label"> Credit/Debit Card <img
                                                    height="40px"
                                                    src="{{ asset('assets/uploads/gateway/stripe.jpg') }}"
                                                    alt="stripe gateway image">
                                                <input id="stripe" type="radio" class="form-check-input d-inline-block mt-2" name="gateway"
                                                       required value="stripe">
                                            </label>
                                        </div>
                                    </div>


                                    <div id="stripeCard" class="d-none py-3">
                                        <!-- Stripe Card Element container -->
                                        <div class="form-group" id="card-element"></div>
                                        <!-- Error Message -->
                                        <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-check d-flex align-items-center">
                                            <label for="terms" class="form-check-label">I agree to the <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>
                                                <input id="terms" type="checkbox" class="form-check-input d-inline-block mt-2" name="terms"
                                                       required>
                                            </label>
                                        </div>
                                    </div>

                                    <input type="hidden" name="total_price" value="{{ $subTotal }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                    <button type="submit" class="btn-default">PAY NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <h2 class="py-3">Your Order</h2>
                            <div class=" mb-3">
                                <ul class="mb-5 d-flex flex-column justify-content-between" style="list-style: none;">
                                    @foreach($items as $item)
                                        @php
                                            if(is_array($item)) {
                                                $item = (object) $item;
                                            }
                                            $subTotal += ($item->product->price * $item->quantity);
                                        @endphp
                                        <div class="product_info">
                                            <li class="d-flex align-items-center">
                                                <a style="color: var(--accent-color)" href="{{ route('product', $item->product->id) }}">
                                                    <img src="{{ $item->product->getImage() }}" height="60px" width="60px" alt="">
                                                    <span>{{ $item->product->name }} x {{ $item->quantity }}</span>
                                                </a> <br>
                                                <span class="ml-2">${{ ($item->product->price) * $item->quantity }}</span>
                                            </li>
                                        </div>
                                    @endforeach

                                    <li class="mt-3">
                                        <h5>Total</h5>
                                        <h5>$<span class="">{{ $subTotal }}</span></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        @elseif(request('checkout_type') == 'appointment')
            @php
                $service = \App\Models\Service::find(request('service_id'));
            @endphp
            <form id="bookingForm" action="{{ route('checkout.appointment.post') }}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section_left aos-init aos-animate" data-aos="fade-left">
                                <h2 class="py-3">Appointment Billing Information</h2>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="full_name"
                                               value="@auth {{auth()->user()->name}} @endauth"
                                               placeholder="Full Name*" required>
                                    </div>
                                    @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror


                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="email"
                                               value="@auth {{auth()->user()->email}} @endauth"
                                               placeholder="Email Address*" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="phone" value=""
                                               placeholder="Phone Number*" required>
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
                                        <input type="text" class="date-pick form-control" name="date" id="datepicker"
                                               placeholder="Select Date" required autocomplete="off"/>
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
                                        <input type="text" class="time-pick form-control" name="time" id="timepicker"
                                               placeholder="Select Time" required autocomplete="off"/>
                                    </div>

                                    <div class="col-12 mt-4 d-flex align-items-center justify-content-between">
                                        <div class="wc_payment_method payment_method_cod">
                                            <input id="price" type="radio" class="form-check-input" value="full_price" name="payment_type" required> <label
                                                for="price" class="form-check-label">Pay full amount <strong>(${{ $service->price }})</strong></label>
                                        </div>
                                        <div class="wc_payment_method payment_method_cod">
                                            <input id="deposit_price" type="radio" class="form-check-input" value="deposit" name="payment_type" required> <label
                                                for="deposit_price" class="form-check-label">Pay deposit (Not refundable) <strong>(${{ $service->deposit_price }})</strong></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Select Payment Method</h4>
                                    </div>

                                    <div class="col-md-12 d-flex align-items-center justify-content-between">
                                        <div class="form-check d-flex align-items-center">
                                            <label for="paypal" class="form-check-label">Paypal <img height="40px"
                                                                                                     src="{{ asset('assets/uploads/gateway/paypal.jpg') }}"
                                                                                                     alt="gateway image">
                                                <input id="paypal" type="radio" class="form-check-input d-inline-block mt-2" name="gateway"
                                                       required value="paypal">
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label for="stripe" class="form-check-label"> Credit/Debit Card <img
                                                    height="40px"
                                                    src="{{ asset('assets/uploads/gateway/stripe.jpg') }}"
                                                    alt="stripe gateway image">
                                                <input id="stripe" type="radio" class="form-check-input d-inline-block mt-2" name="gateway"
                                                       required value="stripe">
                                            </label>
                                        </div>
                                    </div>
                                    <div id="stripeCard" class="d-none py-3">
                                        <!-- Stripe Card Element container -->
                                        <div class="form-group" id="card-element"></div>
                                        <!-- Error Message -->
                                        <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-check d-flex align-items-center">
                                            <label for="terms" class="form-check-label">I agree to the <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>
                                                <input id="terms" type="checkbox" class="form-check-input d-inline-block mt-2" name="terms"
                                                       required>
                                            </label>
                                        </div>
                                    </div>

                                    <input type="hidden" name="service_id" value="{{ request('service_id') }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                    <button type="submit" class="btn-default">PAY NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <h2 class="py-3">Service Info</h2>
                            <div class=" mt-3">
                                <div class="product_info">
                                    <a style="color: var(--accent-color)" href="{{ route('service.show', $service->id) }}">
                                        <img src="{{ $service->getImage() }}" height="200px" width="200px" alt="">
                                    </a>
                                    <h5>Service name: <span class="text-dark text-capitalize">{{ $service->name }}</span></h5>
                                    <h5>Service price: <span class="text-dark text-capitalize">${{ $service->price }}</span></h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        @endif
    </div>

    <!-- Page Checkout Section End -->
@endsection

@push('styles')
    <style>
        th {
            color: var(--accent-color) !important;
        }

        button {
            outline: none !important;
        }

        ul {
            list-style: none !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('hetch/css/jquery.datetimepicker.min.css') }}">
    <style>
        .xdsoft_datetimepicker {
            z-index: 9999 !important;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('assets/themes/basic/js/jquery.datetimepicker.min.js') }}"></script>
    <script>
        $('#datepicker').datetimepicker({
            timepicker: !1,
            datepicker: !0,
            format: "Y-m-d",
            startDate: new Date(),
            maxDate: new Date().setDate(new Date().getDate() +30),
            minDate: 0,
            step: 10
        });

        $("#timepicker").datetimepicker({
            datepicker: !1,
            timepicker: !0,
            format: "H:i",
            step: 30,
            minTime: '9:00',
            maxTime: '18:00'
        });
    </script>
    <script src="https://js.stripe.com/v3/"></script>
    @if(request('checkout_type') == 'appointment')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Stripe and Elements
                const stripe = Stripe('{{ env('STRIPE_KEY') }}');
                const elements = stripe.elements();
                const card = elements.create('card');
                card.mount('#card-element');

                // Handle real-time validation errors on the card Element.
                card.on('change', function(event) {
                    const displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                // Listen for the payment method form submission
                $('#bookingForm').on('submit', function(e) {

                    e.preventDefault();

                    const method = $('input[name="gateway"]:checked').val();
                    if (method === 'stripe') {
                        // Open the Stripe modal
                        $('#stripeCard').removeClass('d-none');

                    } else if (method === 'paypal') {
                        // Process other payment methods (e.g. redirect to PayPal)
                        $('#stripeCard').addClass('d-none');
                        $('#bookingForm')[0].submit();
                    }
                });

                // Handle the Stripe payment form submission inside the modal
                const stripeForm = document.getElementById('bookingForm');
                stripeForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    // Create a Stripe token
                    const {token, error} = await stripe.createToken(card);
                    if (error) {
                        // Display error in the card-errors element
                        document.getElementById('card-errors').textContent = error.message;
                    } else {
                        // Append the token to the form and submit to Laravel
                        let hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        stripeForm.appendChild(hiddenInput);
                        stripeForm.submit();
                    }
                });
            });
        </script>
    @else
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Stripe and Elements
                const stripe = Stripe('{{ env('STRIPE_KEY') }}');
                const elements = stripe.elements();
                const card = elements.create('card');
                card.mount('#card-element');

                // Handle real-time validation errors on the card Element.
                card.on('change', function(event) {
                    const displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                // Listen for the payment method form submission
                $('#checkoutForm').on('submit', function(e) {

                    e.preventDefault();

                    const method = $('input[name="gateway"]:checked').val();
                    if (method === 'stripe') {
                        // Open the Stripe modal
                        $('#stripeCard').removeClass('d-none');

                    } else if (method === 'paypal') {
                        // Process other payment methods (e.g. redirect to PayPal)
                        $('#stripeCard').addClass('d-none');
                        $('#checkoutForm')[0].submit();
                    }
                });

                // Handle the Stripe payment form submission inside the modal
                const stripeForm = document.getElementById('checkoutForm');
                stripeForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    // Create a Stripe token
                    const {token, error} = await stripe.createToken(card);
                    if (error) {
                        // Display error in the card-errors element
                        document.getElementById('card-errors').textContent = error.message;
                    } else {
                        // Append the token to the form and submit to Laravel
                        let hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', token.id);
                        stripeForm.appendChild(hiddenInput);
                        stripeForm.submit();
                    }
                });
            });
        </script>
    @endif
@endpush
