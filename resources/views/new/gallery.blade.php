@extends('new.layout')
@section('title', 'Gallery')

@section('content')
    <div class="page-header parallaxie"
         style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">I</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div></div></h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Gallery Section Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                @foreach($images as $image)
                    <div class="col-lg-4 col-6">
                        <!-- image gallery start -->
                        <div class="photo-gallery wow fadeInUp position-relative" data-cursor-text="View" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="{{ asset('assets/gallery-images/' . $image) }}">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/gallery-images/' . $image) }}" alt="">
                                </figure>
                            </a>
                            <div style="position: absolute; top: 50%; right: 30%;">
                                <img  height="100px" width="150px;" src="{{ asset('assets/uploads/logo/logo-white.png') }}" alt="">
                            </div>
                        </div>
                        <!-- image gallery end -->
                    </div>
                @endforeach

            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Page Gallery Section End -->

@endsection
