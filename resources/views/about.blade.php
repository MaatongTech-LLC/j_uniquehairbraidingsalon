@extends('layouts.main')
@section('title', 'About')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">About Us</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>About Us</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="main_about_area about2_area">
    <div class="container">
                    <div class="row g-md-4 g-5">
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                    <div class="about2_left">
                        <div class="feature1">
                            <img src="{{ asset('assets/uploads/content/about-section-img2.jpg')}}" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                    <div class="about2_right">
                        <div class="section_header">
                            <h2>Where Creativity Meets Culture</h2>
                            <p class="header_text text-dark">
                                At <strong>J Unique Hair Braiding Salon</strong>, we specialize in transforming your hair into stunning, 
                                long-lasting braids and protective styles. With years of experience and a passion for all things hair, 
                                our skilled stylists are dedicated to providing you with a personalized and comfortable experience. 
                                We offer a wide variety of braiding techniques, from classic box braids to intricate cornrows, 
                                ensuring that every style is tailored to fit your unique look. Whether you’re 
                                looking for a bold new style or a simple protective style, <strong>J Unique Hair Braiding Salon</strong> is your go-to destination for all things braids. Let us help you achieve the hair of your dreams!
                            </p>

                        </div>
                        <div class="section_body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa-solid fa-arrow-right-long"></i>Styling with experience                                    </p>
                                    <p>
                                        <i class="fa-solid fa-arrow-right-long"></i>A professional salon                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <i class="fa-solid fa-arrow-right-long"></i>We understand styles                                    </p>
                                    <p>
                                        <i class="fa-solid fa-arrow-right-long"></i>You will need best style                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><span class="highlight">Justine Efouba</span>
                                        - CEO                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            <div class="bottom_area pt-150 aos-init" data-aos="fade-up">
                <div class="row g-4">
                                            <div class="col-md-4">
                            <div class="card border-0 rounded-0 h-100 box_shadow2">
                                <div class="card_inner d-flex  align-items-center m-auto">
                                    <div class="img_area">
                                        <img src="/assets/uploads/content/63aa8b265d2e21672121126.png" alt="">
                                    </div>
                                    <div class="text_area">We Have 30 Years of Hair Dressing  Experience</div>
                                </div>
                            </div>
                        </div>
                                            <div class="col-md-4">
                            <div class="card border-0 rounded-0 h-100 box_shadow2">
                                <div class="card_inner d-flex  align-items-center m-auto">
                                    <div class="img_area">
                                        <img src="/assets/uploads/content/63aa8b3990cdb1672121145.png" alt="">
                                    </div>
                                    <div class="text_area">The Professional Hair Salon Since 1987.</div>
                                </div>
                            </div>
                        </div>
                                            <div class="col-md-4">
                            <div class="card border-0 rounded-0 h-100 box_shadow2">
                                <div class="card_inner d-flex  align-items-center m-auto">
                                    <div class="img_area">
                                        <img src="/assets/uploads/content/63aa8b59f27b91672121177.png" alt="">
                                    </div>
                                    <div class="text_area">Our Behaviour is Good with our Customers.</div>
                                </div>
                            </div>
                        </div>
                                    
                    </div>
            
                </div>
            </div>
</section>

<section class="sub_about_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section_left">
                    <div class="image_area">
                        <img src="{{ asset('assets/uploads/content/about-section-img3.jpg') }}" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center position_right">
                <div class="section_right">
                    <div class="image_area">
                        <img src="assets/themes/basic/images/quotes.png" alt="...">
                    </div>
                    <div class="section_header">
                        <h2>WE EXCEL AT PREMUM HAIR CARE AND STYLING</h2>
                        <p class="highlight">We provide top-quality hair care and expert braiding services. Our skilled stylists deliver flawless, long-lasting styles, ensuring your hair looks and feels its best. Experience the ultimate in beauty and care!.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection