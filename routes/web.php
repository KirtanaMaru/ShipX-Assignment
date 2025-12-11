<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'create']);
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/dashboard', [ContactController::class, 'index'])->name('admin.dashboard');
Route::get('/user', [ContactController::class, 'show'])->name('admin.alluser');
Route::get('/edit/{id}', [ContactController::class, 'edit']);
Route::put('/update/{id}', [ContactController::class, 'update']);
Route::delete('/delete/{id}', [ContactController::class, 'destroy']);
