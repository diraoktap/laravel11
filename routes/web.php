<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Utama']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Halaman Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});
