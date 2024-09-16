<?php

use Illuminate\Support\Facades\Route;

Route::get('/home.blade.php', function () {
    return view('home');
});

Route::get('/header.blade.php', function () {
    return view('header');
});


Route::get('/footer.blade.php', function () {
    return view('footer');
});

