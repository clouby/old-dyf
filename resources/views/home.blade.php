@extends('layouts.app')

@section('titulopagina') Deal your Fun @endsection

@section('claseBody') page home @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">
					<h1 class="hero-title">¿Estás listo para una nueva aventura?</h1>
					<div class="hero-content-search box">
						<form action="{{ route('search') }}" method="POST">
							@csrf
							<input placeholder="Explora ahora"  required="" type="text" name="q">
							<input type="submit" value="&#xF002;">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('content')

<!-- Intro Home -->
<div class="intro-home box">
	<div class="container">
		<div class="row row-vh row-title text-center">
			<div class="col-12 col-md-7">
				<h4>Más experiencias</h4>
				<h2>Opciones únicas para que descubras una ciudad única</h2>
			</div>
		</div>
	</div>
</div>

<!-- -->
<div class="experiencias box">
	<div class="container">
		<div class="row row-vh">
			@foreach ($categories as $category)
			<div class="experiencias-col col-12 col-sm-4">
				<div class="experiencias-contenido box">
					<h4 class="experiencias-titulo">{{ $category->category }}</h4>
					<a class="btn" href="/categoria/{{ $category->slug }}">Explorar ahora <span class="arrow">&rarr;</span></a>
					<img width="700" height="800" src="{{ $category->image }}" alt="" class="img-fluid">
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<!-- Intro Home -->
<!-- <div class="intro-home box">
	<div class="container">
		<div class="row row-vh row-title text-center">
			<div class="col-12 col-md-8">
				<h4>Explora más</h4>
				<h2>Eventos &amp; Blog</h2>
			</div>
		</div>
	</div>
</div>

<div class="eventos eventos-home box">
	<div class="container">
		<div class="row">

			<div class="col-12 col-sm-6">
				<div class="eventos-blog-home-content box">
					<div class="info">
						<h3>Nuestro Blog</h3>
						<a class="btn btn-rojo" href="http://blog.dealyourfun.com?src=dyf">Leer más <span class="arrow">&rarr;</span></a>
					</div>
					<img src="{{ asset('dist/images/pages/new_blog.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="eventos-blog-home-content box">
					<div class="info">
						<h3>Próximos Eventos</h3>
						<a class="btn btn-rojo" href="http://blog.dealyourfun.com/eventos/?src=dyf">Explorar &amp; conocer <span class="arrow">&rarr;</span></a>
					</div>
					<img src="{{ asset('dist/images/pages/new_eventos.jpg') }}" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div> -->

@endsection
