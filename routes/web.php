<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('index');
});

// About Us Page
Route::get('/about-us', function () {
    return view('about-us');
});

// Product Full Width Page
Route::get('/product-full-width', function () {
    return view('product-full-width');
});

// Shop Banner Full Width Page
Route::get('/shop-banner-full-width', function () {
    return view('shop-banner-full-width');
});
