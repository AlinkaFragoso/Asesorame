<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', 'HomeController@index');

Route::group(['as' => 'dashboard'], function(){
  Route::get('/', 'HomeController@index')->middleware('auth');
	Route::get('dashboard', 'HomeController@index')->middleware('auth');
});

Route::auth();

Route::get('/registro/asesor', 'UserController@formAsesor');
Route::post('/registro/asesor', 'UserController@registroAsesor');
Route::get('/mis_asesorias', 'AsesoriaController@listaAsesorado');
Route::get('/mis_asesorias/solicitudes', 'AsesoriaController@solicitudesAsesorado');
Route::get('/mis_asesorias/historial', 'AsesoriaController@historialAsesorado');
Route::get('/asesoria/{id}/aceptar', 'AsesoriaController@aceptarAsesoria');
Route::get('/mis_asesorias/listado', 'AsesoriaController@listadoDeAsesor');
Route::resource('/asesorias', 'AsesoriaController');

Route::resource('/carreras', 'CarreraController');

Route::resource('/materias', 'MateriaController');

Route::resource('/temas', 'TemaController');

Route::get('/usuarios/{id}/activar', 'UserController@aceptar');
Route::get('/usuarios/{id}/rechazar', 'UserController@rechazar');
Route::get('/usuarios/asesores', 'UserController@listAsesoresAdmin');
Route::get('/usuarios/asesorados', 'UserController@listAsesoradosAdmin');
Route::resource('/usuarios', 'UserController');

Route::get('/solicitudes', 'UserController@listAdmin');

//Auth::routes();
// Route::get('/logout', function(){
// 	Auth::logout();
// 	return redirect('/login');
// });
