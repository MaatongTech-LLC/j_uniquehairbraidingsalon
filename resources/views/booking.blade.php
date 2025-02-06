@extends('layouts.main')
@section('title', 'Booking')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="secion_header">
                <h1 class="banner_title">Booking</h1>
            </div>
            <div class="breadcrumb d-flex justify-content-center">
                <div class="text_area">
                    <h6><a href="{{ route('home') }}"><span>Home</span></a> |
                        <span>Booking</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="appoinment_area"
    style="background: linear-gradient(rgb(53, 49, 47, 0.9),rgb(53, 49, 47, 0.9)); background-repeat: no-repeat; background-size: 100% 50%; background-position: top">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                <div class="section_left h-100">
                    <div class="card bg-transparent border-0 rounded-0 h-100">
                        <div class="section_header pb-40">
                            <h2>Do You Need To Make An Enquiry ?</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        <div class="image_area h-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55083.73565031964!2d-97.55755933798275!3d30.358523603571502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644c0c487d2a4db%3A0x7486e48c8c2d3407!2sManor%2C%20Texas%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sde!4v1737740725343!5m2!1sfr!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                <div class="section_right">
                    <form action="{{ route('booking.post') }}" method="post">
                        @csrf
                        <div class="mt-3">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ auth()->user()->name }}"
                                autocomplete="off">
                        </div>
                        <div class="mt-4">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ auth()->user()->email }}"
                                autocomplete="off">
                        </div>

                        <div class="mt-4">
                            <select class="form-select form-control" name="service_id">
                                <option>Select a service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}" @if(request('service_id') == $service->id) selected  @endif>{{ $service->name }}</option>
                                @endforeach
                                {{-- @foreach ($categories as $category)
                                    <optgroup class="text-capitalize" label="{{ $category->name }}"></optgroup>

                                @endforeach --}}
                            </select>
                        </div>
                        <div class="mt-4 date">
                            <input id="datepicker"  name="date" placeholder="Select a date" class="form-control w-100"
                                autocomplete="off">
                        </div>
                        <div class="mt-4 date">
                            <input id="timepicker"  name="time" placeholder="Select a time" class="form-control w-100"
                                autocomplete="off">
                        </div>

                        <button type="submit" class="common_btn mt-4" fdprocessedid="xt1fa">BOOK APPOINTMENT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@push('styles')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endpush

@push('scripts')
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

        $(document).ready(function() {
            // $('.form-select').select2({
            //     placeholder: 'Select a service'
            // });

            $('#datepicker').datepicker();

            $('#timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '10',
                maxTime: '9:00pm',
                defaultTime: '09',
                startTime: '09:00',
                dynamic: true,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>

@endpush
