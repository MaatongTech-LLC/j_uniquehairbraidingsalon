@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Login</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>Login</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login_area">
    <div class="container">
        <div class="row justify-content-center">

                                <div class="section_header text-center">
                <h2>Welcome Back. Log In</h2>
            </div>
            <div class="col-md-6 login_image_area d-flex align-items-end justify-content-center pb-30 aos-init aos-animate" data-aos="fade-left" style="background: linear-gradient(rgba(250, 90, 178, 0.5), rgba(233, 49, 169, 0.5)), url({{ asset('assets/uploads/content/about-section-img2.jpg') }}); background-repeat: no-repeat; background-size: cover; ">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/uploads/logo/logo-white.png')}}" alt=""></a>
            </div>

                                <div class="col-md-6 registration_form aos-init aos-animate" data-aos="fade-right">
                <form action="{{ route('login.post') }}" method="post">
                    <input type="hidden" name="_token" value="IKdJuTCcraUyx3IhMGMchWrVy7DbW6MdXVUeWDj7">                            <div class="col-md-12">
                        <div class="name_area icon_position mb-30">
                            <input type="text" name="username"  class="form-control" placeholder="Username or Email Address" autocomplete="off" fdprocessedid="cryca">
                            <div class="image_area mt-1">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                                                                                                </div>
                    </div>
                    <div class="col-md-12">
                        <div class="name_area icon_position">
                            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" fdprocessedid="05icg">
                            <div class="image_area mt-1">
                                <i class="fa-sharp fa-solid fa-unlock"></i>
                            </div>
                                                            </div>
                    </div>


                    

                    <div class="remember_forgate d-flex justify-content-between align-items-center">
                        <div class="condition_area mt-30 mb-40 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me?</label>
                        </div>
                        <a href="{{ route('forgot-password') }}" class="highlight">Forgot Password?</a>
                    </div>
                    <button class="common_btn mb-40 d-flex justify-content-center align-items-center" fdprocessedid="x2nznd">Login</button>
                    <h6 class="highlight text-center mb-40">Haven’t any account? <a href="{{ route('register') }}">Register</a></h6>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection