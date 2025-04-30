<?php

use App\Http\Controllers\HomeController;
<<<<<<< HEAD
=======
use App\Http\Controllers\ItemController;
>>>>>>> master
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/form', [HomeController::class, 'form'])->name('form');

Route::get('/halo', [HomeController::class, 'halo']);
<<<<<<< HEAD
Route::get('/halo/{nama}', [HomeController::class, 'halo_nama']);
=======
Route::get('/halo/{nama}', [HomeController::class, 'halo_nama']);

Route::get('/item/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::put('/item/{id}/update', [ItemController::class, 'update'])->name('item.update');
Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
Route::post('/item/{id}/delete', [ItemController::class, 'delete'])->name('item.delete');
>>>>>>> master
