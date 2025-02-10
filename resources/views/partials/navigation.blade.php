<div class="header_top_area">
    <div class="container">
        <div class="row align-items-center g-3">

            <div class="col-md-8 text-center text-md-start d-none d-sm-block">
                <div class="header_left">
                    <p class="para_text">
                        If you Are dreaming of a hairstyle that celebrates your unique beauty and cultural roots!</p>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="header_right d-flex justify-content-md-end justify-content-between align-items-center">
                    @auth
                        @if (auth()->user()->role === 'admin')
                            <a class="login_btn bg-white text-dark mr-2" href="{{ route('admin.dashboard') }}">Admin Panel</a>
                        @else
                           <a class="login_btn bg-white text-dark mr-2" href="{{ route('customer.dashboard') }}">My Account</a>    
                        @endif
                    @endauth
                    @auth
                        <div class="mx-2 login_area">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="login_btn">Logout</button>
                            </form>
                        </div>
                    @endauth

                    @guest
                        <div class="login_area">
                            <a class="login_btn" href="{{ route('login') }}">log in</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>


<div class="nav_area">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="logo" src="{{ asset('assets/uploads/logo/logo-white.png') }}"
                    alt="J-Unique Hair Braiding Salon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'selected' : '' }}"
                            @if(request()->routeIs('home')) aria-current="page" @endif
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'selected' : '' }}"
                            @if(request()->routeIs('about')) aria-current="page" @endif
                            href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'selected' : '' }}"
                            @if(request()->routeIs('services')) aria-current="page" @endif
                            href="{{ route('services') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery') ? 'selected' : '' }}"
                            @if(request()->routeIs('gallery')) aria-current="page" @endif
                            href="{{ route('gallery') }}">Gallery</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('shop') ? 'selected' : '' }}"
                            @if(request()->routeIs('shop')) aria-current="page" @endif
                            href="{{ route('shop') }}">Shop</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'selected' : '' }}"
                            @if(request()->routeIs('contact')) aria-current="page" @endif
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                @php
                    $subTotal = 0;
                    if(Auth::check()) {
                        $items = auth()->user()->cart()->with('product')->get();
                    } else {
                        $items = collect(Session::get('cart', []));
                    }
                @endphp
                    <div class="shopping-cart">
                        <button class="dropdown-toggle">
                            <i class="fal fa-shopping-cart"></i>
                            <span class="count total">{{ count($items) }}</span>
                        </button>
                        <ul class="cart-dropdown d-block">
                            <div class="dropdown-box">
                               
                                @foreach($items as $item)
                                    @php
                                        if(is_array($item)) {
                                             $item = (object) $item;
                                        }
                                        $subTotal += ($item->product->price * $item->quantity);
                                    @endphp
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <img src="{{ $item->product->getImage() }}" alt="">
                                            <div class="text">
                                                <span class="text-capitalize">{{ $item->product->name }}</span><br>
                                                <span class="price">Price: ${{ $item->product->price }}</span> <br>
                                                <span class="quantity">Qty: {{ $item->quantity }}</span><br>
                                                <form action="{{ route('cart.delete', $item->product_id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="close delete-item" data-name="{{ $item->product->name }}">
                                                        <i class="fal fa-times-circle"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                            </div>
                            <div class="cart-bottom">
                                <div class="text_area d-flex justify-content-between">
                                    <p>Cart Subtotal:</p>
                                    <div>
                                        <small class="basicCurrency">$</small>
                                        <span class="total">{{ $subTotal }}</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <a href="{{ route('cart') }}"
                                        class="common_btn common_btn_cart">cart</a>
                                        @auth
                                        <a href="{{ route('checkout', ['checkout_type' => 'products_order']) }}"
                                            class="common_btn common_btn_checkout ">checkout</a>

                                        @endauth
                                        @guest
                                            <a href="{{ route('login') . '?next='. urlencode(route('checkout', ['checkout_type' => 'products_order'])) }}" class="common_btn common_btn_checkout ">checkout</a>
                                        @endguest
                                    
                                </div>
                            </div>
                        </ul>
                    </div>

            </div>
        </div>
    </nav>
</div>
