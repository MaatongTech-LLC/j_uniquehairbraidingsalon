@extends('layouts.main')
@section('title', 'FAQ')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">FAQ</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>FAQ</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="faq_area">
    <div class="container">
        <div class="row">
            <div class="section_header text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                <div class="accordion_area mt-45">
                    <div class="accordion_item">
                        <button class="accordion_title">Can i reschedule or cancel my appointment?<i
                                class="fa fa-minus"></i></button>
                        <p class="accordion_body show">
                            Cancellations made with less than 24 hours' notice will incur a late fee equal to 50% of the scheduled service.
                            If you need to cancel or reschedule your appointment, please do so at least 24 hours in advance.
                           
                        </p>
                    </div>
                </div>
                {{-- Todo: Add Faq elements --}}
            </div>
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                <div class="accordion_area mt-45">
                    
                </div>
                {{-- Todo: Add Faq elements --}}
            </div>
        </div>
    </div>
</section>

@endsection
