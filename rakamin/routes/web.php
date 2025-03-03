<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\ArticleController;
use Illuminate\Support\Facades\Route;

// Route halaman utama: Redirect ke login jika belum login, atau ke daftar artikel jika sudah login
Route::get('/', function () {
    return auth()->check() ? redirect()->route('articles.index') : redirect()->route('login');
});

// Route dashboard (hanya bisa diakses user yang login & terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profile (hanya bisa diakses user yang login)
Route::middleware('auth')->group(function () {
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk autentikasi Laravel
require __DIR__.'/auth.php';
