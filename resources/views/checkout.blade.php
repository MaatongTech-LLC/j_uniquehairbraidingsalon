@extends('layouts.main')
@section('title', 'Checkout')
@section('content')
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="secion_header">
                    <h1 class="banner_title">Checkout</h1>
                </div>
                <div class="breadcrumb d-flex justify-content-center">
                    <div class="text_area">
                        <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                            <span>Checkout</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="checkout_area">
        @if(request('checkout_type') == 'products_order')
            @php
                $items = auth()->user()->cart()->with('product')->get();
                $subtotal = 0;
            @endphp
            <form action="{{ route('checkout.order.post') }}" method="post">
                @csrf
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-7">
                            <div class="section_left aos-init aos-animate" data-aos="fade-left">
                                <div class="section_header">
                                    <h2>Billing / Shipping Information</h2>
                                </div>
                                <div class="billing_form_area">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="full_name" value="{{ auth()->user()->name }}"
                                                   placeholder="Full Name" required>
                                        </div>
                                        @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror


                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}"
                                                   placeholder="Email Address*" required>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="phone" value=""
                                                   placeholder="Phone Number*" required>
                                        </div>
                                        <div class="col-md-12">
                                            <select id="inputState" class="form-select" name="country" required>
                                                <option selected="" disabled="">Your Country</option>
                                                <option value="USA">USA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <input id="city" class="form-control" name="city" placeholder="City / Town*" required>

                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="state" value=""
                                                   placeholder="State*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="postcode" value=""
                                                   placeholder="Zip / Postcode*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 product_checkout_summary">
                            <div class="section_right aos-init aos-animate" data-aos="fade-right">
                                <div class="billing_information">
                                    <ul class="billing_list_area mb-20">
                                        <li><span>Product</span> <span>Total</span></li>
                                        @foreach($items as $item)
                                                @php
                                                $subtotal += $item->product->price * $item->quantity;
                                                @endphp
                                            <div class="product_info">
                                                <li class="d-flex align-items-center"><a href="{{ route('product', $item->product->id) }}">
                                                        <img src="{{ $item->product->image ?? asset('assets/uploads/logo/meta.png') }}" height="80px" width="80px" alt="">
                                                        <span>{{ $item->product->name }} x {{ $item->quantity }}</span>
                                                    </a> <span>${{ ($item->product->price) * $item->quantity }}</span></li>
                                            </div>
                                        @endforeach
                                        <li>
                                            <h6>Cart Subtotal</h6>
                                            <h6>$<span class="total">{{ $subtotal }}</span></h6>
                                        </li>
                                        <li>
                                            <h6>(+) Shipping Charge</h6>
                                            <h6>$0.00</h6>
                                        </li>
                                        <li>
                                            <h5>Total</h5>
                                            <h5>$<span class="">{{ $subtotal }}</span></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container payment_section">
                    <div class="row g-4">
                        <div class="col-md-8">
                            <div class="payment-methods mt-40">
                                <div class="row gy-4 gx-3">
                                    <div class="col-12">
                                        <h4 class=" mb-20">Select Payment Method</h4>
                                        <div class="payment-box mb-4">
                                            <div class="payment-options">
                                                <div class="row g-2">
                                                    <input type="hidden" name="gateway" value="">
                                                    <div class="col-4 col-md-3 col-xl-2">
                                                        <label class="paymentCheck" id="0" data-gateway="paypal" data-payment="1"
                                                               data-plan="" for="option1">
                                                            <img class="img-fluid custom___img"
                                                                 src="{{ asset('assets/uploads/gateway/paypal.jpg') }}"
                                                                 alt="gateway image">
                                                            <i class="fa-solid fa-check check custom___check tag"
                                                               id="circle0"></i>
                                                        </label>
                                                    </div>
                                                    {{--<div class="col-4 col-md-3 col-xl-2">
                                                        <label class="paymentCheck" id="1" data-gateway="stripe" data-payment="2" data-plan="" for="option2">
                                                            <img class="img-fluid custom___img" src="{{ asset('assets/uploads/gateway/stripe.jpg') }}" alt="gateway image">
                                                            <i class="fa-solid fa-check check custom___check tag d-none" id="circle1"></i>
                                                        </label>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="total_price" value="{{ $subtotal }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                        <button type="submit" class="common_btn">PAY NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        @elseif(request('checkout_type') == 'appointment')

            @php
                $appointment = \App\Models\Appointment::with(['service'])->find(request('appointment_id'));
            @endphp
            <form action="{{ route('checkout.appointment.post') }}" method="post">
                @csrf
                <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-7">
                            <div class="section_left aos-init aos-animate" data-aos="fade-left">
                                <div class="section_header">
                                    <h2>Billing Information</h2>
                                </div>
                                <div class="billing_form_area">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="full_name" value="{{ auth()->user()->name }}"
                                                   placeholder="First Name" required>
                                        </div>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}"
                                                   placeholder="Email Address*" required>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" name="phone" value=""
                                                   placeholder="Phone Number*" required>
                                        </div>
                                        <div class="col-md-12">
                                            <select id="inputState" class="form-select" name="country" required>
                                                <option selected="" disabled="">Your Country</option>
                                                <option value="USA">USA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <input id="city" class="form-control" name="city" placeholder="City / Town*" required>

                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="state" value=""
                                                   placeholder="State*" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="postcode" value=""
                                                   placeholder="Zip / Postcode*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 product_checkout_summary">
                            <div class="section_right aos-init aos-animate" data-aos="fade-right">
                                <div class="billing_information">
                                    <ul class="billing_list_area mb-20">
                                        <li><span>Service Name</span> <span>Amount to pay</span></li>
                                        <div class="product_info">
                                            <li class="d-flex align-items-center"><a href="{{ route('service.show', $appointment->service->id) }}">
                                                    <img src="{{ $appointment->service->getImage() }}" height="80px" width="80px" alt="">
                                                    <span>{{ $appointment->service->name }}</span>
                                                </a> <span>${{ $appointment->payment_type == 'deposit' ? $appointment->service->deposit_price :  $appointment->service->price}}</span></li>
                                        </div>


                                        <li>
                                            <h5>Total</h5>
                                            <h5>$<span class="">{{ $appointment->payment_type == 'deposit' ? $appointment->service->deposit_price :  $appointment->service->price}}</span></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container payment_section">
                    <div class="row g-4">
                        <div class="col-md-8">
                            <div class="payment-methods mt-40">
                                <div class="row gy-4 gx-3">
                                    <div class="col-12">
                                        <h4 class=" mb-20">Select Payment Method</h4>
                                        <div class="payment-box mb-4">
                                            <div class="payment-options">
                                                <div class="row g-2">
                                                    <input type="hidden" name="gateway" value="">
                                                    <div class="col-4 col-md-3 col-xl-2">
                                                        <label class="paymentCheck" id="0" data-gateway="paypal" data-payment="1"
                                                               data-plan="" for="option1">
                                                            <img class="img-fluid custom___img"
                                                                 src="{{ asset('assets/uploads/gateway/paypal.jpg') }}"
                                                                 alt="gateway image">
                                                            <i class="fa-solid fa-check check custom___check tag"
                                                               id="circle0"></i>
                                                        </label>
                                                    </div>
                                                    {{--<div class="col-4 col-md-3 col-xl-2">
                                                        <label class="paymentCheck" id="1" data-gateway="stripe" data-payment="2" data-plan="" for="option2">
                                                            <img class="img-fluid custom___img" src="{{ asset('assets/uploads/gateway/stripe.jpg') }}" alt="gateway image">
                                                            <i class="fa-solid fa-check check custom___check tag d-none" id="circle1"></i>
                                                        </label>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="common_btn">PAY NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        @endif

    </section>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '.paymentCheck', function() {
            var id = this.id;
            $('.tag').not(this).addClass('d-none');
            $(`#circle${id}`).removeClass("d-none");


            $("input[name='gateway']").val($(this).data('gateway'));

            $('.paymentCheck').not(this).removeClass('paymentActive');
            $(`#${id}`).addClass("paymentActive");


        });
    </script>
@endpush
