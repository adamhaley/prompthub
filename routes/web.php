<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/admin'));
Route::get('/dashboard', fn () => redirect('/admin'))->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
