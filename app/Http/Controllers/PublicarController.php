<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class PublicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia = Noticia::orderBy('id', 'DSC')->paginate(5);
        return view('admin.noticia.index')->with('noticia', $noticia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticia.create');
    }

    public function publicarNoticia()
    {
        $noticia = Noticia::orderBy('id', 'DSC')->paginate(4);
        return view('public.noticias.noticia')->with('noticia', $noticia);
    }

    public function info()
    {
        return view('public.infoFundacion.info');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $noticia            = new Noticia();
        $noticia->titulo    = $request->titulo;
        $noticia->contenido = $request->contenido;

        $img      = $request->file('urlImg');
        $imgRoute = time() . '_' . $img->getClientOriginalName();

        Storage::disk('imgNoticias')->put($imgRoute, file_get_contents($img->getRealPath()));

        $noticia->urlImg = $imgRoute;
        $noticia->usuarios_id = 1;
        $noticia->save();

        return redirect()->route('publicar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        return view('admin.noticia.edit')->with('noticia', $noticia);
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
        // encuentra la noticia a editar por medio del id
        $noticia = Noticia::find($id);
        // obtiene la imagen envia en porel formulario
        $img = $request->file('urlImg');
        // genera un nombre unico para la imagen. combinando el timepo y el nombre de la imagen
        $imgRoute = time() . '_' . $img->getClientOriginalName();
        // se invoca al disco y se gurada la imagen con el metodo put, el cual recibe la ruta y el contenido de la imagen
        Storage::disk('imgNoticias')->put($imgRoute, file_get_contents($img->getRealPath()));
        // actualiza los campos del registro con el metodo fill.
        $noticia->fill($request->all());
        // se asiga el nuevo nombre de la imagen a la ruta de la base de datos
        $noticia->urlImg = $imgRoute;
        // guarda el registro actualizado en la base de datos.
        $noticia->save();
        // redireciona a la vista index deonde se encutran todas las noticias.
        return redirect()->route('publicar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
