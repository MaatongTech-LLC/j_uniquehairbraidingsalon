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
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>Services</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Services Area --}}

<section class="main_services_area">
    <div class="container">
        <div class="row gy-4">
            @foreach ($services as $service)
                <div class="col-md-4 aos-init" data-aos="fade-up">
                    <div class="card box_shadow1 border-0 ">
                        <div class="card_header">
                            <div class="image_area ">
                                <a href="{{ route('service.show', $service->id) }}">
                                    <img src="{{ $service->getImage() }}" alt=".."></a>
                            </div>
                            <div class="text_area">
                                <h6>$1{{ $service->price }}</h6>
                            </div>
                        </div>
                        <div class="card_body">
                            <div class="section_header">
                                <a href="{{ route('service.show', $service->id) }}">
                                    <h5 class="pb-15 transition">{{ $service->name }}</h5>
                                </a>
                                <p class="pb-25">
                                    {{ substr($service->description, 0, 50) }}...
                                </p>
                                <a href="{{ route('service.show', $service->id) }}"><span class="d-flex align-items-center transition">READ MORE<i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <!-- Pagination -->
            <div class="pagination_area">
                {{ $services->links() }}
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