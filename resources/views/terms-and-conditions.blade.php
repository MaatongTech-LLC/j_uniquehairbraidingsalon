@extends('layouts.main')
@section('title', 'Terms and Conditions')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Terms and Conditions</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Terms and Conditions</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="privacy-policy">
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-12">
                <div class="process_area">
                    <div class="section_bottom">
                        <p> </p><h3>Appointment Cancellation and Late Arrival Policy</h3>
                            <br><br>
                            <h5>Appointment Cancellation and Late Arrival Policy</h5>
                                <ul class="mt-3">
                                    <li>
                                        <i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If you need to cancel or reschedule your appointment, please do so at least 24 hours in advance.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check check rounded-full text-center icon-check"></i> Cancellations made with less than 24 hours' notice will incur a late fee equal to 50% of the scheduled service.
                                    </li>
                                </ul>
                            <br><br>
                            <h5>Late Arrival Policy</h5>
                            <ul class="mt-3">
                                <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> We provide a 15-minute grace period for late arrivals.</li>
                                <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If a client arrives 15 to 30 minutes late, a late fee may be charged.</li>
                                <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> Provide you with targeted advertising and marketing</li>
                                <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If a client arrives over 30 minutes late, the appointment will be treated as a no-show.</li>
                            </ul>
                            <br>
                            <br>
                            
                            <h5>Contact Us</h5>
                            <p>If you have any questions about this terms and conditions, please contact us at <a class="highlight" href="mailto:contact@j-uniquehairbraidingsalon.com">contact@j-uniquehairbraidingsalon.com</a></p><p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@push('styles')
    <style>
        .icon-check {
            background-color: #fc6098; color: white; height: 25px; width: 25px;
        }
    </style>
@endpush

