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
                        <div class="section_header d-flex justify-content-between align-items-center pb-65">
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
                        </div>
                        <div class="section_body">
                            <div class="row g-xl-5">
                                <div class="col-md-6">
                                    <div class="product_box">
                                        <ul class="product_miniature d-flex transition">
                                            <li>
                                                <a href="javascript:void(0)" class="wishList" data-product="3"
                                                    id="0">
                                                    <i class="fa-solid fa-heart save0"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="common_btn"
                                                    href="{{ route('product', 1) }}">
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
                                            <h5 class="pb-20">Hair Dyer</h5>
                                            <h5>$250.00
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pagination_area">
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-center">
                                            <nav id="pagination">
                                            </nav>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="side_bar">
                        <form action="/product-filter" method="get">
                            <div class="search_area d-flex align-items-center mb-40">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Search Here..." value="" autocomplete="off"
                                        fdprocessedid="tkobln">
                                    <button type="submit" class="input-group-text hover" id="basic-addon1"
                                        fdprocessedid="92inn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                            <div class="categories_area cmn_bg_border mb-40">
                                <div class="section_header">
                                    <h5 class="mb-20">Categories</h5>
                                </div>
                                <ul class="categories_list">
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat0"
                                                name="category_id[]" value="6" multiple="">
                                            <label class="form-check-label" for="vehicleCat0">Hair Care
                                                <span>(0)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat1"
                                                name="category_id[]" value="7" multiple="">
                                            <label class="form-check-label" for="vehicleCat1">Hair Styling
                                                <span>(1)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat2"
                                                name="category_id[]" value="8" multiple="">
                                            <label class="form-check-label" for="vehicleCat2">Spa <span>(1)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat3"
                                                name="category_id[]" value="9" multiple="">
                                            <label class="form-check-label" for="vehicleCat3">Mackup
                                                <span>(0)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat4"
                                                name="category_id[]" value="10" multiple="">
                                            <label class="form-check-label" for="vehicleCat4">Treatments
                                                <span>(2)</span></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="vehicleCat5"
                                                name="category_id[]" value="11" multiple="">
                                            <label class="form-check-label" for="vehicleCat5">Shampoo
                                                <span>(2)</span></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

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
                            </div>
                            <div class="attribute_area cmn_bg_border mb-40">
                                <h5 class="attribute_name">Color</h5>
                                <div class="check-box attribute-length">
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="217" id="attribute-black" multiple="">
                                        <label class="form-check-label" for="attribute-black">Black</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="218" id="attribute-white" multiple="">
                                        <label class="form-check-label" for="attribute-white">White</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="219" id="attribute-red" multiple="">
                                        <label class="form-check-label" for="attribute-red">Red</label>
                                    </div>
                                </div>
                            </div>
                            <div class="attribute_area cmn_bg_border mb-40">
                                <h5 class="attribute_name">Weight</h5>
                                <div class="check-box attribute-length">
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="221" id="attribute-200ml" multiple="">
                                        <label class="form-check-label" for="attribute-200ml">200ML</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="222" id="attribute-250ml" multiple="">
                                        <label class="form-check-label" for="attribute-250ml">250ML</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input attribute-select" name="productAttributes[]"
                                            type="checkbox" value="223" id="attribute-300ml" multiple="">
                                        <label class="form-check-label" for="attribute-300ml">300ML</label>
                                    </div>
                                </div>
                            </div>

                            <div class="price_filter_area cmn_bg_border mb-40">
                                <div class="section_header">
                                    <h5 class="mb-40">Filter by Price</h5>
                                    <h6 class="mb-30">Price : <span class="highlight">$200 -
                                            $500</span>
                                    </h6>
                                </div>
                                <div class="range_area">
                                    <span class="irs irs--flat js-irs-0"><span class="irs"><span class="irs-line"
                                                tabindex="0"></span><span class="irs-min"
                                                style="visibility: visible;">0</span><span class="irs-max"
                                                style="visibility: visible;">1 000</span><span class="irs-from"
                                                style="visibility: visible; left: 17.0539%;">200</span><span
                                                class="irs-to"
                                                style="visibility: visible; left: 45.3987%;">500</span><span
                                                class="irs-single" style="visibility: hidden; left: 25.6659%;">200 —
                                                500</span></span><span class="irs-grid"></span><span class="irs-bar"
                                            style="left: 21.6552%; width: 28.3448%;"></span><span
                                            class="irs-shadow shadow-from" style="display: none;"></span><span
                                            class="irs-shadow shadow-to" style="display: none;"></span><span
                                            class="irs-handle from"
                                            style="left: 18.8966%;"><i></i><i></i><i></i></span><span
                                            class="irs-handle to type_last"
                                            style="left: 47.2414%;"><i></i><i></i><i></i></span></span><input
                                        type="text" class="js_range_slider irs-hidden-input" name="my_range"
                                        value="" data-type="double" data-min="0" data-max="1000"
                                        data-from="200" data-to="500" data-grid="false" tabindex="-1" readonly="">
                                    <input type="hidden" class="js-input-from" name="minPrice" value="200"
                                        readonly="">
                                    <input type="hidden" class="js-input-to" value="500" name="maxPrice"
                                        readonly="">
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
