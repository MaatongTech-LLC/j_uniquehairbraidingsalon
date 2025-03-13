@extends('new.layout')
@section('title', 'About Us')

@section('content')
    <div class="page-header parallaxie" style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">A</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">b</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <!-- About Image Start -->
                        <div class="about-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/uploads/content/about-section-img.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Customer Box Start -->
                        <div class="about-customer-box">
                            <h2><span class="counter">10</span>+</h2>
                            <p>Years of experience</p>
                        </div>
                        <!-- About Customer Box End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Discover Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Expertise in braids & hairstyle</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We are a salon that highlights the artisanal know-how of African hairdressers, combining tradition and innovation to offer hair creations that tell a story.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Item Box Start -->
                        <div class="about-item-box">
                            <!-- About Us Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('hetch/images/icon-peigne.png') }}" alt="">
                                </div>
                                <div class="about-item-content">
                                    <h3>our mission</h3>
                                    <p>To provide exceptional braiding services that enhance our clients' natural beauty while promoting healthy hair care practices. We strive to create a welcoming and inclusive space where everyone feels valued and confident.</p>
                                </div>
                            </div>
                            <!-- About Us Item End -->

                            <!-- About Us Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('hetch/images/icon-barber-chair.png') }}" alt="">
                                </div>
                                <div class="about-item-content">
                                    <h3>our vision</h3>
                                    <p>To be the leading hair braiding salon where creativity, quality, and client satisfaction come together to redefine beauty and self-expression.</p>
                                </div>
                            </div>
                            <!-- About Us Item End -->
                        </div>
                        <!-- About Item Box End -->


                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- About Facility Box Start -->
                    <div class="about-facility-box justify-content-between">
                        <!-- About Facility Item Start -->
                        <div class="about-facility-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('hetch/images/icon-barber-shop.png') }}" alt="">
                            </div>
                            <div class="about-facility-content">
                                <p>Styling with experience</p>
                            </div>
                        </div>
                        <!-- About Facility Item End -->

                        <!-- About Facility Item Start -->
                        <div class="about-facility-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('hetch/images/icon-barber-shop.png') }}" alt="">
                            </div>
                            <div class="about-facility-content">
                                <p>A professional salon</p>
                            </div>
                        </div>
                        <!-- About Facility Item End -->

                        <!-- About Facility Item Start -->
                        <div class="about-facility-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('hetch/images/icon-barber-shop.png') }}" alt="">
                            </div>
                            <div class="about-facility-content">
                                <p>You will need best style</p>
                            </div>
                        </div>
                        <!-- About Facility Item End -->
                    </div>
                    <!-- About Facility Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

@endsection
