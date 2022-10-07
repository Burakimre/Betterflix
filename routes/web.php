<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::prefix('/browse')->group(function() {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});

Route::get('/popular-movies', [MediaController::class, 'getPopularMovies']);
Route::get('/popular-shows', [MediaController::class, 'getPopularShows']);