@extends('layouts.main')
@section('title', 'Register')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Register</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Register</span></h6>
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
                <form action="{{ route('register.post') }}" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="text" name="name" class="form-control" placeholder="Full Name"
                                    value="" autocomplete="off">
                                <div class="image_area mt-1">
                                    <i class="fa-regular fa-user"></i>
                                </div>

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="name_area icon_position">
                                <input type="email" name="email" class="form-control" placeholder="Email Address"
                                    value="" autocomplete="off" >
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
                        <div class="col-md-6">
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


                    </div>
                    <div class="remember_forgot">
                        <div class="condition_area mt-4 mb-40 form-check  d-flex align-items-center">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1" value="">
                            <label class="form-check-label mt-1" for="exampleCheck1">I Have Read And Agree To The
                                Website <a class="highlight" href="{{ route('terms-and-conditions') }}">Terms And Conditions</a></label>
                        </div>

                    </div>
                    <button type="submit" class="common_btn mb-40 d-flex justify-content-center align-items-center"
                        fdprocessedid="vshkjl">Register</button>
                    <h6 class="highlight text-center mb-40">Already have account? <a
                            href="{{ route('login') }}"> Sign In</a>
                    </h6>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
