<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new User();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->tipo = 'asesorado';
        $user->active = 1;
        $user->save();
        Auth::login($user);
        return redirect('/mis_asesorias/solicitudes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function rechazar($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    public function aceptar($id)
    {
        $user = User::find($id);
        $user->active = 1;
        $user->save();

        return back();
    }

    public function listAdmin(){
        $users = User::solicitudes();
        return view('admin.users.list', compact('users'));
    }

    public function listAsesoresAdmin(){
        $users = User::asesores();
        return view('admin.users.listAsesores', compact('users'));
    }

    public function listAsesoradosAdmin(){
        $users = User::asesorados();
        return view('admin.users.listAsesorados', compact('users'));
    }

    public function formAsesor(){
        return view('/auth.registerAsesor');
    }

    public function registroAsesor(Request $request){
        $user = new User();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->tipo = 'asesor';
        $user->comment = $request->comentario;
        $user->experiencia = $request->experiencia;
        $user->active = 0;
        $user->save();

        Session::flash('flash_message_registro', 'Gracias por registrarte, ahora debes esperar a que tu solicitud como asesor sea aprobada.');
        return back();
    }
}
