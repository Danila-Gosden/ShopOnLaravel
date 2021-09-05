<?php

use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin-panel'], function () {
    Route::get('/', [StatisticController::class, 'index'])->name('statistic');
    Route::get('/users', [UserController::class, 'index'])->name('users');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);

    Route::get('/orders', [AdminPanelController::class, 'index'])->name('admin-panel.orders');
    Route::get('/order/show/{order_id}', [AdminPanelController::class, 'showOrder'])->name('admin-panel.order.show');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/my-orders', [MyOrdersController::class, 'index'])->name('my-orders');
    Route::get('/order/show/{order_id}', [MyOrdersController::class, 'showOrder'])->name('order');

});

Route::group(['middleware' => 'cartIsNotEmpty'], function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
});


Route::get('/cart/confirm', [CartController::class, 'cartConfirm'])->name('cart-confirm');

Route::post('/cart/finish', [CartController::class, 'cartFinish'])->name('cart-finish');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

Route::get('/{category_alias}', [CategoriesController::class, 'category'])->name('category');

Route::get('/{category_alias}/{product_id}', [ProductController::class, 'index'])->name('product');

Route::post('/cart/add/{product_id}', [CartController::class, 'addProduct'])->name('cart-add');

Route::post('/cart/remove/{product_id}', [CartController::class, 'removeProduct'])->name('cart-remove');






