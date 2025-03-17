@extends('new.layout')
@section('title', 'Contact')

@section('content')
    <div class="page-header parallaxie"
         style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">C</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Contact Section Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">contact details</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">H</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">p</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">w</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">l</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">y</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">q</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/uploads/content/about-section-img.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="contact-info-content">
                            <h3>our location:</h3>
                            <p>Manor, Texas, USA.</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/uploads/content/about-section-img2.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="contact-info-content">
                            <h3>email:</h3>
                            <p>JUniqueHairBraidingSalon@gmail.com</p>
                        </div>
                    </div>
                    <!-- Conatct Info Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/uploads/content/about-section-img3.jpg') }}" alt="">
                            </figure>
                        </div>

                        <div class="contact-info-content">
                            <h3>phone:</h3>
                            <p>(+1) 737-203-1025</p>
                        </div>
                    </div>
                    <!-- Conatct Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Section End -->

    <div class="google-map-form">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55083.777371377575!2d-97.55764496154663!3d30.358449513139313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644c0c487d2a4db%3A0x7486e48c8c2d3407!2sManor%2C%20TX%2C%20USA!5e0!3m2!1sen!2scm!4v1741887990787!5m2!1sen!2scm" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <!-- Contact Form Box Start -->
                    <div class="contact-form-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Contact now</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;"><div class="split-line" style="display: block; text-align: center; position: relative;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">G</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">e</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">n</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">o</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">c</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">w</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">i</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">h</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">u</div><div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">s</div></div></div></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <form  action="{{ route('contact.post') }}" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s" novalidate="true" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required="">
                                    @error('name')
                                        <div class="help-block with-errors text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone" required="">
                                    @error('phone')
                                     <div class="help-block with-errors text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject" required="">
                                    @error('subject')
                                        <div class="help-block with-errors text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                                    @error('message')
                                     <div class="help-block with-errors text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Form Box End -->
                </div>
            </div>
        </div>
    </div>

@endsection
