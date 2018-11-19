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
            return view('asesor.asesorias.list', compact('asesorias'));
        }else{
            // $user = Auth::user();
            // $asesorias = $user->estado('solicitada');
            // $carreras = Carrera::all();
            // return view('asesorado.solicitudes.list', compact('asesorias', 'carreras'));
            return redirect('mis_asesorias/solicitudes');
        }
    }
}
