@extends('admin.layouts.master')
@section('content')
<h1>Order Page</h1>

<table class="table">
    <tr>
        <td>Product ID</td>
        <td>Product Name</td>
        <td>Price</td>
        <td>Qty</td>
        <td>Total</td>
    </tr>
    @foreach ($orderItems as $item)
        <tr>
            <td>{{$item->product_id}}</td>
            <td>{{ $item->product ? $item->product->name : ''}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->total}}</td>
        </tr>
    @endforeach
</table>
@endsection