@extends('public.plantilla.main')

@section('cuerpo')

<div class="col-md-7" id="cont" >
	<article class="post clearfix">

		<h2 class="post-tittle">Formulario de inscripcion</h2>

		<p class="post-contenido">
			<div class="form-panel">
				<h5 class="mb">Todos los campos son obliatorios, pro favor completa el 
				formulario </h5>
				<hr>
			  	<form class="form-horizontal style-form" method="post" action="{{ url('/inscripcion/send')}}">
			  		{{ csrf_field() }}
			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Nombre completo</label>
			          <div class="col-sm-8">
			              <input type="text" class="form-control" name="nombre_completo" required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Fecha de nacimiento</label>
			          <div class="col-sm-8">
			              <input type="date" class="form-control" class="input-group date" id="datetimepicker1" name="fecha_nacimiento" required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Numero de cedula</label>
			          <div class="col-sm-8">
			              <input type="number" class="form-control" name="numero_documento" required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Lugar de expedicion</label>
			          <div class="col-sm-8">
			              <input type="text" class="form-control" name="lugar_expedicion" required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Numero de telefono</label>
			          <div class="col-sm-8">
			              <input type="number" class="form-control" name="telefono" required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Direccion de residencia</label>
			          <div class="col-sm-8">
			              <input type="text" class="form-control" name="direccion"  required="false">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label">Email</label>
			          <div class="col-sm-8">
			              <input type="email" class="form-control" name="correo" required="false">
			          </div>
			      </div>

				  <div class="form-group">
				        <label class="col-sm-4 col-sm-4 control-label">Curso de interes</label>
				        <div class="col-sm-8">
							<select class="form-control" name="curso_id">
								@foreach($cursos as $c)
								  <option value="{{$c->id}}">{{$c->nombre}}</option>
								@endforeach
							</select>
				      	</div>
				  </div> 			      
			      <div class="form-group">
			          <label class="col-sm-4 col-sm-4 control-label"></label>
			          <div class="col-sm-8">
			              <button type="submit" class="btn btn-primary">Registrar</button>
			          </div>
			      </div> 			            
			      
			  </form>
			</div>
		</p>
	</article>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

@endsection