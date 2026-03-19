<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/collections', [ProductController::class, 'index'])->name('collections');

Route::get('/return-exchange', [PageController::class, 'returnExchange'])->name('return-exchange');
// Route::view('/collection', [ProductController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/contact', [PageController::class, 'contact'])->name('contact');