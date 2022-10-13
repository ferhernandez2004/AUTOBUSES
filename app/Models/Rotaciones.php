<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rotaciones extends Model
{
    use HasFactory;
    protected $fillable = ['asignacion_de_ruta',
                           'motorista', 
                           'fecha'];
}
