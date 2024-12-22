<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanHistoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AuthController;

// Route untuk root, diarahkan ke login
Route::get('/', function () {
    return redirect()->route('login'); // Redirect ke halaman login
});

// Route untuk registrasi
Route::get('/register', function () {
    return view('register'); // View untuk halaman registrasi
})->middleware('guest:pengguna')->name('register');

Route::post('/register', [AuthController::class, 'register'])->middleware('guest:pengguna')->name('register.post');

// Route untuk login
Route::get('/login', function () {
    return view('login'); // View untuk halaman login
})->middleware('guest:pengguna')->name('login');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest:pengguna')->name('login.post');

// Middleware untuk halaman yang memerlukan autentikasi
Route::middleware(['auth:pengguna'])->group(function () {
    // Rute untuk home/dashboard
    Route::get('/home', [PengaduanController::class, 'index'])->name('home');

    // Rute logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute pengaduan
    Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::get('/pengaduan/history', [PengaduanHistoryController::class, 'index'])->name('pengaduan.history');

    // Rute feedback
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});