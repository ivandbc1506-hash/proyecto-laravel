<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Esto es lo más importante: permite guardar estos 3 campos
    protected $fillable = ['nombre', 'codigo', 'carrera'];
}