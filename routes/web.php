<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('admin.plantilla.main');
});*/
//, 'middleware'=>'auth'

// Rutas para Admin
Route::group(['prefix'=>'admin'],function(){

	Route::get('/', function () {
    return view('admin.plantilla.main');
	});
// Rutas para la gestion de los usuarios----------------------------------------

	Route::resource('usuarios','UsuariosController');
	Route::get('usuarios/{id}/destroy',[
		'uses' => 'UsuariosController@destroy',
		'as' => 'admin.usuarios.destroy'
	]);

// Rutas para la gestion de los estudiantes--------------------------------------

	Route::resource('estudiantes','EstudiantesController');
	Route::get('estudiante/{id}/destroy',[
		'uses' => 'EstudiantesController@destroy',
		'as' => 'admin.estudiante.destroy'
	]);

	Route::get('estudiante/importform',function(){
		return view('admin.estudiantes.import');
	});

	Route::post('estudiantes/import',[
		'uses' => 'EstudiantesController@estudiantesImport',
		'as' => 'admin.estudiante.import'
	]);

	Route::get('estudiante/{id}/aceptado', [
		'uses' => 'EstudiantesController@aceptarInscripcion',
		'as' => 'admin.estudiante.aceptado'
	]);

	Route::get('estudiante/{id}/rechazado', [
		'uses' => 'EstudiantesController@rechazarInscripcion',
		'as' => 'admin.estudiante.rechazado'
	]);	
							
//Rutas para la gestion de los programas--------------------------------------------
	
	Route::resource('programas','ProgramasController');
	
	Route::get('programas/{id}/destroy',[
		'uses' => 'ProgramasController@destroy',
		'as' => 'admin.programas.destroy'
	]);

// rutas para cargar documentos de los docentes 
	Route::get('documentos/formCargar',[
		'uses' => 'DocumentosController@formCargar',
		'as' => 'admin.documentos.form'
	]);

	Route::post('documentos/cargar',[
		'uses' => 'DocumentosController@cargar',
		'as' => 'admin.documentos.cargar'
	]);	


});

// Rutas de login
Auth::routes();

// Rutas publicas para los invitados
Route::get('/', 'PublicarController@publicarNoticia');
Route::get('/mision', 'informacionController@mision');
Route::get('/vision', 'informacionController@vision');
Route::get('/objetivos', 'informacionController@objetivos');
Route::resource('publicar', 'PublicarController');

// Rutas para los diplomados
Route::get('/diplomados/ingenieria', function () {
return view('public.diplomados.ingenieria');
});

// ruta para form de contacto
Route::get('/contacto', 'informacionController@contacto');
Route::post('/contacto/send', 'informacionController@enviarEmail');

// ruta para form de inscripciones
Route::get('/inscripcion', 'informacionController@inscripcionForm');
Route::post('/inscripcion/send', 'informacionController@inscripcion');
Route::get('/inscripcion/datos', 'informacionController@datos');
Route::get('admin/inscripciones',[
	'uses' => 'informacionController@listInscripciones',
	'as' => 'admin.lista_inscripciones'
	]);


Route::get('/home', 'HomeController@index');
