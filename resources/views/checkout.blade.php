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
    <form action="https://groomify.bugfinder.net/user/product-place-order" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="ZsDuBjPXdtMDV6SRUp2P0WqJbSuByMrnOXS6iyO4">            <div class="container">
            <div class="row g-4">
                <div class="col-md-8">
                    <div class="section_left aos-init aos-animate" data-aos="fade-left">
                        <div class="section_header">
                            <h2>Shipping Information</h2>
                        </div>
                        <div class="billing_form_area">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name" value="" placeholder="First Name" autocomplete="off" fdprocessedid="6m83r">
                                                                        </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="" placeholder="Last Name" autocomplete="off" fdprocessedid="pgu8sq">
                                                                        </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="email" value="" placeholder="Email Address*" autocomplete="off" fdprocessedid="bhnpln">
                                                                        </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="phone" value="" placeholder="Phone Number*" autocomplete="off" fdprocessedid="vebrcm">
                                                                        </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="company_name" value="" placeholder="Company Name (optional)" autocomplete="off" fdprocessedid="m4gy3">
                                                                        </div>
                                <div class="col-md-12">
                                    <select id="inputState" class="form-select" name="country" fdprocessedid="48vus">
                                        <option selected="" disabled="">Your Country</option>
                                        <option value="USA">USA</option>
                                    </select>
                                                                        </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="street_address" value="" placeholder="Apartment, Street Address*" autocomplete="off" fdprocessedid="yi95l8">
                                                                        </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="state" value="" placeholder="State" autocomplete="off" fdprocessedid="wdn5">
                                                                        </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="postcode" value="" placeholder="Zip / Postcode*" fdprocessedid="6mup6g">
                                                                        </div>
                                <input class="form-control cartItemData" name="cartItem" type="hidden" autocomplete="off" value="[{&quot;id&quot;:4,&quot;name&quot;:&quot;Shampoo&quot;,&quot;price&quot;:250,&quot;count&quot;:1,&quot;image&quot;:&quot;https://groomify.bugfinder.net/assets/uploads/product/63d74a48b0ee71675053640.png&quot;,&quot;currency&quot;:&quot;$&quot;,&quot;quantity&quot;:1,&quot;attributes&quot;:[&quot;221&quot;],&quot;attributesName&quot;:&quot;[{\&quot;Weight\&quot;:\&quot;200ML\&quot;}]&quot;}]">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product_checkout_summary">
                    <div class="section_right aos-init aos-animate" data-aos="fade-right">
                        <div class="billing_information">
                            <ul class="billing_list_area mb-20">
                                <li><span>Product</span> <span>Total</span></li>
                                <div class="product_info"><li><span></span> <span>$0</span></li></div>
                                <li>
                                    <h6>Cart Subtotal</h6>
                                    <h6>$<span class="total-cart"></span></h6>
                                </li>
                                <li>
                                    <h6>(+) Tax Charge</h6>
                                    <h6>$0.00</h6>
                                </li>
                                <li>
                                    <h6>(+) Shipping Charge</h6>
                                    <h6>$0.00</h6>
                                </li>
                                <li>
                                    <h5>Total</h5>
                                    <h5>$<span class="total-cart">0</span></h5>
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
                                <div class="payment_method">
                                    <input class="form-check-input" type="radio" id="cashon_delivery" name="payment_method" value="Cash On Delivery" checked="">
                                    <label class="form-check-label" for="cashon_delivery">
                                        Cash on Delivery                                        </label>
                                </div>
                                <div class="payment-box mb-4">
                                    <div class="payment-options">
                                        <div class="row g-2">
                                            <div class="col-4 col-md-3 col-xl-2">
                                                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                                                <input type="hidden" name="gateway" value="">
                                                <label class="paymentCheck" id="0" data-gateway="1" data-payment="1" data-plan="" for="option1">
                                                    <img class="img-fluid custom___img" src="https://groomify.bugfinder.net/assets/uploads/gateway/5f637b5622d23.jpg" alt="gateway image">
                                                    <i class="fa-solid fa-check check custom___check tag d-none" id="circle0"></i>
                                                </label>
                                            </div>  
                                       </div>
                                    </div>
                                </div>
                                <button type="submit" class="common_btn" fdprocessedid="re3wf">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section_right payment_info aos-init" data-aos="fade-right">
                        <div class="payment-information box_shadow1  p-3 mb-5 bg-white rounded">
                            <h4>Checkout Summary</h4>
                            <ul class="payment_list_area">
                                <li><span>Total Cart</span>
                                    <span>$<span class="total-cart">250</span></span>
                                </li>
                                <li>Shipping <span class="shipping">$0.00</span></li>
                                
                                <li><span>Fixed Charge</span> <span class="fixed_charge"></span></li>
                                <li><span>Total Amount</span> <span class="total_amount"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection