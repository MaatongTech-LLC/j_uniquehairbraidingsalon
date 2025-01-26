<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/product/{id}', function () {
    return view('product');
})->name('product');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'forgotPasswordPost'])->name('forgot-password.post');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-password');

