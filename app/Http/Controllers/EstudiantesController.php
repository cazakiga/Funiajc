<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Estudiante;
use App\Inscripcion;
use Laracasts\Flash\Flash;
use Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = Estudiante::orderBy('id','ASC')->paginate(5);
        return view('admin.estudiantes.index')-> with('estudiantes',$estudiante);

    }

    public function aceptarInscripcion($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->estado = 'aceptado';
        $inscripcion->save();
        $inscripcion->toArray();

        $estudiante = new Estudiante();
        $estudiante->nombre_completo=$inscripcion->nombre_completo;
        $estudiante->lugar_expedicion=$inscripcion->lugar_expedicion;
        $estudiante->numero_documento=$inscripcion->numero_documento;
        $estudiante->telefono=$inscripcion->telefono;
        $estudiante->direccion=$inscripcion->direccion;
        $estudiante->correo=$inscripcion->correo;
        $estudiante->fecha_nacimiento=$inscripcion->fecha_nacimiento;
        $estudiante->curso_id=$inscripcion->curso_id;
        //dd($estudiante);
        $estudiante->save();

        return redirect()->route('admin.lista_inscripciones');
    }    

    public function rechazarInscripcion($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->estado = 'rechazado';
        $inscripcion->save();

        return redirect()->route('admin.lista_inscripciones');
    }

    public function formImport()
    {
        return view('admin.estudiantes.index');
    }

    public function estudiantesImport()
    {

        $file = Input::file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('excel',$file_name);

        $results = Excel::load('excel/'.$file_name, function($reader){
            $reader->all();
        } )->get();

        foreach ($results as $est) {
           $estudiante = new Estudiante($est->all());
           $fecha = new Carbon($est->fecha_nacimiento);
           $fecha = $fecha->format('Y-m-d');
           $estudiante->fecha_nacimiento= $fecha;
           $estudiante->save();
        }

        return redirect()->route('estudiantes.index');
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*$file = $request->file('image');
        $nombre = 'imagen_' . time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/fotos'; 
        $file -> move($path,$nombre);
    */
        $estudiante = new Estudiante($request->all());
    //    $estudiante['imagen']=$path . '/' .  $nombre;
        $estudiante->save();

       // Flash::success('Se ha registrado el estudiante ' . $estudiante->nombre_completo . ' de forma exitosa!');

        return redirect()->route('estudiantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('admin.estudiantes.edit') -> with('estudiante',$estudiante);
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
        $estudiante = Estudiante::find($id);
        $estudiante -> fill($request->all());
        $estudiante->save();

        Flash::warning('El estudiante '. $estudiante->nombre_completo . ' se edito correctamente');

        return redirect()->route('estudiante.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        Flash::error('El estudiante ' . $estudiante->nombre_completo . 'a sido borrado de forma exitosa!');
        $estudiante -> delete();

        return redirect() -> route('estudiante.index');
    }
   
}
