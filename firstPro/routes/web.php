<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// ✅ Home route
Route::get('/', [PostController::class, 'index']);

// ✅ Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ Protected Routes (Only if session has user_id)
Route::middleware(['auth.session'])->group(function () {
    Route::resource('posts', PostController::class)->except(['index']);
});

// ✅ Publicly accessible posts index (homepage)
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
