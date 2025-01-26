<div class="nav_area">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo" src="assets/uploads/logo/logo-white.png" alt="J-Unique Hair Braiding Salon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'selected' : ''}}" @if(request()->routeIs('home')) aria-current="page" @endif
                            href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'selected' : ''}}" @if(request()->routeIs('about')) aria-current="page" @endif href="{{ route('about')}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'selected' : ''}}" @if(request()->routeIs('services')) aria-current="page" @endif href="{{ route('services')}}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('booking') ? 'selected' : ''}}" @if(request()->routeIs('booking')) aria-current="page" @endif href="{{ route('booking')}}">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('shop') ? 'selected' : ''}}" @if(request()->routeIs('shop')) aria-current="page" @endif href="{{ route('shop')}}">Shop</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'selected' : ''}}" @if(request()->routeIs('contact')) aria-current="page" @endif href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
                <div class="shopping-cart">
                    <button class="dropdown-toggle">
                        <i class="fal fa-shopping-cart"></i>
                        <span class="count total-count"></span>
                    </button>
                    <ul class="cart-dropdown">
                        <div class="dropdown-box show-cart">

                        </div>
                        <div class="cart-bottom">
                            <div class="text_area d-flex justify-content-between">
                                <p>Cart Subtotal:</p>
                                <div>
                                    <small class="basicCurrency">$</small>
                                    <span class="total-cart"></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('cart')}}"
                                    class="common_btn common_btn_cart">cart</a>
                                <a href="{{ route('checkout')}}"
                                    class="common_btn common_btn_checkout ">checkout</a>
                            </div>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>