<?php

use Illuminate\Support\Facades\Route;
use YourName\AuthPackage\Controllers\AuthController;

Route::group(['namespace' => 'YourName\AuthPackage\Controllers', 'middleware' => ['web']], function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::get('forgot-password', [AuthController::class, 'showForgotForm'])->name('password.request');
    Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail']);
});
