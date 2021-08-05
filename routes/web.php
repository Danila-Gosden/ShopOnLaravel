<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/productId', 'App\Http\Controllers\ProductController@index');
Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::get('/categories', 'App\Http\Controllers\CategoriesController@index');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');

