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
                        <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                            <span>Gallery</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
