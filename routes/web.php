<?php

use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::middleware(['auth.session'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/stockmanager', [AdminController::class, 'stockmanager'])->name('admin.stockmanager');
        Route::get('/suppliers', [AdminController::class, 'suppliers'])->name('admin.suppliers');
        Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
        Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');


    });
Route::get('/', function () {
    return view('clientwebsite.website');
});
Route::get('/clientwebsite', function () {
    return view('clientwebsite.website');
})->name('clientwebsite.website');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);

});