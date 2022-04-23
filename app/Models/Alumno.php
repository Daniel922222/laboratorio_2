<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable=[
        'codigo',
        'nombre0',
        'direccion',
        'telefono',
        'email'
    ];
}
