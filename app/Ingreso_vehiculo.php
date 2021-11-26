<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso_vehiculo extends Model
{
    protected $fillable = ['fecha_ingreso', 'estado']; 
    public $timestamps = false;
//Relacion con la tabla vehiculo
    public function vehiculos() { 
        return $this->belongsTo('App\Vehiculo');
    }
}
