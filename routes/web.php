<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('login'));
Route::get('/register', fn() => view('register'));
Route::get('/dashboard', fn() => view('dashboard'));
