@extends('layouts.main')
@section('title', '404 Error')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">404 Error</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>404 Error</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="error_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="error_area_inner text-center">
                <div class="image_area">
                    <img src="{{ asset('assets/themes/basic/images/404-page/404.png')}}" alt="">
                </div>
                <div class="text_area mb-40">
                    <h1 class="mt-40 mb-40">ERROR</h1>
                    <h4>Page Not Found</h4>
                </div>
                <a href="{{ route('home') }}" class="common_btn d-flex justify-content-center align-items-center m-auto">back To home</a>
            </div>
        </div>
    </div>
</div>
@endsection