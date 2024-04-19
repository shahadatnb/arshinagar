@extends('admin.layouts.master')
@section('content')
<h1>Product Create</h1>
<a class="btn btn-info" href="{{ route('product.index')}}">Back</a>
<form action="{{route('product.store')}}" class="row" method="post">
    @csrf
    <div class="col-12">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" class="form-control">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" id="price" type="text" class="form-control">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection