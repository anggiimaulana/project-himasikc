<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\fiturController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\programController;
use App\Http\Controllers\storeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);
Route::get('/app/profil', [profilController::class, 'index']);
Route::get('/app/program', [programController::class, 'index']);
Route::get('/app/store', [storeController::class, 'index']);
Route::get('/app/blog', [blogController::class, 'index']);
Route::get('/app/fitur', [fiturController::class, 'index']);
