@extends('new.layout')
@section('title', 'Home')

@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset('assets/uploads/content/banner1.jpg') }}" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">Welcome to {{ config('app.name') }}</h3>
                                            <h1 class="text-anime-style-3" data-cursor="-opaque">Where Every Braids Tells Story</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover a wide range of beautifully hairstyle to affirm your beauty.</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Buttons Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('contact') }}" class="btn-default">Contact</a>
                                            <a href="{{ route('services') }}" class="btn-default btn-highlighted">Our Services</a>
                                        </div>
                                        <!-- Hero Buttons End -->

                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset('assets/uploads/content/banner2.jpg') }}" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">Welcome to {{ config('app.name') }}</h3>
                                            <h1 class="text-anime-style-3" data-cursor="-opaque">Where Every Braids Tells Story</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Discover a wide range of beautifully hairstyle to affirm your beauty.</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Buttons Start -->
                                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                            <a href="{{ route('contact') }}" class="btn-default">Contact</a>
                                            <a href="{{ route('services') }}" class="btn-default btn-highlighted">Our Services</a>
                                        </div>
                                        <!-- Hero Buttons End -->

                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

            </div>
            <div class="hero-pagination"></div>
        </div>
    </div>
    <!-- Hero Section End -->

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

                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="{{ route('about') }}" class="btn-default">read more</a>
                        </div>
                        <!-- About Us Button End -->
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

    <!-- Our Service Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Some of our exquisite services</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We offer some of the best hairstyle and braids services you could see!.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 order-lg-1 order-md-1">
                    <!-- Service Content Box Start -->
                    <div class="service-content-box">

                        @for($i = 0; $i < count($services) - 3; $i++)
                            <!-- Service Box Item Start -->
                            <div class="service-box-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('hetch/images/icon-hair-brush.png') }}" alt="">
                                </div>
                                <div class="service-item-content">
                                    <h3>{{ $services[$i]->name }}</h3>
                                    <p>{{ $services[$i]->description }}</p>
                                </div>
                            </div>
                            <!-- Service Box Item End -->
                        @endfor

                    </div>
                    <!-- Service Content Box End -->
                </div>

                <div class="col-lg-4 order-lg-2 order-md-3">
                    <!-- Service Box Image Start -->
                    <div class="service-box-image">
                        <img src="{{ asset('assets/uploads/content/about-section-img2.jpg') }}" alt="">
                    </div>
                    <!-- Service Box Image End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-3 order-md-2">
                    <!-- Service Content Box Start -->
                    <div class="service-content-box">

                        @for($i = 3; $i < count($services); $i++)
                            <!-- Service Box Item Start -->
                            <div class="service-box-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('hetch/images/icon-hair-brush.png') }}" alt="">
                                </div>
                                <div class="service-item-content">
                                    <h3>{{ $services[$i]->name }}</h3>
                                    <p>{{ $services[$i]->description }}</p>
                                </div>
                            </div>
                            <!-- Service Box Item End -->
                        @endfor

                    </div>
                    <!-- Service Content Box End -->
                </div>
                <div class="about-us-btn wow fadeInUp" data-wow-delay="0.8s">
                    <a href="{{ route('services') }}" class="btn-default">All Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service Section End -->

    <!-- Work Gallery Section Start -->
    <div class="work-gallery">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">work gallery</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover what we can do for you</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Explore our gallery of completed hairstyles and braids to see the quality  and attention to detail we bring to every hairstyle.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Work Gallery Item Start -->
                    <div class="work-gallery-item wow fadeInUp">
                        <div class="work-gallery-img">
                            <a href="{{ asset('assets/uploads/services/1.jpg') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/uploads/services/1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="work-gallery-content">
                            <h3><a href="#">Fulani Braids</a></h3>
                        </div>
                    </div>
                    <!-- Work Gallery Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Work Gallery Item Start -->
                    <div class="work-gallery-item wow fadeInUp">
                        <div class="work-gallery-img">
                            <a href="{{ asset('assets/uploads/services/2.jpg') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/uploads/services/2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="work-gallery-content">
                            <h3><a href="#">Knotless Braids</a></h3>
                        </div>
                    </div>
                    <!-- Work Gallery Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Work Gallery Item Start -->
                    <div class="work-gallery-item wow fadeInUp">
                        <div class="work-gallery-img">
                            <a href="{{ asset('assets/uploads/services/3.jpg') }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/uploads/services/3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="work-gallery-content">
                            <h3><a href="#">Dread Locks</a></h3>
                        </div>
                    </div>
                    <!-- Work Gallery Item End -->
                </div>
            </div>
            <div class="mt-2 d-flex justify-content-center">
                <a href="{{ route('gallery') }}" class="btn-default">Show More</a>
            </div>
        </div>
    </div>
    <!-- Work Gallery Section End -->

    <!-- Our Client Testimonial Start -->
    <div class="our-testimonial parallaxie" style="background-image: url(&quot;{{ asset('assets/uploads/content/about-section-img2.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -106.467px;">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Client testimonials your satisfaction matters</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We strive for excellence in every project. Our clients share their satisfaction and experiences, showcasing our commitment to quality and service.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-img">
                                                <figure>
                                                    <img src="{{ asset('hetch/images/quote-img.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Exceptional quality and outstanding service! The team guided us through every step, and our new windows look amazing.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('hetch/images/author-1.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>arlene mcCoy</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-img">
                                                <figure>
                                                    <img src="{{ asset('hetch/images/quote-img.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Exceptional quality and outstanding service! The team guided us through every step, and our new windows look amazing.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('hetch/images/author-2.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>david lee</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-img">
                                                <figure>
                                                    <img src="{{ asset('hetch/images/quote-img.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Exceptional quality and outstanding service! The team guided us through every step, and our new windows look amazing.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('hetch/images/author-3.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>tom marsh</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-quote-img">
                                                <figure>
                                                    <img src="{{ asset('hetch/images/quote-img.svg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Exceptional quality and outstanding service! The team guided us through every step, and our new windows look amazing.</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('hetch/images/author-4.jpg') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>nai jex</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Client Testimonial End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Faq Image Start -->
                    <div class="our-faqs-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/uploads/content/about-section-img3.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Our Faq Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Faqs Content Start -->
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">frequently asked questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Answers to your most asked questions</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        <span>1.</span> Can i reschedule or cancel my appointment?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Cancellations made with less than 24 hours' notice will incur a late fee equal to 50% of the scheduled service. If you need to cancel or reschedule your appointment, please do so at least 24 hours in advance.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Our Faqs Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->

@endsection
