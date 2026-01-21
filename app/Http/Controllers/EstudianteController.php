<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    // Esta función sirve para mostrar la página con la lista
    public function index()
    {
        $estudiantes = Estudiante::all(); 
        return view('estudiantes', compact('estudiantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'carrera' => 'required',
        ]);

        Estudiante::create($request->all());

       return redirect()->route('dashboard')->with('success', '¡Estudiante guardado!');
}