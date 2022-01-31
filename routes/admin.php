<?php

use Admin\Http\Controllers\Auth\AuthenticatedSessionController;
use Admin\Http\Controllers\Auth\NewPasswordController;
use Admin\Http\Controllers\Auth\PasswordResetLinkController;
use Admin\Http\Controllers\HomeController;
use Admin\Http\Controllers\ShipController;
use Admin\Http\Middleware\AuthenticateAdmin;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => AuthenticateAdmin::class,
], function () {
    Route::get('/', [HomeController::class, 'show']);

    Route::get('/components', [HomeController::class, 'components']);

    Route::get('/ships', [ShipController::class, 'index'])->name('ships.index');
    Route::get('/ships/items', [ShipController::class, 'items'])->name('ships.items');
    Route::get('/ships/{ship}', [ShipController::class, 'show'])->name('ships.show');
    Route::post('/ships/{ship}', [ShipController::class, 'update'])->name('ships.update');
    Route::post('/ships', [ShipController::class, 'store'])->name('ships.store');
    Route::post('/ships/{ship}/toggle-active', [ShipController::class, 'toggleActive'])->name('ships.toggle-active');
    Route::delete('/ships/{ship}', [ShipController::class, 'delete'])->name('ships.delete');
});

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});
