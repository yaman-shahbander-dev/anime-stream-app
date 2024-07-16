<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anime\AnimeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('shows/{show}', [AnimeController::class, 'animeDetails'])->name('show.details');

Route::middleware(['auth'])->group(function () {
    Route::controller(AnimeController::class)
        ->prefix('shows/')
        ->group(function () {
            Route::post('create/{show}', 'animeCreate')->name('show.create.comments');
            Route::post('follow/{show}', 'animeFollow')->name('show.follow');
            Route::get('show-watching/{show}/{episode}', 'animeWatching')->name('show.watching');
            Route::get('follow', 'animeFollow')->name('show.follow');
        });

    Route::get('users/followed-shows', [UserController::class, 'followedShows'])->name('users.followed.shows');
});

Route::controller(AnimeController::class)
    ->prefix('shows/')
    ->group(function () {
        Route::any('search', 'search')->name('show.search');
        Route::get('category/{category}', 'category')->name('show.category');
    });

Route::controller(AdminController::class)
    ->prefix('admins/')
    ->group(function () {
        Route::get('login', 'loginForm')->name('login.form')->middleware('check-for-auth');
        Route::post('login', 'login')->name('login.admin');

        Route::middleware('auth:admin')
            ->group(function () {
                Route::get('dashboard', 'index')->name('dashboard.admin');
            });

    });

