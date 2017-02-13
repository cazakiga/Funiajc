@extends('admin.template.main')


@section('pagina','Editar Noticia ' . $noticia->titulo)

@section('cuerpo')

	{!! Form::open(['route'=>['publicar.update',$noticia],'method'=>'PUT','enctype'=>'multipart/form-data','files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('titulo','Titulo') !!}
			{!! Form::text('titulo',$noticia->titulo,['class'=>'form-control','placeholder'=>'Titulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('contenido','Descripcion') !!}
			{!! Form::textarea('contenido',$noticia->contenido,['class'=>'form-control','placeholder'=>'','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','imagen') !!}
			{!! Form::file('urlImg',null,['class'=>'form-control','placeholder'=>'','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Publicar',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
