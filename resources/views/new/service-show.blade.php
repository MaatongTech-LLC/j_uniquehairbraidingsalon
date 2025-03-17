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
                                    <i class="fa-regular fa-dollar"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Service price:</h3>
                                    <p>${{ $service->price }}</p>
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

                        <div class="d-flex gap-3 my-2">
                            <form action="{{ route('checkout', ['checkout_type' => 'appointment']) }}" method="GET" class="form-inline">
                                @csrf
                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                <button type="submit" class="btn-default">Book Appointment <i class="fa-solid fa-calendar"></i></button>
                            </form>                            @auth
                                <a class="btn-default btn-highlighted" data-bs-toggle="modal" href="#reviewModal" role="button">Make Review</a>
                            @endauth
                        </div>

                        <div class="mt-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                            type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false" tabindex="-1">
                                        Service Information </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                            aria-selected="true">
                                        Reviews
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content border-O" id="myTabContent">
                                <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                                     tabindex="0">
                                    <!-- Project Entry Start -->
                                    <div class="project-entry">
                                        <!-- Project Information Start -->
                                        <div class="project-info">
                                            <h4 class="text-anime-style-3" style="perspective: 400px;">
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
                                            </h4>
                                            <p class="wow fadeInUp"
                                               style="visibility: visible; animation-name: fadeInUp;">{{ $service->description }}</p>
                                        </div>
                                        <!-- Project Information End -->


                                        <!-- Project Gallery Images Start -->
                                        <div class="project-gallery gallery-items">
                                            <h4 class="text-anime-style-3" style="perspective: 400px;">
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
                                            </h4>

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
                                <div class="tab-pane fade accordion accordionExample active show" id="profile-tab-pane"
                                     role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="accordion-item">
                                        <div class="container aos-init pb-1" data-aos="fade-up">
                                            <div class="section_header mt-4">
                                                <h4>Reviews</h4>
                                            </div>
                                            @forelse($service->reviews->take(10) as $review)
                                                <div class="mt-2">
                                                        <img
                                                             src="{{ asset('assets/uploads/content/user-testimonial.png') }}" height="80px" alt="user-profile-img">
                                                        <h5 class="d-flex justify-content-between accordion-header mb-2"
                                                            id="headingOne">
                                                            {{ $review->user->name }} </h5>
                                                    <div class="star-rating animated-stars">

                                                       @for($i = 0; $i < $review->rating; $i++)
                                                            <input name="rating" readonly>
                                                            <label style="color: #ffc107;" class="bi bi-star-fill"></label>
                                                       @endfor
                                                           @if($review->rating < 5)
                                                               @for($j = 0; $j < (5 - (int)$review->rating); $j++)
                                                                   <input name="rating" readonly>
                                                                   <label class="bi bi-star-fill"></label>
                                                               @endfor
                                                           @endif

                                                    </div>
                                                        <small class="text-muted d-block">{{ $review->created_at->diffForHumans() }}</small>
                                                        <p>
                                                            {{ $review->content }}
                                                        </p>

                                                </div>
                                            @empty
                                                <p class="text-muted text-center">No review yet!</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->

    <div class="modal fade" id="reviewModal" aria-hidden="true" aria-labelledby="reviewModalLabel" tabindex="-1">
        <div class="modal modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="bookingModalLabel">Review  <span class="text-light-emphasis">{{ $service->name }}</span></h5>
                    <button id="bookingModalDismissBtn" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form_area container pt-15 pb-15">
                    <form action="{{ route('review.post') }}" method="post">
                        @csrf

                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <div class="container">
                            <div class="rating-card py-2">
                                <p class="mb-4">Your rating  <small class="text-muted d-inline-block mt-2">(Click to rate)</small></p>
                                <div class="star-rating animated-stars">
                                    <input type="radio" id="star5" name="rating" value="5" required>
                                    <label for="star5" class="bi bi-star-fill"></label>
                                    <input type="radio" id="star4" name="rating" value="4" required>
                                    <label for="star4" class="bi bi-star-fill"></label>
                                    <input type="radio" id="star3" name="rating" value="3" required>
                                    <label for="star3" class="bi bi-star-fill"></label>
                                    <input type="radio" id="star2" name="rating" value="2" required>
                                    <label for="star2" class="bi bi-star-fill"></label>
                                    <input type="radio" id="star1" name="rating" value="1" required>
                                    <label for="star1" class="bi bi-star-fill"></label>
                                </div>
                            </div>
                            @error('rating') <small class="text-danger">{{ $message }}</small> @enderror
                            <div class="">
                                <label for="content" class="pb-1">Your review</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small> @enderror

                            </div>

                            <button type="submit" class="btn-default my-3">POST</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .accordion-item {
            border: 0!important;
        }
        .rating-card .star-rating {
            direction: rtl;
            display: inline-block;
            cursor: pointer;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            font-size: 18px;
            padding: 0 2px;
            transition: all 0.2s ease;
        }

        .rating-card .star-rating label {
            font-size: 24px;
            cursor: pointer;
        }

        .rating-card .star-rating label:hover,
        .rating-card .star-rating label:hover~label,
        .rating-card .star-rating input:checked~label {
            color: #ffc107;
        }

    </style>
@endpush

@push('scripts')
    <script>
        document.querySelectorAll('.star-rating:not(.readonly) label').forEach(star => {
            star.addEventListener('click', function() {
                this.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
        });

    </script>
@endpush
