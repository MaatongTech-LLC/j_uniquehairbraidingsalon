@extends('new.layout')
@section('title', 'Successful Payment')

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
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>

                                </div>
                                <div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>

                                </div>
                            </div>

                        </h1>

                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Payment Successful</li>
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
                        <img src="{{ asset('hetch/images/icon-success.png') }}" style="height: 250px; width: 250px;" alt="">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: center; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">P</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>

                                    </div>
                                    <div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>

                                    </div>
                                </div>

                            </h2>                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">Congratulations Your Payment Is Successful. Check Your Email For Details</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="{{ route('home') }}" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><span>back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Section End -->

@endsection
