@extends('admin.template.main')


@section('pagina','Registrar Curso')

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
	
	{!! Form::open(['route'=>'cursos.store','method'=>'POST','enctype'=>'multipart/form-data','files'=>true]) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre del Curso') !!}
			{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Programa','required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('name','Precio del Curso') !!}
			{!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Precio del Programa','required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('programas','Selecione el Programa') !!}
			{!! Form::select('programas_id',$programas,null,['class'=>'form-control','placeholder'=>'Selecione un programa','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Descripcion del curso') !!}
			{!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion del Curso','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>	
		
	{!! Form::close() !!}

@endsection