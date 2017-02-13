@extends('admin.plantilla.main')


@section('titulo-ventana','Usuarios / Añadir nuevo usuario')
@section('class-user','active')
@section('class-user-reg','active')
@section('cuerpo')


<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Datos</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" action="{{ route('usuarios.store')}}">
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="name">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" name="email">
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
              <input type="password" class="form-control" name="password">
          </div>
      </div>

    <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
		    <select class="form-control" name="tipo">
			  <option value="admin">Administrador</option>
			  <option value="docente">Docente</option>
			</select>
      	</div>
    </div>      


      <button type="submit" class="btn btn-theme">Registrar</button>
  </form>
</div>

@endsection