<?php

namespace App\Http\Controllers;

use App\Http\Requests,
    Illuminate\Http\Request;
use Auth;
use App\Carrera;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->tipo == 'asesor'){
            return redirect('/asesorias');
        }elseif(Auth::user()->tipo == 'admin'){
            return redirect('/solicitudes');
        }else{
            return redirect('mis_asesorias/solicitudes');
        }
    }
}
