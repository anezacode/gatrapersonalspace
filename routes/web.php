<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'main'])->name('main');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::get('/admin', [UserController::class, 'admin'])->name('admin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');