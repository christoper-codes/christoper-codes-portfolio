<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Welcome'))->name('welcome');
Route::get('/about', fn() => Inertia::render('About'))->name('about');
Route::get('/uses', fn() => Inertia::render('Uses'))->name('uses');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');

Route::get('/migrate-fresh', function () {

    Artisan::call('migrate:fresh');

    return "migrate-fresh";

});


Route::get('/storage-link', function () {

    Artisan::call('storage:link');

    return "storage-link";

});

Route::get('/optimize-clear', function () {

    Artisan::call('optimize:clear');

    return "optimize-clear";

});
