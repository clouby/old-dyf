@extends('layouts.main')

@section('content')

<div class="header__hero">
        <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="#">Navbar w/ text</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        </nav>
</div>

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

<!-- Intro Home -->
<div class="intro-home box">
	<div class="container">
		<dniv class="row row-vh row-title text-center">
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
</div>

@endsection
