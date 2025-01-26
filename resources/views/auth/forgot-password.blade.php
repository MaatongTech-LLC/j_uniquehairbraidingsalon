@extends('layouts.main')
@section('title', 'Forgot Password')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Forgot Password</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                        <span>Forgot Password</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="form-block py-5 registration_form">
                                            <form class="login-form" action="{{ route('forgot-password.post') }}" method="post">
                        <input type="hidden" name="_token" value="IKdJuTCcraUyx3IhMGMchWrVy7DbW6MdXVUeWDj7">                            <div>
                            <h3 class="title mb-30">Reset Password</h3>

                            <div class="form-group mb-30 name_area icon_position">
                                <input class="form-control" type="email" name="email" value="" placeholder="Enter your email address" autocomplete="off" fdprocessedid="4lr7mp">

                                                                </div>


                            <div class="btn-area">
                                <button class="common_btn mb-40 d-flex justify-content-center align-items-center" type="submit" fdprocessedid="oh8mc"><span>Send Password Reset Link</span></button>
                            </div>

                            <div class="login-query mt-30 text-center">
                                <a href="{{ route('register') }}">Don't have any account? Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection