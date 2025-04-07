@extends('new.layout')
@section('title', 'Services')

@section('content')
    <div class="page-header parallaxie" style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">O</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">v</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
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
               @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <!-- Page Service Item Start -->
                        <div class="page-service-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="page-service-image">
                                <a href="{{ route('service.show', $service->id) }}" data-cursor-text="Show">
                                    <figure class="image-anime">
                                        <img src="{{ $service->getImage() }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="page-service-content">
                                <h3>{{ $service->name }}</h3>
                                <h6 class="my-3">${{ $service->price }}</h6>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('service.show', $service->id) }}" class="btn-default">Details <i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('checkout', ['checkout_type' => 'appointment']) }}" method="GET" class="form-inline">
                                        @csrf
                                        <input type="hidden" name="checkout_type" value="appointment">
                                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                                        <button type="submit" class="btn-default">Book <i class="fa-solid fa-calendar"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Page Service Item End -->
                    </div>
               @endforeach

            </div>
        </div>
    </div>
    <!-- Page Services Section End -->

@endsection
