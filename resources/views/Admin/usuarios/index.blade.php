@extends('admin.plantilla.main')

@section('titulo-ventana','Usuarios / Listado de usuarios')
@section('class-user','active')
@section('class-user-list','active')
@section('cuerpo')


<div class="content-panel">
	<div class="container">	<a href="{{ route('usuarios.create') }}" class="btn btn-primary" id="botonr">Registrar Nuevo usuario </a></div>
	<hr>
	<table class="table table-striped table-advance table-hover">
		<thead>
			<tr>
			<th><i class="fa fa-bullhorn"></i> ID</th>
			<th class="hidden-phone"><i class="fa fa-question-circle"></i> Login</th>
			<th><i class="fa fa-bookmark"></i> Tipo</th>
			<th><i class=" fa fa-edit"></i> Accion</th>
			<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios  as $f)
			<tr>
				<td> {{ $f->id }}</td>	
				<td> {{ $f->email}}</td>
				@if($f->tipo == 'admin')
					<td> <span class="label label-info">{{ $f->tipo}}</span></td>	
				@else
					<td> <span class="label label-success">{{ $f->tipo}}</span></td>	
				@endif
				<td> 				
				<a href="{{ route('usuarios.edit',$f->id)}}" class="btn btn-primary"><span class="fa fa-pencil" aria-hidden="true"></span></a>
				
				<a href="{{ route('admin.usuarios.destroy',$f->id)}}" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="pagination">
	{!! $usuarios ->render() !!}
</div>

@endsection