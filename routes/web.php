<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/admin'));

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
