@extends('admin.plantilla.main')
@section('titulo-ventana','Estudiantes / Añadir nuevo estudiante')
@section('class-est','active')
@section('class-est-reg','active')
@section('cuerpo')


<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Datos</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" action="{{ route('estudiantes.store')}}">
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nombre completo</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre_completo">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Fecha de nacimiento</label>
          <div class="col-sm-10">
              <input type="date" class="form-control" class="input-group date" id="datetimepicker1" name="fecha_nacimiento">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Numero de cedula</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name="numero_documento">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Lugar de expedicion</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="lugar_expedicion">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Numero de telefono</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name="telefono">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Direccion de residencia</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="direccion">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" name="correo">
          </div>
      </div>      
      <button type="submit" class="btn btn-theme">Registrar</button>
  </form>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
@endsection

