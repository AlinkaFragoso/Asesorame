<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function asesorias(){
        return $this->hasMany('App\Asesoria');
    }

    public function pretty_type(){
        switch ($this->tipo) {
            case 'admin':
                return 'Administrador';
                break;
            case 'asesor':
                return 'Asesor';
                break;
            case 'asesorado':
                return 'Asesorado';
                break;
        }
    }

    public function estado($estado){
        return $this->hasMany('App\Asesoria')->where('estado', $estado)->get();
    }

    public function finalizadas(){
        return $this->hasMany('App\Asesoria')->where('estado', 'finalizada')->get();
    }

    public static function solicitudes(){
        return User::where('tipo', 'asesor')->where('active', 0)->get();
    }

    public static function asesores(){
        return User::where('tipo', 'asesor')->where('active', 1)->get();
    }

    public static function asesorados(){
        return User::where('tipo', 'asesorado')->where('active', 1)->get();
    }
}
