<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'main'])->name('main');
Route::get('/admin', [AppController::class, 'admin'])->name('admin');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/insert-tag', [TagController::class, 'insert'])->name('insert-tag');
Route::post('/toggle-tag/{id}', [TagController::class, 'toggle'])->name('toggle-tag');
Route::post('/delete-tag/{id}', [TagController::class, 'delete'])->name('delete-tag');

Route::get('/admin/home-section', [HomeController::class, 'edit'])->name('home-section');
Route::post('/admin/home-update', [HomeController::class, 'update'])->name('home-update');

Route::get('/admin/about-section', [AboutController::class, 'edit'])->name('about-section');
Route::post('/admin/about-update', [AboutController::class, 'update'])->name('about-update');

Route::get('/admin/project-section', [ProjectController::class, 'show'])->name('project-section');

Route::get('/admin/app-settings', [AppController::class, 'edit'])->name('app-settings');
Route::post('/admin/app-update', [AppController::class, 'update'])->name('app-update');

Route::get('/admin/account-settings', [UserController::class, 'edit'])->name('account-settings');
Route::post('/admin/account-update', [UserController::class, 'update'])->name('account-update');
