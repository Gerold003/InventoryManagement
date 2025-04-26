<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CreateClientController;
use App\Http\Controllers\ResetPasswordController;

// ---------------------
// P U B L I C  R O U T E S
// ---------------------
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

// ---------------------
// A D M I N  R O U T E S
// ---------------------
Route::middleware(['auth.session'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/stockmanager', [ItemController::class, 'index'])->name('admin.stockmanager'); // Use ItemController for stock manager
    Route::post('/stockmanager', [ItemController::class, 'store'])->name('admin.stockmanager.store');

    Route::get('/supplier', [AdminController::class, 'supplier'])->name('admin.suppliers');
    Route::get('/order', [AdminController::class, 'order'])->name('admin.orders');
    Route::get('/report', [AdminController::class, 'report'])->name('admin.reports');

    Route::get('/stocks/add/{id}', [StockController::class, 'add'])->name('stocks.add');
    Route::get('/stocks/out/{id}', [StockController::class, 'stockOut'])->name('stocks.out');

    // Optional: if you want a separate view for listing items
    Route::get('/items', [ItemController::class, 'index'])->name('admin.items');
    Route::post('/items', [ItemController::class, 'store'])->name('items.store');


    Route::post('/items/update', [ItemController::class, 'update'])->name('items.update');

    Route::post('/items/delete', [ItemController::class, 'delete'])->name('items.delete');
});
