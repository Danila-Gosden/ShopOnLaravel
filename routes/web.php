<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/{categoryName}/{productId}', [ProductController::class, 'index'])->name('productPage');
Route::get('/cart', [CartController::class, 'index']);
Route::get('/{categoryName}', [CategoryController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
