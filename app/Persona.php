<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps = false;
    protected $fillable = ['documentoidentidad', 
        'primer_nombre', 
        'segundo_nombre', 
        'primer_apellido', 
        'primer_apellido', 
        'segundo_apellido',
        'telefono'];
}
