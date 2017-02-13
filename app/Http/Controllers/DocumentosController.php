<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
use Storage;
class DocumentosController extends Controller
{
    public function formCargar(){
    	return view('admin.documentos.create');
    }

    public function cargar(Request $request){

    	$documento = new Documento();
    	$documento->nombre = $request->nombre;

        $archivo = $request->file('path');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->cedula = $ruta;
 
        $archivo = $request->file('hoja_vida');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->hoja_vida = $ruta;
 
        $archivo = $request->file('certificado_estudios');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->certificado_estudios = $ruta;
 
        $archivo = $request->file('certificado_exp_laboral');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->certificado_exp_laboral = $ruta;
 
        $archivo = $request->file('rut');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->rut = $ruta;
 
        $archivo = $request->file('ante_judiciales');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->ante_judiciales = $ruta;
 
        $archivo = $request->file('ante_responsabilidad');
        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        $documento->ante_responsabilidad = $ruta;
 
    	$archivo = $request->file('ante_disiplinarios');
    	$ruta = time().'_'.$archivo->getClientOriginalName();
    	Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
    	$documento->ante_disiplinarios = $ruta;
    	
        $documento->save();
    	
    }   
}
