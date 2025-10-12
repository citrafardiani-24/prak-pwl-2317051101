<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

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

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::resource('user', UserController::class);

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/mata-kuliah/{id}', [MataKuliahController::class,'update'])->name('matakuliah.update');
Route::delete('/mata-kuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
