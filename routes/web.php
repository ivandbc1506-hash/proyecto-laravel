<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ... rutas iniciales ...

Route::middleware(['auth', 'verified'])->group(function () {
    // Estas rutas ahora están protegidas por el Login
    Route::get('/dashboard', [App\Http\Controllers\EstudianteController::class, 'index'])->name('dashboard');
    Route::post('/estudiantes', [App\Http\Controllers\EstudianteController::class, 'store'])->name('estudiantes.store');
    
    // Aquí ya tienes las rutas de perfil que creó Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';