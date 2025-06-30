<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/belajar-web-programming', function () {
    return view('/programs/programming');
});

Route::get('/belajar-microsoft-office', function () {
    return view('/programs/office');
});

Route::get('/belajar-design-graphic', function () {
    return view('/programs/design');
});

// Route untuk programs TANPA login (public) - menggunakan method public
Route::get('/programs', [ProgramController::class, 'public'])->name('programs.public');

// Dashboard route with admin check
Route::get('/dashboard', function () {
    if (auth()->user()->isAdmin()) {
        return redirect()->route('admin.dashboard');
    }
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

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Pending Users (Need Verification)
    Route::get('/users/pending', [AdminController::class, 'pendingUsers'])->name('users.pending');
    Route::post('/users/{user}/approve', [AdminController::class, 'approveUser'])->name('users.approve');
    Route::delete('/users/{user}/reject', [AdminController::class, 'rejectUser'])->name('users.reject');
    
    // Users Management (Approved Users)
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}', [AdminController::class, 'showUser'])->name('users.show');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');
});

require __DIR__.'/auth.php';