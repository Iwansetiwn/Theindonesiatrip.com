<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    // Replace this with your actual login logic
    return view('login');
})->name('login');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');


