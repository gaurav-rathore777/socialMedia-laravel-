<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\PamblateController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\MailController;
use App\Http\Controllers\ApiUserController;
//  Home route
// Route::get('/', [PostController::class, 'index']);

//  Auth Routes
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
// Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
// Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



//  Publicly accessible posts index (homepage)  
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/access', function () {
//     return 'You are old enough!';
// })->middleware('check.age');

// Route::get('/not-allowed', function () {
//     return 'Sorry, you are not allowed to access this page.';
// });


// use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/pdfs', [PdfController::class, 'index'])->name('pdfs.index');
Route::get('/pdfs/create', [PdfController::class, 'create'])->name('pdfs.create');
Route::post('/pdfs', [PdfController::class, 'store'])->name('pdfs.store');
Route::get('/pdfs/{pdf}/download', [PdfController::class, 'download'])->name('pdfs.download');
Route::get('/pdfs/{pdf}/view', [PdfController::class, 'show'])->name('pdfs.view');
Route::delete('/pdfs/{pdf}', [PdfController::class, 'destroy'])->name('pdfs.destroy');



Route::get('/send-email', [MailController::class, 'showForm'])->name('email.form');
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('email.send');


Route::resource('pamblates', PamblateController::class);



Route::get('/api-users', [ApiUserController::class, 'index'])->name('api.users');

