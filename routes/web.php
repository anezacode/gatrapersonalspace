<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
