@extends('admin.template.main')

@section('pagina','Publicar Noticia')

@section('cuerpo')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	{!! Form::open(['route'=>'publicar.store','method'=>'POST','enctype'=>'multipart/form-data','files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('titulo','Titulo') !!}
			{!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('contenido','Descripcion') !!}
			{!! Form::textarea('contenido',null,['class'=>'form-control','placeholder'=>'','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','imagen') !!}
			{!! Form::file('urlImg',null,['class'=>'form-control','placeholder'=>'','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('publicar',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
