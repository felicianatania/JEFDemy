<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/checkout', function () {
    return view('pages.checkout');
});
Route::get('/payment', function () {
    return view('pages.payment');
});

Route::get('/category', [HomeController::class, 'show'])->name('category');
