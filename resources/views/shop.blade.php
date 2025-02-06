@extends('layouts.main')
@section('title', 'Shop')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Shop</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Shop</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="all_product_area">
    <div class="container">
        <div class="row g-xl-5 g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="product_area">
                    {{--<div class="section_header d-flex justify-content-between align-items-center pb-65">
                        <div class="text_area">
                            <h5>Showing All Results</h5>
                        </div>
                        <div class="sorting_area">
                            <select class="form-select select_sorting" aria-label="Default select example"
                                fdprocessedid="44n51r">
                                <option selected="">Default Sorting</option>
                                <option value="latest">Latest</option>
                                <option value="low_to_high">Low to High</option>
                                <option value="high_to_low">High to Low</option>
                            </select>
                        </div>
                    </div>--}}
                    <div class="section_body">
                        <div class="row g-xl-5">
                            @foreach($products as $product)
                                <div class="col-md-6">
                                    <div class="product_box">
                                        <ul class="product_miniature d-flex transition">
                                            {{--<li>
                                                <a href="javascript:void(0)" class="wishList" data-product="{{ $product->id }}" id="{{ $product->id }}">
                                                    <i class="fa-solid fa-heart save0"></i>
                                                </a>
                                            </li>--}}

                                            <li>
                                                <a class="common_btn"
                                                    href="{{ route('product', $product->id) }}">
                                                    DETAILS </a>
                                            </li>
                                        </ul>
                                        <div class="image_area">
                                            <img src="https://groomify.bugfinder.net/assets/uploads/product/63d74aa556f521675053733.png"
                                                alt="Hair Dyer">
                                        </div>
                                    </div>
                                    <div class="product_box_footer d-flex justify-content-center text-center">
                                        <div class="section_text">
                                            <h5 class="pb-20 text-capitalize">{{ $product->name }}</h5>
                                            <h5>${{ $product->price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="pagination_area">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2">
                <div class="side_bar">
                    <form action="{{ route('shop') }}" method="get">
                        <div class="search_area d-flex align-items-center mb-40">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search Here..."
                                    value="" autocomplete="off" fdprocessedid="tkobln">
                                <button type="submit" class="input-group-text hover" id="basic-addon1"
                                    fdprocessedid="92inn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="categories_area cmn_bg_border mb-40">
                            <div class="section_header">
                                <h5 class="mb-20">Categories</h5>
                            </div>
                            <ul class="categories_list">
                                @foreach($categories as $category)

                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="category{{ $category->id }}"
                                                name="category_id[]" value="{{ $category->id }}" multiple="">
                                            <label class="form-check-label text-capitalize" for="category{{ $category->id }}">{{ $category->name }}
                                                <span>({{ $category->products->count() }})</span></label>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
{{--
                        <div class="attribute_area cmn_bg_border mb-40">
                            <h5 class="attribute_name">Size</h5>
                            <div class="check-box attribute-length">
                                <div class="form-check">
                                    <input class="form-check-input attribute-select" name="productAttributes[]"
                                        type="checkbox" value="214" id="attribute-s" multiple="">
                                    <label class="form-check-label" for="attribute-s">S</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input attribute-select" name="productAttributes[]"
                                        type="checkbox" value="215" id="attribute-m" multiple="">
                                    <label class="form-check-label" for="attribute-m">M</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input attribute-select" name="productAttributes[]"
                                        type="checkbox" value="216" id="attribute-l" multiple="">
                                    <label class="form-check-label" for="attribute-l">L</label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="price_filter_area cmn_bg_border mb-40">
                            <div class="section_header">
                                <h5 class="mb-40">Filter by Price</h5>
                                <h6 class="mb-30">Price : <span class="highlight">${{ $minPrice }} -
                                        ${{ $maxPrice }}</span>
                                </h6>
                            </div>
                            <div class="range_area">
                                <input type="text" class="js_range_slider" name="my_range" value="" data-type="double"
                                    data-min="0" data-max="1000" data-from="{{ $minPrice }}" data-to="{{ $maxPrice }}" data-grid="false">
                                <input type="hidden" class="js-input-from" name="minPrice" value="0" readonly="">
                                <input type="hidden" class="js-input-to" value="0" name="maxPrice" readonly="">
                            </div>
                        </div>
                        <div class="button_area filter_section">
                            <button type="submit" class="common_btn" fdprocessedid="vrt9in">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
    <style>
        .pagination_area p.text-muted {
            display: none;
        }

        .pagination_area ul li span.page-link {
            width: 50px;
            height: 50px;
            border-radius: 25px !important;
            filter: drop-shadow(0 0 2px rgba(223, 142, 106, 0.5));
            color: #fff;
            border-color: #0a6847;
            background-color: #fc6098 !important;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 10px;
        }

    </style>
@endpush

@push('scripts')
    <script>
        'use strict';

        let isAuthenticate = "";
        let userId = "";

        $('.wishList').on('click', function () {

            let _this = this.id;
            let user_id = userId;
            let product_id = $(this).data('product');
            if (isAuthenticate == 1) {
                wishList(user_id, product_id, _this);
            } else {
                window.location.href = '/login';
            }
        });

        function wishList(user_id = null, product_id = null, id = null) {
            $.ajax({
                url: "/user/wish-list",
                type: "POST",
                data: {
                    user_id: user_id,
                    product_id: product_id,
                },
                success: function (data) {

                    if (data.data == 'added') {
                        $(`.save${id}`).removeClass("fal fa-heart");
                        $(`.save${id}`).addClass("fas fa-heart");
                        Notiflix.Notify.Success(data.addNotify);
                    }
                    if (data.data == 'remove') {
                        $(`.save${id}`).removeClass("fas fa-heart");
                        $(`.save${id}`).addClass("fal fa-heart");
                        Notiflix.Notify.Success(data.removeNotify);
                    }
                },
            });
        }


        let $range = $(".js-range-slider"),
            $inputFrom = $(".js-input-from"),
            $inputTo = $(".js-input-to"),
            instance,
            min = 0,
            max = 500;

        // all_product_area_start range_area
        $(".js_range_slider").ionRangeSlider({
            type: "double",
            min: min,
            max: max,
            from: 200,
            to: 500,
            grid: true,
            onStart: updateInputs,
            onChange: updateInputs,
            onFinish: finishInputs
        });

        function updateInputs(data) {
            $inputFrom.prop("value", data.from);
            $inputTo.prop("value", data.to);
        }

        function finishInputs(data) {
            $inputFrom.prop("value", data.from);
            $inputTo.prop("value", data.to);

            setTimeout(function () {
                $('#searchFormSubmit').submit();
            }, 1000)
        }


        // Sorting Product
        $(".select_sorting").on('change', function () {
            var value = $(this).val()
            if (value) {
                var route = "/product-sorting" + "/" + value;
            }
            window.location.href = route;
        });

    </script>

@endpush
