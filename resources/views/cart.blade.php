@extends('layouts.main')
@section('title', 'Cart')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Cart</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>Cart</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="cart-app" class="cart_area"><div class="container"><div class="row"><div class="table-responsive"><table class="table table-bordered"><thead><tr><th class="col-2"><div class="section_header">
    Image                                </div></th> <th class="col-2"><div class="section_header">
    Product Name                                </div></th> <th class="col-2"><div class="section_header">
    Price                                </div></th> <th class="col-2"><div class="section_header">
    Attributes                                </div></th> <th class="col-2"><div class="section_header">
    Quantity                                </div></th> <th class="col-2"><div class="section_header">
    Total                                </div></th> <th class="col-2"><div class="section_header">
    Remove                                </div></th></tr></thead> <tbody></tbody></table></div></div> <div class="coupon_area"><div class="row g-lg-4 g-3 coupon_inner"><div class="col-lg-12 d-flex justify-content-between"><div class="contineu_shopping_btn"><a href="{{ route('shop') }}" class="common_btn d-flex align-items-center justify-content-center">CONTINUE SHOPPING</a></div> <div class="update_cart_btn"><button class="common_btn d-flex align-items-center justify-content-center" fdprocessedid="n5kas">CLEAR CART</button></div></div></div></div> <div class="cart_total_area mt-40"><div class="row"><div class="col-sm-6 ms-sm-auto"><div class="cart_table"><ul><li><h4>Cart Total</h4></li> <li><h5>Sub Total</h5><h5>$0</h5></li></ul> <div class="btn_area d-flex justify-content-end"><a href="{{ route('checkout') }}" class="common_btn  d-flex justify-content-center align-items-center ">
    PROCEED CHECKOUT                                </a></div></div></div></div></div></div></section>
@endsection