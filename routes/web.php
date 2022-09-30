<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::prefix('/browse')->group(function() {
    Route::get('/', [MovieController::class, 'home'])->name('home');
});