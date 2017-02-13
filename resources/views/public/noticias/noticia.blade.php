@extends('public.plantilla.main')


@section('cuerpo')

<div class="col-md-7" id="cont">
	@foreach($noticia as $n)
	<article class="post clearfix">
		<a href="#" class="thumb pull-left">

			<img src="imgNoticias/{{ $n->urlImg }}" alt=""></a>

			<h2 class="post-tittle">
				<a href="">{{ $n->titulo }}</a>
			</h2>
			<p><span class="post-fecha">{{ $n->created_at }}</span> por <span class="post-autor"><a href="#">Funiajc</a></span></p>
			<p class="post-contenido">{{ $n->contenido }}
				<a href="">Ver mas</a>
			</p>
	</article>
	@endforeach()
</div>

<div class="row">
	<div class="col-md-6 col-md-offset-3 ">
		<div class="pagination">
			{!! $noticia->render() !!}
		</div>
	</div>
</div>

@endsection()
