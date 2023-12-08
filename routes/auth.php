<?php

use Livewire\Livewire;
use App\Livewire\Profile;
use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\VerifyEmail;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Auth\ForgotPassword;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\ConfirmPassword;
use App\Http\Controllers\Auth\VerifyEmailController;

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/livewire/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});

Route::middleware('guest')->group(function () {
    Route::get('login',Login::class)->name('login');
    Route::get('register',Register::class)->name('register');
    Route::get('forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('reset-password/{token}',ResetPassword::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', VerifyEmail::class)->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::get('confirm-password', ConfirmPassword::class)->name('password.confirm');
    Route::get('dashboard', Dashboard::class)->middleware(['verified'])->name('dashboard');
    Route::get('profile', Profile::class)->name('profile');
});

