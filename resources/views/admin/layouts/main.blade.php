<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} |  @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/core/libs.min.css') }}" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/aos/dist/aos.css') }}" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/hope-ui.css') }}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    
    <style>
        .fc-button {
            text-transform: capitalize!important;
        }
    </style>

    @stack('styles')
</head>
<body class="">
<!-- loader Start -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body"></div>
    </div>
</div>
<!-- loader END -->

@include('admin.partials.sidebar')
<main class="main-content">
    <div class="position-relative iq-banner">
        <!--Nav Start-->
        @include('admin.partials.navbar')
        <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Hello {{ auth()->user()->name }}</h1>
                                <p>Welcome to your panel.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="{{ asset('admin/assets/images/dashboard/top-header5.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
    </div>
    @yield('content')

    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="footer-body">
            <div class="right-panel">
                &copy;<script>document.write(new Date().getFullYear())</script> {{ config('app.name') }} Admin App made with
                <span class="">
                      <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://maatonggroup.com/usa/" target="_blank">MaatongTech USA LLC</a>.
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</main>


<!-- Library Bundle Script -->
<script src="{{ asset('admin/assets/js/core/libs.min.js')}}"></script>

<!-- External Library Bundle Script -->
<script src="{{ asset('admin/assets/js/core/external.min.js')}}"></script>

<!-- Widgetchart Script -->
<script src="{{ asset('admin/assets/js/charts/widgetcharts.js')}}"></script>

<!-- mapchart Script -->
<script src="{{ asset('admin/assets/js/charts/vectore-chart.js')}}"></script>
<script src="{{ asset('admin/assets/js/charts/dashboard.js')}}" ></script>

<!-- fslightbox Script -->
<script src="{{asset('admin/assets/js/plugins/fslightbox.js')}}"></script>

<!-- Settings Script -->
<script src="{{ asset('admin/assets/js/plugins/setting.js')}}"></script>

<!-- Slider-tab Script -->
<script src="{{ asset('admin/assets/js/plugins/slider-tabs.js')}}"></script>

<!-- Form Wizard Script -->
<script src="{{ asset('admin/assets/js/plugins/form-wizard.js')}}"></script>

<!-- AOS Animation Plugin-->
<script src="{{ asset('admin/assets/vendor/aos/dist/aos.js')}}"></script>

<!-- App Script -->
<script src="{{ asset('admin/assets/js/hope-ui.js')}}" defer></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- Include SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@include('sweetalert::alert')

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

@stack('scripts')

</body>
</html>
