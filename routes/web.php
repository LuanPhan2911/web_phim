<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/category/{category:slug}', [IndexController::class, 'category'])->name('category');
Route::get('/country/{country:slug}', [IndexController::class, 'country'])->name('country');
Route::get('/genre/{genre:slug}', [IndexController::class, 'genre'])->name('genre');
Route::get('/episode', [IndexController::class, 'episode'])->name('episode');
Route::get('/movie/{movie:slug}', [IndexController::class, 'movie'])->name('movie');
Route::get('/publish/{year}', [IndexController::class, 'publish'])->name('publish');
Route::get('/hashtag/{tag}', [IndexController::class, 'hashtag'])->name('hashtag');

Route::get('/watch', [IndexController::class, 'watch'])->name('watch');

Auth::routes();

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.'
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('/country', CountryController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/genre', GenreController::class);
        Route::resource('/movie', MovieController::class);

        Route::post("/category/sort", [CategoryController::class, "sorting"])->name("category.sort");
    }
);
