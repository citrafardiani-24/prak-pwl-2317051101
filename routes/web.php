<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Profile (opsional)
Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

// List user
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Form create user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Simpan user
Route::post('/user', [UserController::class, 'store'])->name('user.store');
