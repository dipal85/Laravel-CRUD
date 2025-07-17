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

Route::middleware('auth')->group(function () {
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

    Route::middleware('is.admin')->group(function () {
        Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
        Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
        Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
        Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
        Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
    });
});