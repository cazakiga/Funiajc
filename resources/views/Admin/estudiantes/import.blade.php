@extends('admin.plantilla.main')
@section('titulo-ventana','Estudiantes / Añadir nuevo estudiante')
@section('class-est','active')
@section('class-est-import','active')
@section('cuerpo')

<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Importar estudiantes desde archivo .xlsx</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" action="{{ route('admin.estudiante.import')}}" enctype="multipart/form-data">
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Selecione archivo</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="file" required="false">
          </div>
      </div>     
      <button type="submit" class="btn btn-theme">Registrar</button>
  </form>
</div>
@endsection