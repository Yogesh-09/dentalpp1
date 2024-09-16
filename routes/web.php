<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);


// Route::get('/home.blade.php', function () {
//     return view('home');
// });

// Route::get('/header.blade.php', function () {
//     return view('header');
// });


// Route::get('/footer.blade.php', function () {
//     return view('footer');
// });

