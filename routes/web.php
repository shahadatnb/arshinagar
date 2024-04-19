<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('category',[CategoryController::class, 'index'])->name('category.index');
Route::get('category/create',[CategoryController::class, 'create'])->name('category.create');
Route::post('category/store',[CategoryController::class, 'store'])->name('category.store');
Route::get('category/show/{category}',[CategoryController::class, 'show'])->name('category.show');
Route::get('category/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/update/{category}',[CategoryController::class, 'update'])->name('category.update');
Route::delete('category/destroy/{category}',[CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
