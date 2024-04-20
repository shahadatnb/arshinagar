@extends('admin.layouts.master')
@section('content')
<h1>Order Page</h1>
<a class="btn btn-info" href="{{ route('product.create')}}">Add</a>
<table class="table">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Address</td>
        <td>#</td>
    </tr>
    @foreach ($orders as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>
                <a href="{{route('order.show', $item)}}" class="btn btn-primary btn-xs">Detail</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection