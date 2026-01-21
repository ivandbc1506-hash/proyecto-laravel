<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Rutas de Estudiantes (Tu tabla)
    Route::get('/dashboard', [EstudianteController::class, 'index'])->name('dashboard');
    Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
    
    // RUTAS DE PERFIL: Son obligatorias para que no salga error
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';