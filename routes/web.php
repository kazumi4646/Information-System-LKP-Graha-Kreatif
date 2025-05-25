<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Route untuk programs TANPA login (public) - menggunakan method public
Route::get('/programs', [ProgramController::class, 'public'])->name('programs.public');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk programs DENGAN login (private) - menggunakan method index
Route::middleware(['auth'])->group(function () {
    Route::get('/myprograms', [ProgramController::class, 'index'])->name('programs.index');
    Route::post('/myprograms/{slug}/enroll', [ProgramController::class, 'enroll'])->name('programs.enroll');
});

require __DIR__.'/auth.php';