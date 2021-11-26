<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Cita extends Model
{

    protected $fillable = ['documentoidentidad', 'nombre_estudiante', 'apellido_estudiante', 'grupo', 'telefono', 'nombre_director', 'fecha_cita'];
    public $timestamps = false;
}
