<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::latest()->get();
        return view('admin.order.index',compact('orders'));
    }

    public function show($id){
        $orderItems = OrderDetail::where('order_id',$id)->get();
        return view('admin.order.show',compact('orderItems'));
    }

    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->save();

        foreach(session('cart') as $id => $cartItem){
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $cartItem['product_id'];
            $orderDetail->price = $cartItem['price'];
            $orderDetail->qty = $cartItem['qty'];
            $orderDetail->total = $cartItem['price'] * $cartItem['qty'];
            $orderDetail->save();
        }

        session()->forget('cart');

        return redirect()->route('home');
    }
}
