@extends('admin.template.main')


@section('pagina','Editar estudiante ' . $estudiante->nombre_completo)

@section('cuerpo')

	{!! Form::open(['route'=>['estudiante.update',$estudiante],'method'=>'PUT','enctype'=>'multipart/form-data','files'=>true]) !!}
		
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('nombre_completo',$estudiante->nombre_completo,['class'=>'form-control','placeholder'=>'Nombre Completo','required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('fecha_nacimiento','Fecha de Nacimiento') !!}
			{!! Form::date('fecha_nacimiento',$estudiante->fecha_nacimiento,['class'=>'input-group date','id'=>'datetimepicker1','required']) !!}
		</div>		
		
		<div class="form-group">
			{!! Form::label('numero_documento','Numero de cedula') !!}
			{!! Form::text('numero_documento',$estudiante->numero_documento,['class'=>'form-control','placeholder'=>'Numero de Documento','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('name','Lugar de expediccón de la cedula') !!}
			{!! Form::text('lugar_expedicion',$estudiante->lugar_expedicion,['class'=>'form-control','placeholder'=>'Cuidad','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('name','Telefono') !!}
			{!! Form::text('telefono',$estudiante->telefono,['class'=>'form-control','placeholder'=>'Numero de Telefono','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('direccion','Direccíon') !!}
			{!! Form::text('direccion',$estudiante->direccion,['class'=>'form-control','placeholder'=>'Direccíon de Residencia','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo','Correo Electronico') !!}
			{!! Form::email('correo',$estudiante->correo,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
		</div>		

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>	
		
	{!! Form::close() !!}

	    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
		
	{!! Form::close() !!}

@endsection