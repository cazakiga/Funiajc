@extends('admin.template.main')

@section('pagina','Listado de noticias')

@section('cuerpo')

	<a href="{{ url('publicar/create') }}" class="btn btn-primary" id="botonr">Publicar Nueva Noticia</a>

	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Publicado Por</th>
			<th>Fecha Creacion</th>
			<th>Accíon</th>
		</thead>
		<tbody>
			@foreach($noticia as $n)
				<tr>
					<td> {{ $n->id }}</td>
					<td> {{ $n->titulo}}</td>
					<td> Jhoan</td>
					<td> {{ $n->created_at }}</td>
					<td>
						<a href="{{ route('publicar.edit', $n->id) }}" class="btn btn-primary" name="editar"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

				    </td>
				</tr>
			@endforeach
		</tbody>
	</table>


@endsection
