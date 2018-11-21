<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{

    protected $fillable = ['estado', 'materia', 'tema', 'comentario'];

    public function tema(){
        return $this->hasOne('App\Tema', 'id', 'tema_id');
    }

    public function carrera(){
        return $this->hasOne('App\Carrera', 'id', 'carrera_id');
    }

    public function usuario(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function pretty_date(){
        return substr($this->created_at, 0, 10);
    }

    public function pretty_status(){
        switch ($this->estado) {
            case 'aceptada':
                return 'Aceptada';
                break;
            case 'finalizada':
                return 'Finalizada';
                break;
            case 'solicitada':
                return 'Solicitada';
                break;
        }
    }

    public static function asesoriasEstado($estado){
        return Asesoria::where('estado', $estado)->get();
    }
}
