@extends('layouts.app')
@section('title', 'Products')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success" id="success-message">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container products">
    @foreach($productsByCategories as $productsByCategory)
        <h4 style="padding-top: 10px; color:gray;">{{ $productsByCategory['category']}}</h4>
        <div class="row">
            @foreach($productsByCategory['products'] as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="{{ url('product/'.$product->id)}}">
                        <img src="{{ $product->photo }}" style="height: 200px; width: 200px">
                        </a>
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ strtolower(substr($product->description, 0, 50)) }}...</p>
                            <p><strong>Price: </strong> ${{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@section('scripts')
<script>
setTimeout(function() {
    $('#success-message').fadeOut('fast');
}, 3000);
</script>
@endsection
@endsection
