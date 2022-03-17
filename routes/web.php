<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/category/{category}', [CategoryController::class, 'index'])->name('category');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product');
Route::post('/products', [CartController::class, 'store'])->name('addcart');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'update'])->name('updatecart');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('remove');
Route::post('/cart/delete', [CartController::class, 'delete'])->name('deletecart');

Route::get('/moncompte', [UserController::class, 'index'])->middleware(['auth'])->name('moncompte');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin/products', [AdminController::class, 'index'])->name('adminproducts');
    Route::get('/admin/products/create', [AdminController::class, 'create'])->name('adminproductcreate');
    Route::post('/admin/products/create/store', [AdminController::class, 'store'])->name('adminproductstore');
    Route::get('/admin/products/{product}/edit', [AdminController::class, 'edit'])->name('adminproductedit');
    Route::put('/admin/products/{id}', [AdminController::class, 'update'])->name('adminproductupdate');
});


require __DIR__ . '/auth.php';
