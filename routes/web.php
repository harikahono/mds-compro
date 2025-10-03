<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home'); // Ubah nama 'landing' menjadi 'home' untuk root

Route::get('/landing', function () {
    return view('landing');
})->name('landing'); // Tambah route untuk /landing

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');