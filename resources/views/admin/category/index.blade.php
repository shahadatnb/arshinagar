@extends('admin.layouts.master')
@section('content')
<h1>Category Page</h1>
<a class="btn btn-info" href="{{ route('category.create')}}">Add</a>
<table class="table">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>#</td>
    </tr>
    @foreach ($categories as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                <a href="{{route('category.edit', $item)}}" class="btn btn-primary btn-xs">Edit</a>
                <form action="{{ route('category.destroy',$item) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete This Item?')">Delete</button>
                  </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection