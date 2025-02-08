@extends('layouts.main')
@section('title', 'Cart')
@section('content')
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="secion_header">
                    <h1 class="banner_title">Cart</h1>
                </div>
                <div class="breadcrumb d-flex justify-content-center">
                    <div class="text_area">
                        <h6><a href="{{ route('home')}}"><span>Home</span></a> |
                            <span>Cart</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="cart-app" class="cart_area">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="col-2">
                                <div class="section_header">
                                    Image
                                </div>
                            </th>
                            <th class="col-2">
                                <div class="section_header">
                                    Product Name
                                </div>
                            </th>
                            <th class="col-2">
                                <div class="section_header">
                                    Price
                                </div>
                            </th>

                            <th class="col-2">
                                <div class="section_header">
                                    Quantity
                                </div>
                            </th>
                            <th class="col-2">
                                <div class="section_header">
                                    Total
                                </div>
                            </th>
                            <th class="col-2">
                                <div class="section_header">
                                    Remove
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $subtotal = 0;
                                if(Auth::check()) {
                                    $items = auth()->user()->cart()->with('product')->get();
                                } else {
                                    $items = collect(Session::get('cart', []));
                                }
                            @endphp
                            @foreach($items as $item)
                                @php
                                    if(is_array($item)) {
                                             $item = (object) $item;
                                    }
                                @endphp
                                <tr data-item="product" data-stock="{{ $item->product->stock }}" data-total="{{ floatval($item->product->price * $item->quantity) }}" data-price="{{ $item->product->price }}">
                                    <th scope="row">
                                        <div class="image_area"><img
                                                src="{{ $item->product->getImage() }}"
                                                alt=""></div>
                                    </th>
                                    <td>
                                        <div class="table_data">
                                            {{ $item->product->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_data">
                                            ${{ $item->product->price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="in_de_counter_area d-flex">
                                            <button data-item="minus">-</button>
                                            <span id="counting" data-item="quantity">{{ $item->quantity }}</span>
                                            <button data-item="plus">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_data" data-total-value="{{ number_format(floatval($item->product->price * $item->quantity), 2) }}">
                                            ${{ number_format(floatval($item->product->price * $item->quantity), 2) }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="bin_area">
                                            <form action="{{ route('cart.delete', $item->product->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="cart_delete_btn"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="coupon_area">
                <div class="row g-lg-4 g-3 coupon_inner">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="contineu_shopping_btn"><a href="{{ route('shop') }}"
                                                              class="common_btn d-flex align-items-center justify-content-center">CONTINUE
                                SHOPPING</a></div>
                        <div class="update_cart_btn">
                            <form action="{{ route('cart.clear') }}" method="post">
                                @csrf
                                @method('DELETE')
                                @if (count($items) > 0)
                                    <button class="common_btn d-flex align-items-center justify-content-center"
                                    type="submit">CLEAR CART
                                    </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart_total_area mt-40">
                <div class="row">
                    <div class="col-sm-6 ms-sm-auto">
                        <div class="cart_table">
                            <ul>
                                <li><h4>Cart Total</h4></li>
                                <li><h5>Sub Total</h5><h5 id="subtotal">{{number_format((float)$subtotal, 2, '.', '')}}</h5></li>
                            </ul>
                            <div class="btn_area d-flex justify-content-end">
                                @if (count($items) > 0)
                                    @auth
                                    <a href="{{ route('checkout', ['checkout_type' => 'products_order']) }}"
                                        class="common_btn common_btn_checkout ">checkout</a>

                                    @endauth
                                    @guest
                                        <a href="{{ route('login') . '?next='. urlencode(route('checkout', ['checkout_type' => 'products_order'])) }}" class="common_btn  d-flex justify-content-center align-items-center common_btn_checkout ">PROCEED CHECKOUT</a>
                                    @endguest
                                    <a href="{{ route('checkout', ['checkout_type' => 'products_order']) }}"class="common_btn  d-flex justify-content-center align-items-center common_btn_checkout ">PROCEED CHECKOUT</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

        var subtotal = 0;

        $('[data-item="product"]').each(function() {
            var el = $(this);
            var quantity = parseInt(el.find('[data-item="quantity"]').text());
            var stock = el.data('stock');
            var total = el.data('total');
            var price = parseFloat(el.data('price'));
            var currentTotal

            subtotal+= total;

            console.log(total);

            $(this).find('[data-item="minus"]').click(function() {
                if (quantity > 1) {
                    quantity--;
                    subtotal-= (price);
                    $('#subtotal').text(`$${subtotal}`)
                    el.find(`[data-total-value="${total}"]`).text('$' + parseFloat(price * quantity).toFixed(2))
                }
                el.find('[data-item="quantity"]').html(quantity);
            });

            $(this).find('[data-item="plus"]').click(function() {

                if (quantity === parseInt(stock) || quantity > parseInt(stock)) {
                    Toastify({
                        text: 'Max quantity reached for this product!',
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
                }
                if (quantity > parseInt(stock)) {
                } else {
                    quantity++;
                    subtotal += (price);
                    $('#subtotal').text(`$${subtotal}`)
                    el.find(`[data-total-value="${total}"]`).text('$' + parseFloat(price * quantity).toFixed(2))
                }
                el.find('[data-item="quantity"]').html(quantity);
            });
        });

        $('#subtotal').text(`$${parseFloat(subtotal).toFixed(2)}`);


    </script>
@endpush
