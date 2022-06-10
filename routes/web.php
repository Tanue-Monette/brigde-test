<?php

use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome')->with('products', Product::orderBy('id', 'DESC')->get());
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('products', App\Http\Controllers\ProductsController::class);

Route::get('/create-product', [App\Http\Controllers\ProductsController::class, 'create'])->name('product.create');

Route::get('/products-index', [App\Http\Controllers\ProductsController::class, 'index'])->name('products-index');

Route::post('/products.store', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');

Route::patch('/products-update/{id}', [App\Http\Controllers\ProductsController::class, 'update']);

Route::get('/products-edit/{id}', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products-edit');

Route::get('/product-delete/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products-delete');