<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\contacto;
use Mail;
use App\Curso;
use App\Estudiante;
use App\Inscripcion;

class informacionController extends Controller
{

    public function contacto(){
        return view('public.infoFundacion.contacto');
    }

    public function enviarEmail(Request $request){

        $array =['nombre'=>$request->nombre];

        Mail::to('fundacioUniajc@gmail.com','Funiajc')
            ->send(new contacto($request->all()));
    }

    public function inscripcionForm(){
        $cursos = Curso::all();
        return view('public.infoFundacion.inscripcion')->with('cursos',$cursos);
    }

    public function inscripcion(Request $request){

        //dd($request->all());
       $inscripcion = new Inscripcion($request->all());
       $inscripcion->estado = 'pendiente';
       $inscripcion->curso_id= $request->curso_id;
       $inscripcion->save();

      return redirect()->route('admin.lista_inscripciones');
    }

    public function listInscripciones(){

        $listInscripciones = Inscripcion::where('estado','pendiente')->orderBy('id','ASC')->paginate(5);

        return view('public.infoFundacion.listInscripciones')->with('listInscripciones',$listInscripciones);
    }    

    public function datos(){

        $inscripcion = Inscripcion::find(3);
       // $estudiante= Estudiante::first();
        dd($inscripcion->curso->toArray());
    }

    public function mision()
    {
        return view('public.infoFundacion.mision');
    }

    public function vision()
    {
        return view('public.infoFundacion.vision');
    }

    public function objetivos()
    {
        return view('public.infoFundacion.objetivos');
    }

}
