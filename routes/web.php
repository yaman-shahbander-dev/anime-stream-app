<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anime\AnimeController;
use App\Http\Controllers\User\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('shows/{show}', [AnimeController::class, 'animeDetails'])->name('show.details');

Route::middleware(['auth'])->group(function () {
    Route::post('shows/create/{show}', [AnimeController::class, 'animeCreate'])->name('show.create.comments');
    Route::post('shows/follow/{show}', [AnimeController::class, 'animeFollow'])->name('show.follow');
    Route::get('shows/show-watching/{show}/{episode}', [AnimeController::class, 'animeWatching'])->name('show.watching');
    Route::get('shows/follow', [AnimeController::class, 'animeFollow'])->name('show.follow');

    Route::get('users/followed-shows', [UserController::class, 'followedShows'])->name('users.followed.shows');
});

Route::get('shows/category/{category}', [AnimeController::class, 'category'])->name('show.category');
