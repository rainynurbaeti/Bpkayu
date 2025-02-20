<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', [CarController::class, 'index'])->name('home');
Route::get('/tentangkami', [PageController::class, 'about'])->name('about');
Route::get('/rental-mobil', [CarController::class, 'list'])->name('cars.index');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/articles', [PageController::class, 'articles'])->name('artikel');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/booking', [CarController::class, 'booking'])->name('booking');
Route::get('/search', [CarController::class, 'search'])->name('search');


Route::middleware(['auth'])->group(function () {
    Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
    Route::post('/rent/{car}', [RentalController::class, 'store'])->name('rent.store');
});
