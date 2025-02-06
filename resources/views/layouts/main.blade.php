<!DOCTYPE html><!--[if lt IE 7 ]>
    <html class="ie ie6" lang="en"> <![endif]--><!--[if IE 7 ]>
    <html class="ie ie7" lang="en"> <![endif]--><!--[if IE 8 ]>
    <html class="ie ie8" lang="en"> <![endif]--><!--[if (gte IE 9)|!(IE)]><!-->
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description"
            content="J-Unique Hair Braiding Salon - Where every braid tell story">
        <meta name="keywords"
            content="Salon, booking, J-Unique, Braiding, Mano, Salon, Hair Braiding">
        <link rel="icon" type="image/png" href="{{ asset('assets/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon.svg') }}" />
        <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png')}}" />
        <link rel="manifest" href="{{ asset('assets/site.webmanifest')}}" />
        <title>J-Unique Hair Braiding Salon | @yield('title')</title>
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="J-Unique Hair Braiding Salon | @yield('title')">

        <meta itemprop="name" content="J-Unique Hair Braiding Salon | @yield('title')">
        <meta itemprop="description"
            content="J-Unique Hair Braiding Salon - Where every braid tell story">
        <meta itemprop="image" content="{{ asset('assets/uploads/logo/favicon.png') }}">

        <meta property="og:type" content="website">
        <meta property="og:title"
            content="J-Unique Hair Braiding Salon - Where every braids tell a story">
        <meta property="og:description"
            content="J-Unique Hair Braiding Salon - Where every braids tell a story">
        <meta property="og:image" content="assets/uploads/logo/meta.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:url" content="https://j-uniquehairbraidingsalon.com/">

        <meta name="twitter:card" content="{{ asset('assets/uploads/logo/favicon.png') }}">

        <meta name="csrf" content="">

        <!----  How to load Css Library, Here is an example ----->

        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/jquery.rprogessbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/jquery.datetimepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/ion.rangeSlider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/themes/basic/css/fontawesome.min.css') }}">

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <!----  Push your custom css  ----->

        @stack('styles')

    </head>

    <body class="">
        {{-- <div id="preloader"></div> --}}

      {{-- Navigation Area --}}

        @include('partials.navigation')

        <style>
            .banner_area {
                background-image: linear-gradient(90deg, rgba(7, 11, 40, 0.75) 0%, rgba(7, 11, 40, 0.75) 100%), url('{{ asset("assets/uploads/logo/banner.jpg") }}');
                background-position: center right;
            }
        </style>



        @yield('content')

        {{-- Footer Area --}}
        @include('partials.footer')

        <div class="copy_right_area pt-50 pb-50">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-8 text-center text-sm-start">
                        <h6> © Copyright {{ date('Y') }} by J-Unique Hair Braiding Salon | Powered by <a class="highlight" href="https://maatonggroup.com/usa" target="_blank" rel="noopener noreferrer">MaatongTech LLC USA</a></h6>
                    </div>
                    <div class="col-md-4">
                        <ul class="social_area d-flex justify-content-center justify-content-sm-end">
                            <li>
                                <a href="https://www.facebook.com/laetijustine01/" target="_blank"><i
                                        class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/juniquehairbraidingsalon/?utm_source=qr#" target="_blank"><i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@juniquehairbraidingsalon?_t=8ryGxXitF1C&_r=1" target="_blank"><i
                                        class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!----  How to load JS Library, Here is an example ----->
        <script src=" {{ asset('assets/global/js/jquery.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/bootstrap.bundle.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jquery.waypoints.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/slick.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/owl.carousel.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/mixitup.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/aos.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jquery.magnific-popup.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jQuery.rProgressbar.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jquery.counterup.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/ion.rangeSlider.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jquery.fancybox.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/jquery.datetimepicker.min.js') }}"></script>
        <script src=" {{ asset('assets/themes/basic/js/main.js') }}"></script>


        <script src=" {{ asset('assets/global/js/notiflix-aio-2.7.0.min.js') }}"></script>
        <script src=" {{ asset('assets/global/js/pusher.min.js') }}"></script>
        <script src=" {{ asset('assets/global/js/vue.min.js') }}"></script>
        <script src=" {{ asset('assets/global/js/axios.min.js') }}"></script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

        <script>
            'use strict';
            let checkCart = JSON.parse(sessionStorage.getItem('shoppingCart'));
            if (checkCart !== null) {
                if (Object.keys(checkCart).length === 0) {
                    $('.common_btn_checkout').addClass('d-none');
                    $('.common_btn_cart').addClass('w-100');
                } else {
                    $('.common_btn_checkout').removeClass('d-none');
                    $('.common_btn_cart').removeClass('w-100');
                }
            }

        </script>

        @stack('scripts')


        @if(session('success'))
        <script>
            $(document).ready(function() {
                Toastify({
                    text: '{{session('success')}}',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                    onClick: function(){} // Callback after click
                }).showToast();
            });
        </script>
        @endif

    @if(session('error'))
        <script>
            $(document).ready(function() {
                Toastify({
                    text: '{{session('error')}}',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                    },
                    onClick: function(){} // Callback after click
                }).showToast();
            });
        </script>
    @endif

    </body>
    </html>
