@extends('new.layout')
@section('title', 'Product')

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
                                {{ $product->name }}
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('shop') }}">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Products Section Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-list wow fadeInUp"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="project-detail-title">
                                <h3>about product</h3>
                            </div>
                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Product name:</h3>
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-dollar"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Product price:</h3>
                                    <p>${{ $product->price }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->



                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>category:</h3>
                                    <p>{{ $product->category->name }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                        </div>

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s"
                             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-title">
                                <h2>contact info</h2>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Contact Start -->
                            <div class="sidebar-cta-contact">
                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-location.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>Manor, Texas, USA</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->

                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-phone.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>(+1) 737-203-1025</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->

                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-mail.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>JUniqueHairBraidingSalon@gmail.com</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->
                            </div>
                            <!-- Sidebar CTA Contact End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <form id="productForm" method="POST" action="{{ route('cart.post') }}">
                            @csrf
                            <input id="prodcutId" type="hidden" name="product_id" value="{{ $product->id }}">
                            <input id="prodcutQty" type="hidden" name="quantity">
                            @auth
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            @endauth
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Project Single Image Start -->
                                    <div class="project-single-image">
                                        <figure class="image-anime reveal"
                                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                            <img src="{{ $product->getImage() }}" alt="" style="max-height: 400px;">
                                        </figure>
                                    </div>
                                    <!-- Project Single Image End -->
                                </div>

                                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                    <div class="d-flex gap-3 my-auto">
                                        <button type="submit" class="btn-default">Add To Cart</button>
                                        <div class="in_de_counter_area d-flex mb-30">
                                            <button type="button" onclick="decrement()" class="btn btn-sm bg-primary text-white px-4">-</button>
                                            <span id="counting" class="p-4">1</span>
                                            <button type="button" onclick="increment()" class="btn btn-sm bg-primary text-white px-4">+</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                        <div class="mt-4">
                            <!-- Project Entry Start -->
                            <div class="project-entry">
                                <!-- Project Information Start -->
                                <div class="project-info">
                                    <h4 class="text-anime-style-3" style="perspective: 400px;">
                                        <div class="split-line"
                                             style="display: block; text-align: start; position: relative;">
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    P
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r
                                                </div>

                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    d
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    u
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    c
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t
                                                </div>
                                            </div>
                                            <div style="position:relative;display:inline-block;">
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    n
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    f
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    r
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    m
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    a
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    t
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    i
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    o
                                                </div>
                                                <div
                                                    style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                    n
                                                </div>
                                            </div>
                                        </div>
                                    </h4>
                                    <p class="wow fadeInUp"
                                       style="visibility: visible; animation-name: fadeInUp;">{{ $product->description }}</p>
                                </div>
                                <!-- Project Information End -->
                            </div>
                            <!-- Project Entry End -->
                        </div>
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Products Section End -->

@endsection

@push('styles')

@endpush

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
