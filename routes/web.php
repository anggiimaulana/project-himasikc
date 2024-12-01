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

// // halaman web
// Route::middleware('auth')->group(function () {
//     Route::get('', [homeController::class, 'index'])->name('home');
//     Route::get('/app/profil', [profilController::class, 'index'])->name('profil');
//     Route::get('/app/program', [programController::class, 'index'])->name('program');
//     Route::get('/app/program/www', [programController::class, 'detail'])->name('program.detail');
//     Route::get('/app/store', [storeController::class, 'index'])->name('store');
//     Route::get('/app/blog/', [blogController::class, 'index'])->name('blog');
//     Route::get('/app/blog/search', [BlogController::class, 'search'])->name('blog.search');
//     Route::get('/app/fitur', [fiturController::class, 'index'])->name('fitur');
// });


Route::middleware('guest')->group(function () {
    Route::get('', [homeController::class, 'index'])->name('home');
    Route::get('/app/profil', [profilController::class, 'index'])->name('profil');
    Route::get('/app/program', [programController::class, 'index'])->name('program');
    Route::get('/app/program/www', [programController::class, 'detail'])->name('program.detail');
    Route::get('/app/store', [storeController::class, 'index'])->name('store');
    Route::get('/app/blog/', [blogController::class, 'index'])->name('blog');
    Route::get('/app/blog/search', [BlogController::class, 'search'])->name('blog.search');
    Route::get('/app/fitur', [fiturController::class, 'index'])->name('fitur');
    // daftar
    Route::get('/app/auth/signup', [AuthController::class, 'register'])
    ->middleware(RedirectIfAuthenticated::class)->name('signup');
    Route::post('/app/auth/signup/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
    
    // login
    Route::get('/app/auth/signin', [AuthController::class, 'login'])
    ->middleware(RedirectIfAuthenticated::class)->name('login');
    Route::post('/app/auth/signin/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

// admin
Route::middleware('auth:admin')->group(function () {
    // logout
    Route::post('/app/auth/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    // dashboard admin
    Route::get('web/admin/dashboard', [adminController::class, 'dashboardAdmin'])->name('admin.dashboard');
    Route::get('web/admin/profil', [adminController::class, 'adminProfil'])->name('admin.profil');
    Route::get('web/admin/program', [adminController::class, 'adminProgram'])->name('admin.program');
    Route::get('web/admin/program/create', [adminController::class, 'adminProgramCreate'])->name('admin.programCreate');
    Route::get('web/admin/program/update', [adminController::class, 'adminProgramUpdate'])->name('admin.programUpdate');
    Route::get('web/admin/program/delete', [adminController::class, 'adminProgramDelete'])->name('admin.programDelete');
    Route::get('web/admin/store', [adminController::class, 'adminStore'])->name('admin.store');
    Route::get('web/admin/blog', [adminController::class, 'adminBlog'])->name('admin.blog');
    Route::get('web/admin/fitur', [adminController::class, 'adminFitur'])->name('admin.fitur');
});