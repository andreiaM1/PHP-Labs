@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" id="success-message">
    <p>{{ $message }}</p>
</div>
@endif
<div class="panel panel-default">
    <div class="panel-heading">
        Product List
    </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="pull-right">
                <a href="admin-products/create" class="btn btn-default">Add a new product</a>
            </div>
        </div>
        <table class="table table-bordered table-stripped">
            <tr>
                <th width="20">No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th width="300">Action</th>
            </tr>
            @if (count($products) > 0)
            @foreach ($products as $key => $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('admin-products.show', $product->id) }}">View</a>
                    <a class="btn btn-info" href="{{ route('admin-products.edit', $product->id) }}">Update</a>
                    {{ Form::open(['method' => 'DELETE','route' => ['admin-products.destroy', $product->id],'style'=>'display:inline']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">There are no products</td>
            </tr>
            @endif
        </table>
        <!-- Introduce nr pagina -->
        {{$products->render()}}
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