<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\ContactController;

// Halaman utama — menampilkan form
Route::get('/', [KreditController::class, 'index'])->name('home');

Route::get('/contact', [KreditController::class, 'contact'])->name('contact');

// Proses form — hitung kredit
Route::post('/hitung', [KreditController::class, 'hitung'])->name('hitung');

Route::get('/about', [KreditController::class, 'about'])->name('about');

Route::post('/contact', [ContactController::class, 'send']);