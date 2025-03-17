@extends('new.layout')
@section('title', 'Cart')

@section('content')
    <div class="page-header parallaxie"
         style="background-image: url(&quot;{{ asset('assets/uploads/logo/banner.jpg') }}&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">C</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">a</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">r</div>
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">t</div>
                                </div>
                            </div>
                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Services Section Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                                        <div class="image_area"><img height="100px"
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
                                            <button class="btn btn-sm" data-item="minus">-</button>
                                            <span id="counting" data-item="quantity">{{ $item->quantity }}</span>
                                            <button class="btn btn-sm" data-item="plus">+</button>
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
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="coupon_area">
                        <div class="row g-lg-4 g-3 coupon_inner">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <div class="contineu_shopping_btn"><a href="{{ route('shop') }}"
                                                                      class="btn-highlighted d-flex align-items-center justify-content-center">CONTINUE
                                        SHOPPING</a></div>
                                <div class="update_cart_btn">
                                    <form action="{{ route('cart.clear') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        @if (count($items) > 0)
                                            <button class="btn-default d-flex align-items-center justify-content-center"
                                                    type="submit">CLEAR CART
                                            </button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cart_total_area mt-5">
                        <div class="row">
                            <div class="col-sm-6 ms-sm-auto">
                                <div class="cart_table">
                                    <ul class="mt-4">
                                        <li class="pt-3"><h5>Cart Total</h5><h5 id="subtotal">{{number_format((float)$subtotal, 2, '.', '')}}</h5></li>
                                    </ul>
                                    <div class="btn_area d-flex justify-content-end">
                                        @if (count($items) > 0)
                                            <a href="{{ route('checkout', ['checkout_type' => 'products_order']) }}"
                                               class="btn-default">PROCEED CHECKOUT</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->
@endsection

@push('styles')
    <style>
        th {
            color: var(--accent-color)!important;
        }

        button {
            outline: none !important;
        }

        ul {
            list-style: none !important;
        }
    </style>
@endpush

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
                            background: "#f50b42",
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
