@extends('admin.plantilla.main')
@section('titulo-ventana','Docentes / Cargar archivos')
@section('class-doc','active')
@section('class-doc-reg','active')
@section('cuerpo')


<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i>Datos</h4>
	<hr>
  	<form class="form-horizontal style-form" method="post" enctype="multipart/form-data" action="{{ route('admin.documentos.cargar')}}">
  		{{ csrf_field() }}
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" required="false" >
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Cedula</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="path"  required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Hoja de vida</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="hoja_vida" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Certificado de estudios</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="certificado_estudios" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Certificado de experiencia laboral</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="certificado_exp_laboral" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Rut</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="rut" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Antecedentes judiciales</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="ante_judiciales" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Antecedentes de responsabilidad</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="ante_responsabilidad" required="false">
          </div>
      </div>
 
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Antecedentes disiplinarios</label>
          <div class="col-sm-10">
              <input type="file" class="form-control" name="ante_disiplinarios" required="false">
          </div>
      </div>

      <button type="submit" class="btn btn-theme">Cargar</button>
  </form>
</div>

@endsection