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
