@extends('public.plantilla.main')
@section('cuerpo')

<div class="col-md-8" id="cont" >
	<h2>Diplomados en ingenieria</h2>
	<hr>
	<article class="post clearfix">
		<a href="#" class="thumb pull-left">
			<img src="{{asset('images/moviles.jpeg')}}" alt=""></a>

			<h3 class="post-tittle">
				<a href="#">Aplicaciones moviles</a>
			</h3>
			<p></p>
			<p class="post-contenido">
				Con nosotros aprenderas a desarrolar aplicaiones moviles 
				de manera profesional, asi ampliaras tu conocimiento y tendras 
				mejores ofertas de empleo.
				<a href="#">Registarse</a>
			</p>
	</article>

	<article class="post clearfix">
		<a href="#" class="thumb pull-left">
			<img src="{{asset('images/software.png')}}" alt=""></a>

			<h3 class="post-tittle">
				<a href="#">Calidad de software</a>
			</h3>
			<p></p>
			<p class="post-contenido">
				Con nosotros aprenderas a desarrolar aplicaiones con calidad 
				incomparable lo que hara que tus proyectos sean incomparables, asi ampliaras tu conocimiento y tendras mejores ofertas de empleo.
				<a href="#">Registarse</a>
			</p>
	</article>
</div>

@endsection()
