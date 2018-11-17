<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    public function tema(){
        return $this->hasOne('App\Tema', 'id', 'tema_id');
    }

    public function usuario(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
