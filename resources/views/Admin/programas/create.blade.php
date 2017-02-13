@extends('admin.plantilla.main')
@section('titulo-ventana','Programas / Añadir nuevo programa')
@section('class-prog','active')
@section('class-pro-reg','active')
@section('cuerpo')

<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Datos</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" action="{{ route('programas.store')}}">
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nombre del programa</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre">
          </div>
      </div>
      <button type="submit" class="btn btn-theme">Registrar</button>
  </form>
</div>

@endsection