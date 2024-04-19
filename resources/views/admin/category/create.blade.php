@extends('admin.layouts.master')
@section('content')
<h1>Category Create</h1>
<a class="btn btn-info" href="{{ route('category.index')}}">Back</a>
<form action="{{route('category.store')}}" class="row" method="post">
    @csrf
    <div class="col">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" class="form-control">
        </div>
    </div>
    <div class="col">
        <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection