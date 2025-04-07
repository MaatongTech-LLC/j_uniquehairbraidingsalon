@extends('new.layout')
@section('title', 'Terms and conditions')

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
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">T</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">m</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>

                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">&</div>

                                </div>
                                <div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">C</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">d</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div>

                                </div>
                            </div>
                        </h1>

                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Terms and conditions Section Start -->
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="error-page-content">

                        <div class="error-page-content-body">
                            <div class="section_bottom">
                                <p> </p><h3>Appointment Cancellation and Late Arrival Policy</h3>
                                <br><br>
                                <h4>Appointment Cancellation and Late Arrival Policy</h4>
                                <ul class="mt-3">
                                    <li>
                                        <i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If you need to cancel or reschedule your appointment, please do so at least 24 hours in advance.
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check check rounded-full text-center icon-check"></i> Cancellations made with less than 24 hours' notice will incur a late fee equal to 50% of the scheduled service.
                                    </li>
                                </ul>
                                <br><br>
                                <h4>Late Arrival Policy</h4>
                                <ul class="mt-3">
                                    <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> We provide a 15-minute grace period for late arrivals.</li>
                                    <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If a client arrives 15 to 30 minutes late, a late fee may be charged.</li>
                                    <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> Provide you with targeted advertising and marketing</li>
                                    <li><i class="fa-solid fa-check check rounded-full text-center icon-check"></i> If a client arrives over 30 minutes late, the appointment will be treated as a no-show.</li>
                                </ul>
                                <br>
                                <br>

                                <h4>Notice to customers</h4>

                                <p class="text-light-emphasis">
                                    If you need curly hair color, please let us know in advance so we can confirm its availability in our store.
                                    We want to avoid any inconvenience, as your satisfaction is our top priority. We look forward to your visit!
                                </p>
                                <em>Please note that all pric may vary.</em>

                                <h4 class="mt-4">Contact Us</h4>
                                <p class="text-light-emphasis">If you have any questions about this terms and conditions, please contact us at <a class="highlight" href="mailto:JUniqueHairBraidingSalon@gmail.com">JUniqueHairBraidingSalon@gmail.com</a></p><p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms and conditions Section End -->

@endsection

@push('styles')
    <style>
        .section_bottom ul {
            list-style: none;
            text-align: left;
        }
        .section_bottom ul li {
            font-size: 20px;
        }

        .section_bottom p {
            text-align: left;
        }

        .icon-check {
            background-color: #fc6098; color: white; height: 25px; width: 25px;
            border-radius: 50%;
            padding: 2px 0;
        }
    </style>
@endpush
