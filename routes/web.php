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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/category/{id}', [ProductController::class, 'categoryIndex'])->name('category');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product');

Route::post('/products', [CartController::class, 'store'])->name('addcart'); //à terme, appellera cartController
Route::get('/cart', [CartController::class, 'index'])->name('cart');
