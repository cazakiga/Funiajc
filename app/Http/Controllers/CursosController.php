<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Curso;
use App\Programa;
use Laracasts\Flash\Flash;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $cursos = Curso::orderBy('id')->paginate(5);
         return view('admin.cursos.index') -> with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programas = Programa::orderBy('nombre')->pluck('nombre','id');
        return view('admin.cursos.create') -> with('programas',$programas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
       $curso = new Curso($request->all());
       $curso -> save();

       return redirect()-> route('cursos.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programas = Programa::orderBy('nombre')->pluck('nombre','id');
        $curso = Curso::find($id);
        return view('admin.cursos.edit') -> with('curso',$curso) -> with('programas',$programas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programas = Programa::orderBy('nombre')->pluck('nombre','id');
        $curso = Curso::find($id);
       return view('admin.cursos.edit')-> with('curso',$curso) -> with('programas',$programas);
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
        $curso = Curso::find($id);
        $curso -> fill($request->all());
        $curso -> save();

       Flash::warning('El curso '. $curso->nombre . ' se edito correctamente');

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $curso = Curso::find($id);
         $curso -> delete();

         return redirect()->route('cursos.index');
    }
}
