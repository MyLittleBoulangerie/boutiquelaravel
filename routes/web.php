<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class , 'index','store'])->name('home');
Route::get('/products/category/{id}', [ProductController::class, 'categoryIndex'])->name('category');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product');
Route::post('/products', [CartController::class, 'store'])->name('addcart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'remove'])->name('delete');

require __DIR__.'/auth.php';
