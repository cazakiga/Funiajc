<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = "programas";
    protected $fillable = ['nombre'];

    public function cursos()
    {
    	return $this->hasMany('App\Curso');
    }
}
