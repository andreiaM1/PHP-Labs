@extends('layouts.app')
@section('title', 'Product')
@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success" id="success-message">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="thumbnail" style="display:flex; flex-direction:row; justify-content:space-around;">
    <div>
    <img src="{{ $product->photo }}" style="height: 400px; width: 450px;">
    </div>
    <div class="caption" style="display:flex; flex-direction:column;justify-content:space-between;">
        <div>
        <h4>{{ $product->name }}</h4>
        <p>{{$product->description}}</p>
        </div>
        <div>
        <p><strong>Price: </strong> ${{ $product->price }}</p>
        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button" style="width:200px">Add to cart</a> </p>
        </div>
    </div>
</div>
@section('scripts')
<script>
setTimeout(function() {
    $('#success-message').fadeOut('fast');
}, 3000);
</script>
@endsection
@endsection


