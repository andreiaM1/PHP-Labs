
@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        View Product
    </div>
    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('admin-products.index') }}">Back</a>
        </div>
        <div class="form-group">
            <strong>Name: </strong> {{ $product->name }}
        </div>
        <div class="form-group">
            <strong>Description: </strong> {{ $product->description }}
        </div>
        <div class="form-group">
            <strong>Photo: </strong> {{ $product->photo }}
        </div>
        <div class="form-group">
            <strong>Price: </strong> {{ $product->price }}
        </div>
    </div>
</div>
@endsection
