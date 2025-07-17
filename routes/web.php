<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
Route::get('/cars', function () {
    return view('welcome');
});

Route::resource('cars', CarController::class);


Route::get('/contact', ContactController::class);
Route::get('/about', [PageController::class, 'about']);
Route::get('/help', [PageController::class, 'help']);

Route::middleware(['auth'])->group(function () {
    Route::resource('cars', CarController::class);
});

Route::middleware(['auth', 'is.admin'])->group(function () {
    Route::resource('cars', CarController::class);
});

Route::get('cars/create', [CarController::class, 'create'])->middleware(['auth', 'is.admin']);
Route::post('cars', [CarController::class, 'store'])->middleware(['auth', 'is.admin']);