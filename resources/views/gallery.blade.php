@extends('layouts.main')
@section('title', 'Gallery')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Gallery</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Gallery</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="gallery_area">
    <div class="container aos-init aos-animate" data-aos="zoom-in-up">
        <div class="row">
            <div class="section_header text-center mb-45">
                <h2>PHOTO GALLERY</h2>
                <p class="title_details">Beautiful haircuts made by us.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div id="masonryContainer" class="cols mx-auto text-center gallery_magnific_popup">
                @foreach ($images as $image)
                    <div class="img-box mix Spa">
                        <a href="{{ asset('assets/gallery-images/' . $image) }}"
                            target="_blank"><img src="{{ asset('assets/gallery-images/' . $image) }}" alt="{{ $image }}"></a>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>
@endsection
