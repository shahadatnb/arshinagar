<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('frontend.pages.index',compact('products'));
    }

    public function singleProduct($id){
        $product = Product::find($id);
        return view('frontend.pages.single-product',compact('product'));
    }

    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart', []);
        $cart[$id] = [
            'product_id' => $id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 1
        ];
       session()->put('cart', $cart);
       return redirect()->back(); 
    }

    public function checkout(){
        return view('frontend.pages.checkout');
    }

}
