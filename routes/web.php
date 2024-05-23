<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/anime-details', function () {
    return view('/anime-details');
});
Route::get('/anime-watching', function () {
    return view('/anime-watching');
});
Route::get('/signup', function () {
    return view('/signup');
});
Route::get('/login', function () {
    return view('/login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

