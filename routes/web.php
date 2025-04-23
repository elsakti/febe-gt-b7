<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/form', [HomeController::class, 'form'])->name('form');

Route::get('/halo', [HomeController::class, 'halo']);
Route::get('/halo/{nama}', [HomeController::class, 'halo_nama']);