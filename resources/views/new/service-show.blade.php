@extends('new.layout')
@section('title', 'Services')

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
                                {{ $service->name }}
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->name }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Services Section Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="project-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-list wow fadeInUp"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="project-detail-title">
                                <h3>about service</h3>
                            </div>
                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Service name:</h3>
                                    <p>{{ $service->name }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Service duration:</h3>
                                    <p>{{ $service->duration }} hrs</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-circle-check"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>category:</h3>
                                    <p>{{ $service->category->name }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>type:</h3>
                                    <p>{{ $service->type }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                        </div>

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s"
                             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Sidebar CTA Content Start -->
                            <div class="sidebar-cta-title">
                                <h2>contact info</h2>
                            </div>
                            <!-- Sidebar CTA Content End -->

                            <!-- Sidebar CTA Contact Start -->
                            <div class="sidebar-cta-contact">
                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-location.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>Manor, Texas, USA</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->

                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-phone.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>(+1) 737-203-1025</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->

                                <!-- Sidebar CTA Contact Item Start -->
                                <div class="sidebar-cta-contact-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('hetch/images/icon-mail.svg') }}" alt="">
                                    </div>
                                    <div class="cta-contact-item-content">
                                        <p>JUniqueHairBraidingSalon@gmail.com</p>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Contact Item Start -->
                            </div>
                            <!-- Sidebar CTA Contact End -->
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Project Single Image Start -->
                        <div class="project-single-image">
                            <figure class="image-anime reveal"
                                    style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="{{ $service->getImage() }}" alt="" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <!-- Project Single Image End -->

                        <a href="#" class="btn-default">Book Appointment</a>

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <!-- Project Information Start -->
                            <div class="project-info">
                                <h2 class="text-anime-style-3" style="perspective: 400px;">
                                    <div class="split-line"
                                         style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                S
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                v
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">

                                            </div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n
                                            </div>
                                        </div>
                                    </div>
                                </h2>
                                <p class="wow fadeInUp"
                                   style="visibility: visible; animation-name: fadeInUp;">{{ $service->description }}</p>
                            </div>
                            <!-- Project Information End -->


                            <!-- Project Gallery Images Start -->
                            <div class="project-gallery gallery-items">
                                <h2 class="text-anime-style-3" style="perspective: 400px;">
                                    <div class="split-line"
                                         style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                S
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                v
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">

                                            </div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r
                                            </div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                y
                                            </div>
                                        </div>
                                    </div>
                                </h2>

                                <div class="project-gallery-images">
                                    <!-- Project Gallery img Start -->
                                    <div class="project-gallery-img wow fadeInUp" data-cursor-text="View"
                                         style="visibility: visible; animation-name: fadeInUp;">
                                        <a href="{{ $service->getImage() }}">
                                            <figure class="image-anime reveal"
                                                    style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                                <img src="{{ $service->getImage() }}" alt=""
                                                     style="transform: translate(0px, 0px);">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- Project Gallery img End -->

                                </div>
                            </div>
                            <!-- Project Gallery Images End -->
                        </div>
                        <!-- Project Entry End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->

@endsection
