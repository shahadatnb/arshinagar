@extends('frontend.master')
@section('content')
<div class="container text-center">
    <div class="row">
        <!-- Banner Section -->
        <div class="col-md-12">
            <div class="banner">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Banner-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Banner-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/babber-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-4.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Product Section -->
        <div class="col-md-12">
            <div class="product-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-section-title">
                            <h1>All Products</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="all-product">
                            <div class="row">
                                @foreach ($products as $product)
                                <div class="col-md-2">
                                    <div class="product-item">
                                        <a href="{{route('single.product',$product->id)}}">
                                        <img src="{{asset('storage/'.$product->photo)}}" alt="">
                                        <p class="book-name">{{$product->name}}</p>
                                        </a>
                                        <p class="text-info">Price: {{$product->price}}</p>
                                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary btn-block">Add To Cart</a>
                                    </div>
                                </div>                                    
                                @endforeach
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Delivery and coutomer service -->
        <div class="col-md-12">
            <div class="deliver-and-customer-service">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cod">
                            <div class="cod-icon">
                                <img src="img/social/cash-on-delivery.png" alt="">
                            </div>
                            <div class="cod-text">
                                <h2>CASH ON DELIVERY</h2>
                                <p>Pay cash at your doorstep</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="delivery">
                            <div class="delivery-icon">
                                <img src="img/social/fast-delivery.png" alt="">
                            </div>
                            <div class="cod-text">
                                <h2>DELIVERY</h2>
                                <p>All over Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="delivery">
                            <div class="delivery-icon">
                                <img src="img/social/return-of-investment.png" alt="">
                            </div>
                            <div class="cod-text">
                                <h2>HAPPY RETURN</h2>
                                <p>7 days return facility</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endSection