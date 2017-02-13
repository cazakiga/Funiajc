@extends('admin.template.main')


@section('pagina','Añadir nuevo usuario')

@section('cuerpo')

	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors ->all() as $error)
					<li> {{ $error }} </li>
				@endforeach		
			</ul>
		</div>
	@endif
	
	{!! Form::open(['route'=> ['usuarios.update',$usuario], 'method'=>'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',$usuario->name,['class'=>'form-control','placeholder'=>'Numero de identificacion','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Email') !!}
			{!! Form::text('email',$usuario->email,['class'=>'form-control','placeholder'=>'Numero de identificacion','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Contraseña') !!}
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'********','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','confirmar Contraseña') !!}
			{!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'********','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Tipo de usuario') !!}
			{!! Form::select('tipo',['admin' => 'Admin', 'docente' => 'Docente'],null,['class'=>'form-control','placeholder'=>'Seleccione el tipo de usuario','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Añadir',['class'=>'btn btn-primary']) !!}
		</div>	
		
	{!! Form::close() !!}

@endsection