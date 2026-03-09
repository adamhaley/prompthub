<?php

use Illuminate\Support\Facades\Route;

Route::get('login', fn () => redirect('/admin/login'))->name('login');

Route::get('logout', fn () => redirect('/admin'))->name('logout');
