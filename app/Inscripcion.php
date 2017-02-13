<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = "inscripcions";
    protected $fillable = ['estado','curso_id','estudiante_id','nombre_completo','lugar_expedicion','numero_documento','telefono','direccion','correo','fecha_nacimiento'];

    public function estudiante(){

    	return $this->belongsTo(Estudiante::class,'estudiante_id');
    }

    public function curso(){

    	return $this->belongsTo(Curso::class,'curso_id');
    }    
}
