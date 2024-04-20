<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/single-product/{id}', [FrontController::class, 'singleProduct'])->name('single.product');
Route::get('/add-to-cart/{id}', [FrontController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');




Route::group(['middleware' => ['auth']], function(){
    Route::resource('product', ProductController::class);

    Route::get('category',[CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('category/show/{category}',[CategoryController::class, 'show'])->name('category.show');
    Route::get('category/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/update/{category}',[CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/destroy/{category}',[CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/order-list', [OrderController::class, 'index'])->name('order.list');
    Route::get('/order-detail/{id}', [OrderController::class, 'show'])->name('order.show');
});

/*
Route::get('product',[ProductController::class, 'index'])->name('product.index');
Route::get('product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('product/store',[ProductController::class, 'store'])->name('product.store');
Route::get('product/show/{product}',[ProductController::class, 'show'])->name('product.show');
Route::get('product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');
Route::put('product/update/{product}',[ProductController::class, 'update'])->name('product.update');
Route::delete('product/destroy/{product}',[ProductController::class, 'destroy'])->name('product.destroy');
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
