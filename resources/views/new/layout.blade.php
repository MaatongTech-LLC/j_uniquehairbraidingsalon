
<!DOCTYPE html>
<html lang="en"><head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="MaatongTech LLC">
    <!-- Page Title -->
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.svg') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('hetch/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('hetch/css/slicknav.min.css')}}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('hetch/css/swiper-bundle.min.css')}}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('hetch/css/all.min.css')}}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('hetch/css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('hetch/css/magnific-popup.css')}}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('hetch/css/mousecursor.css')}}">
    <!-- Main Custom Css -->
    <link href="{{ asset('hetch/css/custom.css')}}" rel="stylesheet" media="screen">
</head>
<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{ asset('assets/uploads/logo/logo-white.png') }}" height="200px" style="object-fit: contain;" alt=""></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Topbar Section Start -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-contact-info">
                    <ul>
                        <li><a href="#"><img src="{{ asset('hetch/images/icon-location.svg')}}" alt="">Manor, Texas, USA</a></li>
                        <li><a href="mailto:JUniqueHairBraidingSalon@gmail.com"><img src="{{ asset('hetch/images/icon-mail.svg')}}" alt="">JUniqueHairBraidingSalon@gmail.com</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-lg-6 col-md-6">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-offer">
                    <p>If you Are dreaming of a hairstyle that celebrates your unique beauty and cultural roots!</p>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-lg-2 col-md-6">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-time">
                    <ul>
                        <li><a href="{{ route('home') }}"><img src="{{ asset('hetch/images/icon-clock.svg') }}" alt="">Mon - Sun 7:00 - 22:00</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/uploads/logo/logo.png') }}" height="100px" width="100px" class="object-fit-contain"  alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                        </ul>
                    </div>
                    <!-- Header Social Icons Start -->
                    <div class="header-social-icons">
                        <ul>
                            <li><a href="https://www.tiktok.com/@juniquehairbraidingsalon?_t=8ryGxXitF1C&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/juniquehairbraidingsalon/?utm_source=qr#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/laetijustine01/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Social Icons End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->

@yield('content')
<!-- Footer Ticker Start -->
<div class="footer-ticker">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Scrolling Ticker Start -->
                <div class="scrolling-ticker">
                    <!-- Scrolling Ticker Box Start -->
                    <div class="scrolling-ticker-box">
                        <!-- Scrolling Ticker Content Start -->
                        <div class="scrolling-content">
                            <span>Schedule An Appointment To Get Your Hairstyle Done</span>
                            <span>Schedule An Appointment To Get Your Hairstyle Done</span>
                        </div>
                        <!-- Scrolling Ticker Content End -->

                        <!-- Scrolling Ticker Content Start -->
                        <div class="scrolling-content">
                            <span>Schedule An Appointment To Get Your Hairstyle Done</span>
                            <span>Schedule An Appointment To Get Your Hairstyle Done</span>
                        </div>
                        <!-- Scrolling Ticker Content End -->
                    </div>
                    <!-- Scrolling Ticker Box End -->

                    <!-- Schedule Now BUtton Start -->
                    <div class="schedule-now-btn">
                        <a href="{{ route('contact') }}" class="schedule-btn">get schedule now</a>
                    </div>
                    <!-- Schedule Now BUtton End -->
                </div>
                <!-- Scrolling Ticker End -->
            </div>
        </div>
    </div>
</div>
<!-- Footer Ticker End -->

<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="footer-header-title">
                                <!-- Section Title Start -->
                                <div class="section-title dark-section">
                                    <h2 class="text-anime-style-3" data-cursor="-opaque">Let's made your hairstyle a reality!</h2>
                                </div>
                                <!-- Section Title End -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4">
                            <!-- Footer Contact Button Start -->
                            <div class="footer-contact-btn">
                                <a href="{{ route('contact') }}" class="btn-default btn-highlighted">contact us today</a>
                            </div>
                            <!-- Footer Contact Button End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{ asset('assets/uploads/logo/logo-white.png') }}" alt="">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>If you Are dreaming of a hairstyle that celebrates your unique beauty and cultural roots!</p>
                    </div>
                    <!-- About Footer Content End -->

                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="https://www.tiktok.com/@juniquehairbraidingsalon?_t=8ryGxXitF1C&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/juniquehairbraidingsalon/?utm_source=qr#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/laetijustine01/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>quick links</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">home page</a></li>
                        <li><a href="{{ route('about') }}">about our company</a></li>
                        <li><a href="{{ route('gallery') }}">work gallery</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Footer Contact Box Start -->
                <div class="footer-contact-box footer-links">
                    <h3>contact us</h3>

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('hetch/images/icon-mail.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>info@domain.com</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('hetch/images/icon-phone.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>(+1) 737-203-1025</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <img src="{{ asset('hetch/images/icon-location.svg') }}" alt="">
                        </div>
                        <div class="footer-contact-content">
                            <p>Manor, Texas, USA</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Contact Box End -->
            </div>


        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright © {{ date('Y') . ' ' . config('app.name') }} | Powered by <a style="color: var(--accent-color)" href="https://maatonggroup.com/usa">MaatongTech LLC USA</a></p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
<!-- Footer End -->

<!-- Jquery Library File -->
<script src="{{ asset('hetch/js/jquery-3.7.1.min.js')}}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('hetch/js/bootstrap.min.js')}}"></script>
<!-- Validator js file -->
<script src="{{ asset('hetch/js/validator.min.js')}}"></script>
<!-- SlickNav js file -->
<script src="{{ asset('hetch/js/jquery.slicknav.js')}}"></script>
<!-- Swiper js file -->
<script src="{{ asset('hetch/js/swiper-bundle.min.js')}}"></script>
<!-- Counter js file -->
<script src="{{ asset('hetch/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('hetch/js/jquery.counterup.min.js')}}"></script>
<!-- Isotop js file -->
<script src="{{ asset('hetch/js/isotope.min.js')}}"></script>
<!-- Magnific js file -->
<script src="{{ asset('hetch/js/jquery.magnific-popup.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('hetch/js/SmoothScroll.js')}}"></script>
<!-- Parallax js -->
<script src="{{ asset('hetch/js/parallaxie.js')}}"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('hetch/js/gsap.min.js')}}"></script>
<script src="{{ asset('hetch/js/magiccursor.js')}}"></script>
<!-- Text Effect js file -->
<script src="{{ asset('hetch/js/SplitText.js')}}"></script>
<script src="{{ asset('hetch/js/ScrollTrigger.min.js')}}"></script>
<!-- YTPlayer js File -->
<script src="{{ asset('hetch/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Wow js file -->
<script src="{{ asset('hetch/js/wow.min.js')}}"></script>
<!-- Main Custom js file -->
<script src="{{ asset('hetch/js/function.js')}}"></script>

</body>
</html>
