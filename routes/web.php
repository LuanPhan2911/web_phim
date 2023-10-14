<?php

use App\Http\Controllers\IndexController;
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
Route::get('/category', [IndexController::class, 'category'])->name('category');
Route::get('/country', [IndexController::class, 'country'])->name('country');
Route::get('/genre', [IndexController::class, 'genre'])->name('genre');
Route::get('/episode', [IndexController::class, 'episode'])->name('episode');
Route::get('/movie', [IndexController::class, 'movie'])->name('movie');
Route::get('/watch', [IndexController::class, 'watch'])->name('watch');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
