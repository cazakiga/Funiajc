@extends('admin.template.main')

@section('pagina','Listado de cursos')

@section('cuerpo')

	<a href="{{ route('cursos.create') }}" class="btn btn-primary" id="botonr">Nuevo Curso</a>

	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Facultad</th>
			<th>Accíon</th>
		</thead>
		<tbody>
			@foreach($cursos as $c)
				<tr>
					<td> {{ $c->id }}</td>	
					<td> {{ $c->nombre}}</td>	
					<td> {{ $c->precio }}</td>
					<td> {{ $c->nombre }}</td>
					<td> 
						<a href="{{ route('cursos.edit', $c->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="{{ route('admin.cursos.destroy', $c->id) }}" class="btn btn-danger" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="pagination">
		{!! $cursos->render() !!}
	</div>
@endsection