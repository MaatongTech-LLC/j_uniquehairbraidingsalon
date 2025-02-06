<section class="footer_area">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="widget_logo_side">
                    <div class="logo_area">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="logo" src="{{ asset('assets/uploads/logo/logo-white.png') }}" alt="J-Unique Hair Braiding Salon">
                        </a>
                    </div>
                </div>
                <div class="text_area">
                    <p class="pt-40 pb-45">If  you Are dreaming of a hairstyle that celebrates your unique beauty and cultural roots!</p>
                </div>
                {{--<div class="submit_area">
                    <form action="/subscribe" method="post">
                        <input type="hidden" name="_token" value="MBe24PfvnzEEqVfQ10qKJVYXJohecqu59unrkOyV">
                        <div class="mb-3 d-flex align-items-center justify-content-center">
                            <input type="email" name="email" class="form-control" placeholder="Email Address"
                                autocomplete="off">
                            <button type="submit" class="common_btn"><i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </form>
                </div>--}}
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="quick_link_area">
                    <div class="section_header pb-40">
                        <h5>QUICK LINKS</h5>
                    </div>
                    <div class="section_list">
                        <ul>
                            <li><a href="/about">About Us</a></li>

                            <li><a href="/blog">Blog</a></li>

                            <li class="nav-item"><a class="nav-link"
                                    href="/faq">FAQ</a></li>

                            <li>
                                <a href="/terms-amp-conditions/">Terms &
                                    Conditions</a>
                            </li>
                            <li>
                                <a href="/privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="quick_link_area me-5">
                    <div class="section_header pb-40">
                        <h5>CONTACT</h5>
                    </div>
                    <div class="section_list">
                        <ul>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>(+1) 737-203-1025</span>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span>contact@j-uniquehairbraidingsalon.com</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Manor, Texas, USA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="gallery_area">
                    <div class="section_header pb-40">
                        <h5>GALLERY</h5>
                    </div>
                    <div id="masonryContainer" class="cols text-center footer_magnific_popup">
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/1.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/1.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/2.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/2.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/3.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/3.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/4.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/4.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/5.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/5.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="img-box">
                            <a href="{{ asset('assets/uploads/gallery/6.png') }}"
                                target="">
                                <img src="{{ asset('assets/uploads/gallery/6.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
