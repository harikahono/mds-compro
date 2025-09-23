<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/services', function () {
    return view('components.layouts.service');
})->name('services');

Route::get('/about', function () {
    return view('components.layouts.about');
})->name('about');