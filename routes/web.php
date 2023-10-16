<?php

use Illuminate\Support\Facades\Route;

use Carbon\Carbon;
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
Route::get('/',[App\Http\Controllers\HomeController::class,"home"]);
Route::get('/detail/{product:slug}', [\App\Http\Controllers\HomeController::class,"product"]);
Route::get('/category/{category:slug}', [\App\Http\Controllers\HomeController::class,"category"]);
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
Route::get('/cart', [\App\Http\Controllers\HomeController::class,"cart"]);
Route::get('/delete-from-cart/{product}', [\App\Http\Controllers\HomeController::class, "deleteFromCart"]);
Route::get('/clear-cart', [\App\Http\Controllers\HomeController::class, "clearCart"]);
Route::get('/checkout/{slug}', [\App\Http\Controllers\HomeController::class, "checkoutSlug"])->name('checkoutSlug');
Route::post('/bill/{product}', [\App\Http\Controllers\HomeController::class, 'billCart']);
Route::post('/checkout', [\App\Http\Controllers\HomeController::class, 'processCheckout'])->name('checkout.process');
Route::get('/checkout/{order}', [\App\Http\Controllers\HomeController::class, 'checkoutForm'])->name('checkout.form');


//pay
Route::post('/checkout', [\App\Http\Controllers\HomeController::class,"placeOrder"]);
Route::get('/paypal-success/{order}', [\App\Http\Controllers\HomeController::class,"paypalSuccess"]);
Route::get('/paypal-cancel/{order}', [\App\Http\Controllers\HomeController::class,"paypalCancel"]);
