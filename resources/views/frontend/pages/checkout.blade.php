@extends('frontend.master')
@section('content')
<div class="container" style="margin-top:120px">
    <h1>Checkout</h1>
    <div class="row">
        <!-- Banner Section -->
        <div class="col-md-6">
            <form action="{{route('place.order')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Place Order">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @foreach(session('cart') as $cart)
                    <tr>
                        <td>{{$cart['name']}}</td>
                        <td>{{$cart['qty']}}</td>
                        <td>{{$cart['price']}}</td>
                        @php $total += $cart['qty']*$cart['price'] @endphp
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">Total</td>
                        <td>{{$total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endSection