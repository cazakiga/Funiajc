<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $fillable = ['nombre_completo','lugar_expedicion','numero_documento','telefono','direccion','correo','fecha_nacimiento'];

    public function cursos()
    {
    	return $this->belongsToMany('App\Curso');
    }
}
