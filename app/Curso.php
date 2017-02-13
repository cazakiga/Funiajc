<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "Cursos";
    protected $fillable = ['nombre','programas_id','precio','descripcion'];

    public function programa()
    {
    	return $this->belongsTo('App\Programa');
    }

    public function Estudiante()
    {
    	return $this->belongsToMany('App\Estudiante');
    }
}
