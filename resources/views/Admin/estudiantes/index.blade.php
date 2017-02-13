@extends('admin.plantilla.main')

@section('titulo-ventana','Estudiantes / Listado de estudiantes')
@section('class-est','active')
@section('class-est-list','active')
@section('cuerpo')


<div class="content-panel">
	<div class="container">	<a href="{{ route('estudiantes.create') }}" class="btn btn-primary" id="botonr">Registrar nuevo estudiante</a></div>
	<hr>
	<table class="table table-striped table-advance table-hover">
		<thead>
			<tr>
			<th><i class="fa fa-id-card-o"></i> Documento</th>
			<th><i ></i> Nombre</th>
			<th><i class="fa fa-phon"></i> Telefono</th>
			<th><i class="fa fa-address-book-o" aria-hidden="true"></i> Direccion</th>
			<th><i class=" fa fa-envelope-o"></i> Email</th>
			<th><i class=" fa fa-edit"></i> Accion</th>
			<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($estudiantes  as $estudiante)
			<tr>
				<td> {{ $estudiante->numero_documento }}</td>	
				<td> {{ $estudiante->nombre_completo}}</td>
				<td> {{ $estudiante->telefono}}</td>
				<td> {{ $estudiante->direccion}}</td>
				<td> {{ $estudiante->correo}}</td>	
				<td> 				
				<a href="{{ route('estudiantes.edit',$estudiante->id)}}" class="btn btn-primary"><span class="fa fa-pencil" aria-hidden="true"></span></a>
				<a href="#" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="pagination">
	{!! $estudiantes ->render() !!}
</div>

@endsection