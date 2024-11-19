<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeritaController::class, 'home'])->name('home');
Route::get('/profil', [BeritaController::class, 'profil'])->name('profil');
Route::get('/struktur', [BeritaController::class, 'struktur'])->name('struktur');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{id}',[BeritaController::class,'masuk'])->name('berita.detail');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('/struktur/{id}/edit', [BeritaController::class, 'editSt'])->name('admin.edit');
Route::post('/struktur/{id}', [BeritaController::class, 'updateSt'])->name('admin.update');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [BeritaController::class, 'index'])->name('dashboard');
    Route::get('/add', [BeritaController::class, 'tambah'])->name('tambah');
    Route::post('/tambahdata', [BeritaController::class, 'tambahdata'])->name('tambahdata');
    Route::delete('/postingan/{id}', [BeritaController::class, 'destroy'])->name('postingan.destroy');
});

require __DIR__.'/auth.php';
