<?php

use Illuminate\Support\Facades\Route;

Route::get('/header.blade.php', function () {
    return view('header');
});
