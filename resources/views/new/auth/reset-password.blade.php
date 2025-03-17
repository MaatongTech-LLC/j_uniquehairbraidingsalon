@extends('new.layout')
@section('title', 'Reset Password')

@section('content')
    <div class="page-header parallaxie"
         style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">R</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">P</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">w</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div>
                                </div>
                            </div>


                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Contact Section Start -->
    <div class="page-contact-us" style="background-color: #f2f4f6;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Reset Your Password</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">R</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>
                                </div>
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">P</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">w</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div>
                                </div>
                            </div>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="contact-form-box px-5" style="max-width: 700px; margin: 0 auto;">
                <div class="container">
                    <form  action="{{ route('reset-password.post') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s" novalidate="true" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        @csrf
                        <input type="hidden" name="token" value="{{ request('token') }}">
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address" value="{{ request('email') }}" required="">
                                @error('email')
                                <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Your Password" required="">
                                @error('password')
                                <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required="">
                                @error('password_confirmation')
                                <div class="help-block with-errors text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-form-btn w-100">
                                    <button type="submit" class="btn-default">Save</button>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                    <p></p>
                                    <a style="color: var(--primary-color)"  href="{{ route('login') }}">Login</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Contact Section End -->



@endsection
