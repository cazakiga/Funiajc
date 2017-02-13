@extends('admin.plantilla.main')

@section('titulo-ventana','Estudiantes / Listado de estudiantes')
@section('class-prog','active')
@section('class-prog-list','active')
@section('cuerpo')


<div class="content-panel">
	<div class="container">	<a href="{{ route('programas.create') }}" class="btn btn-primary" id="botonr">Nuevo programa</a></div>
	<hr>
	<table class="table table-striped table-advance table-hover">
		<thead>
			<tr>
			<th><i class="fa fa-id-card-o"></i> ID</th>
			<th><i ></i> Nombre</th>
			<th><i class=" fa fa-edit"></i> Accion</th>
			<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($programas  as $programa)
			<tr>
				<td> {{ $programa->id }}</td>	
				<td> {{ $programa->nombre}}</td>
				<td> 				
				<a href="{{ route('programas.edit',$programa->id)}}" class="btn btn-primary"><span class="fa fa-pencil" aria-hidden="true"></span></a>

				<a href="{{ route('admin.programas.destroy',$programa->id)}}" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="pagination">
	{!! $programas ->render() !!}
</div>

@endsection