@extends('layouts.main')
@section('title', 'Contact')
@section('content')
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="secion_header">
                    <h1 class="banner_title">Contact Us</h1>
                </div>
                <div class="breadcrumb d-flex justify-content-center">
                    <div class="text_area">
                        <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                            <span>Contact Us</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact_area">
        <div class="container">
            <div class="row gy-5">
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-left">
                    <div class="section_left">
                        <div class="section_header">
                            <h2>Call Now or Write A Message</h2>
                            <p></p>
                            <p>Got questions or ready to book? Contact us today – we're here to help!<br></p>
                            <p></p>
                        </div>
                        <div class="h-100 overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55083.73565031964!2d-97.55755933798275!3d30.358523603571502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644c0c487d2a4db%3A0x7486e48c8c2d3407!2sManor%2C%20Texas%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sde!4v1737740725343!5m2!1sfr!2sde"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <ul class="social_area d-flex justify-content-start pt-40">
                            <li>
                            <li>
                                <a href="https://www.facebook.com/laetijustine01/" target="_blank"><i
                                        class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/juniquehairbraidingsalon/?utm_source=qr#"
                                   target="_blank"><i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/juniquehairbraidingsalon/?utm_source=qr#"
                                   target="_blank"><i
                                        class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 aos-init aos-animate" data-aos="fade-right">
                    <div class="section_right">
                        <form class="row g-3 mt-2" action="{{ route('contact.post') }}" method="post">
                            @csrf
                            <div class="col-md-6">
                                <div class="name_area icon_position">
                                    <input type="text" class="form-control" name="name" value="" placeholder="Name"
                                           aria-label="name" autocomplete="off" required>
                                    <div class="image_area">
                                        <i class="fa-regular fa-user"></i>
                                    </div>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="email_area icon_position">
                                    <input type="email" class="form-control" name="email" value="" placeholder="Email"
                                           autocomplete="off" required>
                                    <div class="image_area">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="phone_area icon_position">
                                    <input type="text" class="form-control" name="phone" value="" placeholder="Phone"
                                           autocomplete="off" required=>
                                    <div class="image_area">
                                        <i class="fa-light fa-phone-office"></i>
                                    </div>
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="subject_area icon_position">
                                    <input type="text" class="form-control" name="subject" value=""
                                           placeholder="Subject"
                                           autocomplete="off" required>
                                    <div class="image_area">
                                        <i class="fa-regular fa-pencil"></i>
                                    </div>
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text_area icon_position">
                                    <textarea class="form-control" rows="5" name="message" value=""
                                      placeholder="Write Message..."></textarea>
                                    <div class="image_area">
                                        <i class="fa-regular fa-message"></i>
                                    </div>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror

                                </div>
                            </div>
                            <div class="col-12 pt-40">
                                <button type="submit" class="common_btn">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="address_area aos-init aos-animate" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="email_area box">
                        <div class="section_header">
                            <h4>Email Address</h4>
                        </div>
                        <div class="section_body">
                            <p>contact@j-uniquehairbraidingsalon.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="location_area box">
                        <div class="section_header">
                            <h4>Location</h4>
                        </div>
                        <div class="section_body">
                            <p>Manor, Texas, United States Of America</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="number_area box">
                        <div class="section_header">
                            <h4>Phone Number</h4>
                        </div>
                        <div class="section_body">
                            <p>(+1) 737-203-1025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
