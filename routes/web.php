<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('login'));
Route::get('/register', fn() => view('register'));
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', fn() => view('product.index'))->name('index');
    Route::get('/create', fn() => view('product.create'))->name('create');
});
