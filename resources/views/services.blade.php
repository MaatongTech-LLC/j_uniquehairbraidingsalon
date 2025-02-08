@extends('layouts.main')
@section('title', 'Services')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Services</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Services</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="recent_blog_area   all_product_area newsfeed_area">
    <div class="container">
        <div class="row">
            <div class="section_header text-center mb-45">
                <h2>Our Services</h2>
                <p class="pb-45">Discover the amazing haircuts you can get with us</p>
            </div>
        </div>
        <div class="row g-xl-5 g-4">
            @foreach ($services as $service)
               <div class="col-md-6">
                <div class="single_card_area mb-5 aos-init aos-animate" data-aos="fade-down">
                    <div class="card_header" style="border-top-right-radius: 50%; overflow: hidden;">
                        <a href="{{ route('service.show', $service->id) }}">
                            <img style="max-height: 350px; min-height: 350px; object-fit: cover;" src="{{ $service->getImage() }}" alt="{{ $service->getImage() }}">
                        </a>
                    </div>
                    <div class="card-body" style="background: #fff2f8;">
                        <div class="blog_content">
                            <div class="section_overlay text-capitalize d-flex justify-content-center align-items-center">
                                {{ $service->category->name }} </div>
                                <a href="{{ route('service.show', $service->id) }}">
                                    <h5 class="pb-15 transition">{{ $service->name }}</h5>
                                </a>
                            <ul class="section_list d-flex justify-content-between">
                                <li class="d-flex  align-items-center">
                                    <span class="blog_icon"><i class="fa-regular fa-clock"></i><span class="blog_date">{{ $service->duration }}</span></span>
                                
                                </li>
                                <li>
                                    <span class="blog_icon text-capitalize"><i class="fa-regular fa-user"></i><span class="blog_date">{{ $service->type }}</span></span>
                                </li>

                                
                            </ul>
                            <p class="card-text"></p>
                            <p>{{ substr($service->description, 0, 50) }}...</p>
                        </div>
                        <div class="card_bottom d-flex align-items-center justify-content-between mt-3">
                            <div class="left d-flex align-items-center">
                                <a href="{{ route('service.show', $service->id) }}"><span
                                    class="d-flex align-items-center common_btn common_btn_checkout p-2 transition">READ MORE<i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            @endforeach
           
        </div>
        <div class="pagination_area">
            {{ $services->links() }}
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
            filter: drop-shadow(0 0 2px rgba(223, 106, 151, 0.5));
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
