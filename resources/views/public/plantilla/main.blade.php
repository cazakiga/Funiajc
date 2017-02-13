<!DOCTYPE html>
<html>
<head>
	<title>FUniajc</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos1.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>

	@include('public.plantilla.nav')

	@include('public.plantilla.carrusel')

	<div class="row" id="Contenido">
		@include('public.plantilla.menuizq')
		@yield('cuerpo')
	</div>

	@include('public.plantilla.footer')


	<script src="{{ asset('jquery/jquery-3.1.0.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
