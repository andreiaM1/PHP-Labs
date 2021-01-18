<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user()->id;
        $orders = User::with('orders')->find($user)->orders();
        if(count(Array($orders)) >= 1)
            $orders = $orders->getQuery()->paginate(10);
        $value=($request->input('page',1)-1)*5;
        return view('buyer.orders',compact('orders'))->with('i',$value);
    }

    public function placeOrder($totalPrice, $totalQuantity){
        
        Order::create([
            'user_id' => auth()->user()->id, 
            'quantity' => $totalQuantity, 
            'price' => $totalPrice,
            'order_date' => date('Y/m/d'), 
            'status' => 'ORDERED']);
        $cart = session()->get('cart');    
        session()->forget('cart', $cart);
        return redirect()->route('orders')->with('success', 'Your order was placed successfully!');
    }
}
