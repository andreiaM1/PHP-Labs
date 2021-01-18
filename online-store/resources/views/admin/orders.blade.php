@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" id="success-message">
    <p>{{ $message }}</p>
</div>
@endif
<div class="panel panel-default">
    <div class="panel-heading">
        Orders List
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-stripped">
            <tr>
                <th width="20">No</th>
                <th>ID</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Status</th>
                <th width="300px">Action</th>
            </tr>
            @if (count($orders) > 0)
            @foreach ($orders as $key => $order)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $order->id }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->status }}</td>
                <td style="display:inline-flex; width:300px;">
                    {{ Form::open(array('method'=>'PUT','route' => ['admin-orders.update', $order->id])) }}
                    <div class="form-group" style="display:none;">
                    <input type="text" name="user_id" class="form-control" value="{{$order->user_id }}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="price" class="form-control" value="{{$order->price}}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="quantity" class="form-control" value="{{$order->quantity }}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="order_date" class="form-control" value="{{$order->order_date}}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="status" class="form-control" value="DELIVERED">
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Delivered" class="btn btn-success">
                    </div>
                    {{ Form::close() }}
                     {{ Form::open(array('method'=>'PUT','route' => ['admin-orders.update', $order->id])) }}
                    <div class="form-group" style="display:none;">
                    <input type="text" name="user_id" class="form-control" value="{{$order->user_id }}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="price" class="form-control" value="{{$order->price}}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="quantity" class="form-control" value="{{$order->quantity }}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="order_date" class="form-control" value="{{$order->order_date}}">
                    </div>
                    <div class="form-group" style="display:none;">
                    <input type="text" name="status" class="form-control" value="CANCELED">
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Cancel" class="btn btn-info" style="display:inline;">
                    </div>
                    {{ Form::close() }}
                    {{ Form::open(['method' => 'DELETE','route' => ['admin-orders.destroy', $order->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>               
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">There are no orders</td>
            </tr>
            @endif
        </table>
        <!-- Introduce nr pagina -->
        {{$orders->render()}}
    </div>
</div>
@endsection