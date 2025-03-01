<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');



    Route::get('dashboardHeader', function () {
        return Inertia::render('dashboardHeader');
    })->name('dashboardHeader');
});

require __DIR__.'/management.php';
require __DIR__.'/user.php';
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


// add route clear cache website
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
