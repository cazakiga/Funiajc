<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Documento extends Model
{
    protected $table = "Documentos";
    protected $fillable = ['nombre','cedula','hoja_vida','certificado_estudios','certificado_exp_laboral','rut','ante_judiciales','ante_responsabilidad','ante_disiplinarios'];

/*    public function setPathAttribute ($path){
    	$this->attribute['path'] = Carbon::now().$path->getClientOriginalName();
    	$nombreFile =Carbon::now().$path->getClientOriginalName();
    	Storage::disk('local')->put($path,$nombreFile);
    }*/

    public function path($archivo){

        $ruta = time().'_'.$archivo->getClientOriginalName();
        Storage::disk('local')->put($ruta,file_get_contents($archivo->getRealPath()));
        
        return $ruta;
    }
}
