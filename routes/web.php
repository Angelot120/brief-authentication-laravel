<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[ViewsController::class, 'index'])->name('login');


Route::get('/login', [ViewsController::class, 'store'])->name('login');


Route::get('/registration', [ViewsController::class, 'create'])->name('registration');


Route::get('/logout', [ViewsController::class, 'destroy'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ViewsController::class, 'show'])->name('dashboard');
});


Route::post('/login/processing', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
