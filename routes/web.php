<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [EstudianteController::class, 'index'])->name('dashboard');
    Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
});

require __DIR__.'/auth.php';