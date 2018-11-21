<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Asesoria;
use App\Carrera;
use Auth;

class AsesoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesorias = Asesoria::asesoriasEstado('solicitada');
        return view('asesor.asesorias.list', compact('asesorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asesoria = new Asesoria();
        $asesoria->carrera_id = $request->carrera;
        $asesoria->estado = 'solicitada';
        $asesoria->materia = $request->materia;
        $asesoria->tema = $request->tema;
        $asesoria->comentario = $request->comentario;
        $asesoria->user_id = Auth::user()->id;
        $asesoria->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asesoria = Asesoria::find($id);
        return view('asesor.asesorias.view', compact('asesoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listaAsesorado(){
        $user = Auth::user();
        $asesorias = $user->estado('aceptada');
        $carreras = Carrera::all();
        return view('asesorado.asesorias.list', compact('asesorias', 'carreras'));
    }

    public function historialAsesorado(){
        $user = Auth::user();
        $asesorias = $user->estado('finalizada');
        $carreras = Carrera::all();
        return view('asesorado.asesorias.historial', compact('asesorias', 'carreras'));
    }

    public function solicitudesAsesorado(){
        $user = Auth::user();
        $asesorias = $user->estado('solicitada');
        $carreras = Carrera::all();
        return view('asesorado.solicitudes.list', compact('asesorias', 'carreras'));
    }
}
