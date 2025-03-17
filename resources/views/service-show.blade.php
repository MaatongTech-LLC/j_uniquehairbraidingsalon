@extends('layouts.main')
@section('title', 'Services '. $service->name)
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Service Details</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Service Details</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Services Area --}}
<section class="services_details_area">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="section_right">
                    <div class="main_image_area">
                        <img src="{{ $service->getImage() }}"
                            alt="..">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="section_header">
                    <h2 class="mt-40">{{ $service->name }}</h2>
                    <h5 class="mb-20 highlight">${{ $service->price }}</h5>
                    <h6 class="mb-20">{{ $service->duration }} h</h5>

                    <p>
                        {{ $service->description }}
                    </p>
                </div>
                <div class="section_right_footer">
                    <a class="common_btn mt-40 px-4 py-2" @auth data-bs-toggle="modal" href="#bookingModal" role="button" @endauth @guest href="{{ route('login', ['error' => 1]) }} @endguest">BOOK APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>

    <section class="single_product_area">
        <div class="container">
            <div class="row">
                <div class="tabs_area mt-60">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" tabindex="-1">
                                Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane">
                                Reviews
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                             tabindex="0">
                            <div class="description_area">
                                {{ $service->description }}</div>
                        </div>
                        <div class="tab-pane fade accordion accordionExample" id="profile-tab-pane"
                             role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="comment_area accordion-item">
                                <div class="comment aos-init pb-1" data-aos="fade-up">
                                    <div class="section_header mt-40">
                                        <h4>Reviews</h4>
                                    </div>
                                    <a class="common_btn my-1 px-4 py-2" @auth data-bs-toggle="modal" href="#reviewModal" role="button" @endauth @guest href="{{ route('login', ['error' => 1]) }} @endguest">Make a review</a>
                                    @foreach($service->reviews->take(10) as $review)
                                        <div class="comment_inner d-flex mt-20">
                                            <div class="image_area">
                                                <img class="w-50"
                                                     src="{{ asset('assets/uploads/content/user-testimonial.png') }}"
                                                     alt="user_image">
                                            </div>
                                            <div class="text_area">
                                                <h5 class="d-flex justify-content-between accordion-header mb-2"
                                                    id="headingOne">
                                                    {{ $review->user->name }} </h5>
                                                <span class="highlight">{{ $review->created_at->diffForHumans() }}</span>
                                                <p>
                                                    {{ $review->content }}
                                                </p>

                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

<div class="modal fade" id="bookingModal" aria-hidden="true" aria-labelledby="bookingModalLabel" tabindex="-1">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="bookingModalLabel">Book {{ $service->name }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="form_area container pt-15 pb-15">
                <form action="{{ route('booking.post') }}" method="post">
                    @csrf

                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <div class="mt-3">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ auth()->user()->name ?? '' }}"
                               readonly>
                    </div>
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror

                    <div class="mt-4">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ auth()->user()->email ?? '' }}"
                               readonly>
                    </div>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror


                    <div class="mt-4">
                        <input id="datepicker"  name="date" placeholder="Select a date" class="form-control w-100">
                    </div>
                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror

                    <div class="mt-4">
                        <input id="timepicker"  name="time" placeholder="Select a time" class="form-control w-100">
                    </div>
                    @error('time') <small class="text-danger">{{ $message }}</small> @enderror


                    <div class="d-flex align-items-center justify-content-between">
                        <div class="mt-4">
                            <input id="full_price" type="radio" class="form-check-input" value="full_price" name="payment_type" required="">
                            <label for="full_price">Pay full amount <strong>(${{ $service->price }})</strong></label>
                        </div>

                        <div class="mt-4">
                            <input id="deposit" type="radio" class="form-check-input" value="deposit" name="payment_type" required="">
                            <label for="deposit">Pay deposit <strong>(${{$service->deposit_price}})</strong></label>
                        </div>
                        @error('payment_type') <small class="text-danger">{{ $message }}</small> @enderror

                    </div>

                    <button type="submit" class="common_btn mt-4" fdprocessedid="xt1fa">BOOK APPOINTMENT</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="reviewModal" aria-hidden="true" aria-labelledby="reviewModalLabel" tabindex="-1">
    <div class="modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="bookingModalLabel">Review this service {{ $service->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="form_area container pt-15 pb-15">
                <form action="{{ route('review.post') }}" method="post">
                    @csrf

                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <div class="mt-1">
                        <label for="content">Enter your review</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        @error('content') <small class="text-danger">{{ $message }}</small> @enderror

                    </div>

                    <button type="submit" class="common_btn mt-4">POST</button>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection

@push('styles')
    <style>
        .page-link {
            color: #fc6098;
        }

        .page-link:hover {
            color: #0a6847;
        }

        .active>.page-link {
            background-color: #fc6098;
            border-color: #0a6847;
        }

        .xdsoft_datetimepicker {
            z-index: 9999 !important;
        }

    </style>
@endpush

@push('scripts')
    <script>
        $('#datepicker').datetimepicker({
            timepicker: !1,
            datepicker: !0,
            format: "Y-m-d",
            startDate: new Date(),
            maxDate: new Date().setDate(new Date().getDate() +30),
            minDate: 0,
            step: 10
        });

        $("#timepicker").datetimepicker({
            datepicker: !1,
            timepicker: !0,
            format: "H:i",
            step: 30,
            minTime: '9:00',
            maxTime: '18:00'
        });
    </script>
@endpush
