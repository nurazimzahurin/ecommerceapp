<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

// Guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
});

// Auth
Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [GoogleController::class, 'logout'])->name('logout');
    Route::get('advertisement/create', [AdvertisementController::class, 'create'])->name('advertisements.create');
});