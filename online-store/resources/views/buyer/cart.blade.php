@extends('layouts.app')
@section('title', 'Shopping Cart')
@section('content')
    <?php 
    $totalPrice = 0;
    $totalQuantity = 0; 
    ?>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" id="success-message">
        <p>{{ $message }}</p>
    </div>
    @endif
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <main class="col-sm-9">
                    @if (!session('cart'))
                        <p class="alert alert-warning">Your shopping cart is empty.</p>
                    @else
                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(session('cart') as $id => $item)
                                    <?php 
                                    $totalPrice += $item['price'] * $item['quantity'];
                                    $totalQuantity += $item['quantity'];
                                    ?>
                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <figcaption class="media-body">
                                                    <h6 class="title text-truncate">{{ Str::words($item['name'],20) }}</h6>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <var class="price">{{ $item['quantity'] }}</var>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">{{ config('settings.currency_symbol'). $item['price'] }}</var>
                                                <small class="text-muted">each</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('remove-from-cart', $id) }}" class="btn btn-outline-danger" ><i class="fa fa-times"></i>Remove</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </main>
                @if($totalQuantity > 0)
                <aside class="col-sm-3">
                    <a href="{{ route('remove-all-from-cart') }}" class="btn btn-danger btn-block mb-4">Clear Cart</a>
                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>{{ config('settings.currency_symbol') }}${{ $totalPrice }}</strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                    <a href="{{ url('place-order/'.$totalPrice.'/'.$totalQuantity)}}" class="btn btn-success btn-lg btn-block">Place Your Order</a>
                </aside>
                 @endif
            </div>
        </div>
    </section>
    @section('scripts')
        <script>
        setTimeout(function() {
            $('#success-message').fadeOut('fast');
        }, 3000);
        </script>
        @endsection
@stop