@extends('admin.layouts.master')
@section('content')
<h1>Product Page</h1>
<a class="btn btn-info" href="{{ route('product.create')}}">Add</a>
<table class="table">
    <tr>
        <td>ID</td>
        <td>Photo</td>
        <td>Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>#</td>
    </tr>
    @foreach ($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td><img width="50" src="{{asset('storage/'.$item->photo)}}" alt=""></td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->category ? $item->category->name : ''}}</td>
            <td>
                <a href="{{route('product.edit', $item)}}" class="btn btn-primary btn-xs">Edit</a>
                <form action="{{ route('product.destroy',$item) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete This Item?')">Delete</button>
                  </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection