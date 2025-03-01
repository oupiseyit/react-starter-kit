<?php

use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('auth')->group(function () {
    Route::get('/management/keys', function () { return Inertia::render('management/keys');})->name('keys');
    Route::get('/management/games', function () { return Inertia::render('management/games');})->name('games');
    Route::get('/management/genres', function () { return Inertia::render('management/genres');})->name('genres');
    Route::get('/management/platform', function () { return Inertia::render('management/platform');})->name('platform');
    Route::get('/management/dimensionality', function () { return Inertia::render('management/dimensionality');})->name('dimensionality');
    Route::get('/management/developers', function () { return Inertia::render('management/developers');})->name('developers');
});
