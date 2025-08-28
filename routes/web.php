<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'main'])->name('main');
Route::get('/admin', [AppController::class, 'admin'])->name('admin');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/insert-tag', [TagController::class, 'insertTag'])->name('insert-tag');
Route::post('/toggle-tag/{id}', [TagController::class, 'ToggleTag'])->name('toggle-tag');
Route::post('/delete-tag/{id}', [TagController::class, 'deleteTag'])->name('delete-tag');