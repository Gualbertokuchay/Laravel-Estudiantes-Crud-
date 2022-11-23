<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
//llamar a nuestra tabla creada
    protected $fillable = [
        'nombre',
        'apellido',
        'matricula',
        'telefono',
        'correo',
    ];
}
