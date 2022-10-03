<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/browse')->group(function() {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});