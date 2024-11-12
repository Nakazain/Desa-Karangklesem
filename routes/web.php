<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeritaController::class, 'home'])->name('home');
Route::get('/berita/{id}',[BeritaController::class,'masuk'])->name('berita');

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
