@extends('new.layout')
@section('title', '419 Error')

@section('content')
    <div class="page-header parallaxie" style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">P</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">g</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                </div>

                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;"> </div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">E</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">x</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div>

                                </div>
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">419 error page</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Error Section Start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                       <h1 style="font-size: 70px;">419</h1>
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">O</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">s</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">!</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">p</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">a</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">g</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">e</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">f</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">o</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">u</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">n</div><div style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">d</div></div></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">Sorry, this page has expired.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="{{ route('home') }}" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><span>back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Section End -->

@endsection
