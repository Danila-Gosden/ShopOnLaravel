<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/cart/confirm', [CartController::class, 'cartConfirm'])->name('cart-confirm');

Route::post('/cart/finish', [CartController::class, 'cartFinish'])->name('cart-finish');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

Route::get('/{category_alias}', [CategoriesController::class, 'category'])->name('category');

Route::get('/{category_alias}/{product_id}', [ProductController::class, 'index'])->name('product');

Route::post('/cart/add/{product_id}', [CartController::class, 'addProduct'])->name('cart-add');

Route::post('/cart/remove/{product_id}', [CartController::class, 'removeProduct'])->name('cart-remove');



