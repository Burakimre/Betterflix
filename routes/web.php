<?php

use Illuminate\Support\Facades\Route;

Route::get('/browse', function () {
    return view('home');
})->name('home');
