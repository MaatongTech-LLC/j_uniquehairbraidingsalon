@extends('layouts.main')
@section('title', 'Product Details')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Product Details</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Product Details</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="single_product_area">
    <div class="container">
        <div class="row g-md-5 g-4">
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                <div class="section_left">
                    <div class="image_area single_product_slider slick-initialized slick-slider">
{{--
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
--}}
                        <div class="slick-list">
                            <div class="slick-track" style="opacity: 1; width: 1557px;"><img
                                    src="{{ $product->getImage() }}"
                                    alt="..." class="slick-slide" data-slick-index="0" aria-hidden="true"
                                    style="width: 519px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms;"
                                    tabindex="-1"><img
                                    src="{{ $product->getImage() }}"
                                    alt="..." class="slick-slide slick-current slick-active" data-slick-index="1"
                                    aria-hidden="false"
                                    style="width: 519px; position: relative; left: -519px; top: 0px; z-index: 999; opacity: 1;"
                                    tabindex="0"><img
                                    src="{{ $product->getImage() }}"
                                    alt="..." class="slick-slide" data-slick-index="2" aria-hidden="true"
                                    style="width: 519px; position: relative; left: -1038px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms;"
                                    tabindex="-1"></div>
                        </div>


                        {{--<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""
                            fdprocessedid="dpyi8d">Next</button>--}}
                    </div>
                    {{-- <div class="thumb_area single_product_thumbnail slick-initialized slick-slider">
                        <div class="slick-list draggable" style="padding: 0px 50px;">
                            <div class="slick-track"
                                style="opacity: 1; width: 519px; transform: translate3d(-173px, 0px, 0px);">
                                <div class="image_area slick-slide slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 173px;" tabindex="-1">
                                    <img src="https://groomify.bugfinder.net/assets/uploads/product/63d7509c4eea11675055260.png"
                                        alt="...">
                                </div>
                                <div class="image_area slick-slide slick-current slick-active slick-center"
                                    data-slick-index="1" aria-hidden="false" style="width: 173px;" tabindex="0">
                                    <img src="https://groomify.bugfinder.net/assets/uploads/product/63d7509c626351675055260.png"
                                        alt="...">
                                </div>
                                <div class="image_area slick-slide slick-active" data-slick-index="2"
                                    aria-hidden="false" style="width: 173px;" tabindex="0">
                                    <img src="https://groomify.bugfinder.net/assets/uploads/product/63d7509c750191675055260.png"
                                        alt="...">
                                </div>
                            </div>
                        </div>


                    </div> --}}
                </div>
            </div>
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                <form id="productForm" action="{{ route('cart.post') }}" method="post">
                    @csrf
                    <input id="prodcutId" type="hidden" name="product_id" value="{{ $product->id }}">
                    <input id="prodcutQty" type="hidden" name="quantity">
                    @auth
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    @endauth
                    <div class="section_right pt-30">
                        <div class="section_header">
                            <h2 class="text-capitalize">{{ $product->name }}</h2>
                            <h4 class="mb-30">Price : ${{ $product->price }}</h4>
{{-- 
                            <h6 class="mb-20">
                            <span class="policy_icon">
                                <i class="fas fa-undo product-icon"></i>
                            </span>
                                30 Days Return Policy </h6>
                            <h6 class="pb-15">
                                <span class="cash_icon"><i class="fas fa-dollar-sign product-icon"></i></span>
                                Cash on Delivery Available </h6> --}}
                        </div>
                        <hr>
                        <div class="section_body">
                            <p class="pt-15 pb-20">
                                {{ $product->description }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="in_de_counter_area d-flex mb-30">
                                    <button type="button" onclick="decrement()" class="counter">-</button>
                                    <span id="counting">1</span>
                                    <button type="button" onclick="increment()" class="counter">+</button>
                                </div>
                                <div class="stockMessage mt-4 mb-5">
                                    <span class="stock" id="stock">{{$product->stock > 1 ? 'In stock' : 'Out os stock'}}<i class="loader" style="font-size:24px" aria-hidden="false"></i></span>
                                </div>
                            </div>

                            <ul class="product_miniature d-flex transition">
                               {{-- <li>
                                    <a href="javascript:void(0)" class="wishList" data-product="4" id="">
                                        <i class="fa-solid fa-heart save"></i>
                                    </a>
                                </li>--}}
                                <li>
                                    <button type="submit" form="productForm" class="common_btn">ADD TO CART</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    'use script';
    var data = 1;
    var stockQty = {{ $product->stock }};
    document.getElementById("counting").innerText = data;

    function increment() {

        if (data <= stockQty) {
            data = parseInt(data + 1);
            document.getElementById("counting").innerText = data;
        }

    }

    function decrement() {
        if (data > 1) {
            data = data - 1;
            document.getElementById("counting").innerText = data;
        }

    }

    document.getElementById('productForm').addEventListener('submit', function(e) {
        e.preventDefault();

        $('#prodcutQty').val(data);

        e.target.submit();

    });


</script>
@endpush
