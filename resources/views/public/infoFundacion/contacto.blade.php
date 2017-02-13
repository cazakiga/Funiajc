@extends('public.plantilla.main')

@section('cuerpo')

<div class="col-md-7" id="cont" >
	<article class="post clearfix">

		<h2 class="post-tittle">Contacto</h2>

		<p class="post-contenido">
			<div class="form-panel">
				<p>Ingresa tus datos de contacto, un mensaje corto abajo y lo contestaremos lo más pronto posible.</p>
				<hr>
			  	<form class="form-horizontal style-form" method="post" action="{{ url('/contacto/send')}}">
			  		{{ csrf_field() }}

			      <div class="form-group">
			          <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
			          <div class="col-sm-10">
			              <input type="text" class="form-control" name="nombre" placeholder="Tu nombre">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-2 col-sm-2 control-label">Asunto</label>
			          <div class="col-sm-10">
			              <input type="text" class="form-control" name="asunto" placeholder="Tu asunto">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-2 col-sm-2 control-label">Email</label>
			          <div class="col-sm-10">
			              <input type="email" class="form-control" name="email" placeholder="Tu email">
			          </div>
			      </div>

			      <div class="form-group">
			          <label class="col-sm-2 col-sm-2 control-label">Mensaje</label>
			          <div class="col-sm-10">
			              <textarea class="form-control" rows="6" name="mensaje"></textarea>
			          </div>
			      </div>
			      <div class="form-group">
			          <label class="col-sm-2 col-sm-2 control-label"></label>
			          <div class="col-sm-10">
						<button type="submit" class="btn btn-primary" >Enviar Email</button>
			          </div>
			      </div>			      
			  </form>
			</div>
		</p>
	</article>
</div>

@endsection()
