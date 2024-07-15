<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anime\AnimeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('shows/{show}', [AnimeController::class, 'animeDetails'])->name('show.details');
