@extends('new.layout')
@section('title', 'Shop')

@section('content')
    <div class="page-header parallaxie" style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                        <div class="split-line" style="display: block; text-align: center; position: relative;">
                            <div style="position:relative;display:inline-block;">
                                <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">S</div>
                                <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div>
                                <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div>
                                <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div>
                            </div>
                        </div>
                        </h1>                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Services Section Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-list wow fadeInUp"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="project-detail-title">
                                <h3>Product Categories</h3>
                            </div>
                           @foreach($categories as $category)
                                <!-- Project Detail Item Start -->
                                <div class="mt-2">
                                    <p style="color: #0a4021;">@if(request('category_id') == $category->id)<i class="fa-solid fa-check"></i> @endif <a style="color: #0a4021;" class="text-capitalize"  href="{{ route('shop', ['category_id' => $category->id]) }}">{{ $category->name }}</a></p>
                                </div>
                                <!-- Project Detail Item End -->
                           @endforeach

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
                    <div class="row">
                        @forelse($products as $product)
                            <div class="col-lg-6 col-md-6">
                                <!-- Page Service Item Start -->
                                <div class="page-service-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="page-service-image">
                                        <a href="{{ route('product', $product->id) }}" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ $product->getImage() }}" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="page-service-content ">
                                        <h3>{{ $product->name }}</h3>
                                        <h6 class="my-3 text-white">${{ $product->price }}</h6>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('product', $product->id) }}" class="btn-default">Details</a>
                                            <form action="{{ route('cart.post') }}" method="POST" class="form-inline">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button type="submit" class="btn-default"><i class="fa-solid fa-cart-shopping"></i></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page Service Item End -->
                            </div>
                        @empty
                            <h2 class="text-center">No Product Found</h2>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->

@endsection
