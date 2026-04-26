<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\PendaftaranController::class, 'index'])->name('dashboard');
    Route::get('/home', [\App\Http\Controllers\PendaftaranController::class, 'home'])->name('home');
    Route::get('/dashboardnoatr', [\App\Http\Controllers\PendaftaranController::class, 'index'])->name('dashboardnoatr');
    Route::get('/pendaftaran/create', [\App\Http\Controllers\PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran.store');
    Route::get('/pendaftaran/{pendaftaran}', [\App\Http\Controllers\PendaftaranController::class, 'show'])->name('pendaftaran.show');
    Route::get('/pendaftaran/{pendaftaran}/pdf', [\App\Http\Controllers\PendaftaranController::class, 'pdf'])->name('pendaftaran.pdf');
    

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
