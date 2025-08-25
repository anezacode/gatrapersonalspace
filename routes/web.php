<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'main'])->name('main');
// Route::get('/admin', [UserController::class, 'login'])->name('login');