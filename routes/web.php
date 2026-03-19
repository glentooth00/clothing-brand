<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\http\Controllers\AdminDashboardController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/collections', [ProductController::class, 'index'])->name('collections');
Route::get('/return-exchange', [PageController::class, 'returnExchange'])->name('return-exchange');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route::view('/collection', [ProductController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);





Route::get('/', [HomeController::class, 'index'])->name('home');



// Admin routes
Route::prefix('admin')->group(function () {

    // Login
    Route::get('/', [AuthController::class, 'showAdminLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'adminLogin'])->name('admin.login.submit');

    // Protected routes - requires admin login
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Products CRUD
        Route::resource('products', ProductController::class);

        // Orders CRUD
        Route::resource('orders', OrderController::class);

        // Transactions CRUD
        Route::resource('transactions', TransactionController::class);

        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });

});