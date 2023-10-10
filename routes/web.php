<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;

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
Route::post('/save-dates', [DateController::class, 'saveDates'])->name('save-dates'); // tinh so ngay va lu db

