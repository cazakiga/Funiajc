@extends('admin.plantilla.main')

@section('titulo-ventana','Inscripciones / Listado de inscripciones pendientes')
@section('class-ins','active')
@section('cuerpo')


<div class="content-panel">

	<hr>
	<table class="table table-striped table-advance table-hover">
		<thead>
			<tr>
			<th><i class="fa fa-bullhorn"></i> Documento</th>
			<th class="hidden-phone"><i class="fa fa-question-circle"></i> Nombre del estudiante</th>
			<th><i class="fa fa-bookmark"></i> Curso</th>
			<th><i class=" fa fa-edit"></i> Estado</th>
			<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($listInscripciones  as $f)
			<tr>
				<td> {{ $f->numero_documento }}</td>	
				<td> {{ $f->nombre_completo}}</td>
				<td> {{ $f->curso->nombre}}</td>
				<td> {{ $f->estado}}</td>
				<td> 				
				<a href="{{ route('admin.estudiante.aceptado',$f->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
				
				<a href="{{route('admin.estudiante.rechazado',$f->id)}}" class="btn btn-danger" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="pagination">
	{!! $listInscripciones ->render() !!}
</div>

@endsection