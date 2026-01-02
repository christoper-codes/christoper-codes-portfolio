<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Welcome'))->name('welcome');

Route::get('/storage-link', function () {
    Artisan::call('storage:link');

    return "storage-link";
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');

    return "optimize-clear";
});
