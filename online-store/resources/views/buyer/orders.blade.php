@extends('layouts.app')
@section('title', 'Orders')
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
        <table class="table table-bordered table-stripped" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
               <th>ID</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Status</th>
                </tr>
                @if (count($orders) > 0)
                @foreach ($orders as $key => $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">There are no orders</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
{{$orders->links()}}
@section('scripts')
<script>
setTimeout(function() {
    $('#success-message').fadeOut('fast');
}, 3000);
</script>
@endsection
@endsection
