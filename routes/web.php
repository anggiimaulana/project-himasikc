<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\fiturController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\programController;
use App\Http\Controllers\storeController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);
Route::get('/app/profil', [profilController::class, 'index']);
Route::get('/app/program', [programController::class, 'index']);
Route::get('/app/program/detail/www', [programController::class, 'detail']);
Route::get('/app/store', [storeController::class, 'index']);
Route::get('/app/blog/', [blogController::class, 'index']);
Route::get('/app/blog/search', [BlogController::class, 'search'])->name('blog.search');
Route::get('/app/fitur', [fiturController::class, 'index']);

Route::middleware('guest')->group(function () {
    // daftar
    
    Route::get('/app/auth/signup', [AuthController::class, 'register'])
    ->middleware(RedirectIfAuthenticated::class)->name('signup');
    Route::post('/app/auth/signup/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
    
    // login
    Route::get('/app/auth/signin', [AuthController::class, 'login'])
    ->middleware(RedirectIfAuthenticated::class)->name('signin');
    Route::post('/app/auth/signin/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

// admin
Route::middleware('auth:admin')->group(function () {
    // logout
    Route::post('/app/auth/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    // dashboard
    Route::get('web/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
});