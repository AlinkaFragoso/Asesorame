<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function materias(){
        return $this->belongsToMany('App\Materia');
    }

    public static function listaCarreras(){
        $carreras = array();
        foreach(Carrera::all() as $carrera){
            $carreras[$carrera->id] = $carrera->nombre;
        }
        return $carreras;
    }
}
