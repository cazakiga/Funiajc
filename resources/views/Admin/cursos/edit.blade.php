@extends('admin.template.main')


@section('pagina','Editar Curso ' . $curso->nombre)

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
	
	{!! Form::open(['route'=>['cursos.update',$curso],'method'=>'PUT']) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre del Curso') !!}
			{!! Form::text('nombre', $curso->nombre,['class'=>'form-control','placeholder'=>'Nombre del Programa','required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('name','Precio del Curso') !!}
			{!! Form::number('precio', $curso->precio,['class'=>'form-control','placeholder'=>'Precio del Programa','required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::label('programas','Selecione el Programa') !!}
			{!! Form::select('programas_id',$programas,null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Descripcion del curso') !!}
			{!! Form::textarea('descripcion', $curso->descripcion,['class'=>'form-control','placeholder'=>'Descripcion del Curso','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
		</div>	
		
	{!! Form::close() !!}

@endsection