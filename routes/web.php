<?php

use App\Http\Controllers\BrowseController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/browse', [BrowseController::class, 'index']);

// Route::prefix('/browse')->group(function() {
//     Route::get('/', [HomeController::class, 'home'])->name('home');
// });

Route::get('/popular-movies', [MediaController::class, 'getPopularMovies']);
Route::get('/popular-shows', [MediaController::class, 'getPopularShows']);