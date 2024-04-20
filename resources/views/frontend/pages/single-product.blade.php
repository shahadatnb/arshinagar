@extends('frontend.master')
@section('content')
<div class="container" style="margin-top:120px">
    
    <div class="row">
        <!-- Banner Section -->
        <div class="col-md-6">
            <img src="{{ asset('storage/'.$product->photo) }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->price }}</p>
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Description</h3>
            {{ $product->description }}
        </div>
    </div>
</div>
@endSection