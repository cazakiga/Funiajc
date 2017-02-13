@extends('admin.plantilla.main')
@section('titulo-ventana','Programas / Editar')
@section('cuerpo')

<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Editar programa {{$programa->nombre }}</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" action="{{ route('programas.update',$programa)}}">
      {{ method_field('PUT') }}
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Digite nuevo nombre</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" value="{{$programa->nombre}}">
          </div>
      </div>
      <button type="submit" class="btn btn-theme">Editar</button>
  </form>
</div>

@endsection