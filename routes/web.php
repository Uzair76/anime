<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categories;
use App\Http\Controllers\AnimeDetails;
use App\Http\Controllers\AnimeWatching;


// Route::get('/', function () {
//     return view('welcome');
// });

// 
Route::get('/signup', function () {
    return view('/signup');
});
// Route::get('/login', function () {
//     return view('/login');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [categories::class, 'index'])->name('get.categories');
Route::get('/anime-details', [AnimeDetails::class, 'index'])->name('get.Anime_details');
Route::get('/anime-watching', [AnimeWatching::class, 'index'])->name('get.Anime_watching');

