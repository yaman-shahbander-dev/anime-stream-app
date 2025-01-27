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
            ->name('dashboard.')
            ->group(function () {
                Route::get('dashboard', 'index')->name('admin');
                Route::get('admins', 'admins')->name('admins');

                Route::get('create', 'create')->name('admins.create');
                Route::post('store', 'store')->name('admins.store');

                Route::get('shows', 'shows')->name('admins.shows');
                Route::get('shows/create', 'createShow')->name('admins.create.show');
                Route::post('shows/store', 'storeShow')->name('admins.store.show');
                Route::delete('shows/{show}/delete', 'deleteShow')->name('admins.delete.show');

                Route::get('genres', 'genres')->name('admins.genres');
                Route::get('genres/create', 'createGenre')->name('admins.create.genre');
                Route::post('genres/store', 'storeGenre')->name('admins.store.genre');
                Route::delete('genres/{category}/delete', 'deleteGenre')->name('admins.delete.genre');
            });
    });

