@extends('admin.layouts.master')
@section('content')
<h1>Category Edit</h1>
<a class="btn btn-info" href="{{ route('category.index')}}">Back</a>
<form action="{{route('category.update', $category)}}" class="row" method="post">
    @method('PUT')
    @csrf
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" value="{{$category->name}}" class="form-control">
        </div>
    </div>
    <div class="col">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection