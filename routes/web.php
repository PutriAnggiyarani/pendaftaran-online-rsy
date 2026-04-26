<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\PendaftaranController::class, 'index'])->name('dashboard');
    Route::get('/pendaftaran/create', [\App\Http\Controllers\PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
