<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateClientController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;


// P U B L I C
Route::get('/', function () {
    return view('clientwebsite.website');
})->name('clientwebsite.website');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/createclient', function () {
    return view('auth.createclient');
})->name('createclient');

Route::post('/clients', [CreateClientController::class, 'store'])->name('clients.store');

Route::get('/resetpassword', function () {
    return view('auth.resetpassword');
})->name('resetpassword');

Route::post('/resetpassword', [ResetPasswordController::class, 'reset'])->name('password.reset');

// A D M I N
Route::middleware(['auth.session'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/stockmanager', [AdminController::class, 'stockmanager'])->name('admin.stockmanager');
        Route::get('/supplier', [AdminController::class, 'supplier'])->name('admin.suppliers');
        Route::get('/order', [AdminController::class, 'order'])->name('admin.orders');
        Route::get('/report', [AdminController::class, 'report'])->name('admin.reports');
    });
});