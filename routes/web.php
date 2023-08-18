<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index']);
Route::get('/series/create', [InicioController::class, 'create']);
Route::get('/series/{id}', [InicioController::class, 'show']);
Route::post('/series', [InicioController::class, 'store']);
Route::delete('/series/{id}', [InicioController::class, 'destroy']);
Route::get('/novidades', [InicioController::class, 'novidades']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
