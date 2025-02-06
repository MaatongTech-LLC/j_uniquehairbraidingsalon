@extends('layouts.main')
@section('title', 'Reset Password')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Reset Password</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Reset Password</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="register_area login_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section_header text-center">
                <h2>Create an Account</h2>
            </div>
            <div class="col-lg-10 registration_form aos-init aos-animate" data-aos="fade-right">
                <form action="{{ route('reset-password.post') }}" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="name_area icon_position">
                                <input type="email" name="email" class="form-control" placeholder="Email Address"
                                    value="{{ request('email') }}" autocomplete="off" >
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    autocomplete="off" fdprocessedid="89mi6g">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-lock"></i>
                                </div>

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-40">
                            <div class="name_area icon_position">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm Password" autocomplete="off" fdprocessedid="7wxgg9">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-lock"></i>
                                </div>

                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="token" value="{{ request('token') }}">

                    </div>
                  
                    <button type="submit" class="common_btn mb-40 d-flex justify-content-center align-items-center">Submit</button>
                    <h6 class="highlight text-center mb-40"><a href="{{ route('login') }}"> Sign In</a>
                    </h6>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
