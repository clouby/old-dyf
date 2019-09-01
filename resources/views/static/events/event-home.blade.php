@extends('layouts.app')

@section('titulopagina') Próximos Eventos @endsection

@section('claseBody') page eventos-home eventos-main evento-single @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container containermin">
			<div class="row">
				<div class="col-12 col-sm-10">

					<span class="hero-sup-title">Disfruta y explora los próximos</span>
					<h1 class="hero-title">Eventos en Cartagena.</h1>

				</div>
			</div>
		</div>

	</div>
</div>

@endsection

@section('content')


<div class="page-contacto-content box">
	<div class="box">
		
		<div class="eventos eventos-page eventos-home box">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-5 evento-large">
						<a class="box evento-link" href="{{ route('evento-wef') }}">


							<span class="box">
								<h4 class="event-title">Women Economic Forum Latinoamérica.</h4>
								<p class="event-date">Agosto 1 al 3, 2019.</p>
								<button class="btn btn-default">
									Seguir leyendo <span class="arrow">&rarr;</span>
								</button>
							</span>
							<img src="{{ asset('dist/images/pages/eventos/wef2019.jpg') }}" alt="" class="img-fluid">


						</a> 
					</div>
					<div class="col-12 col-md-7 evento-short">
						<div class="evento evento-top box">
							<a class="box evento-link" href="{{ route('blog-1') }}">

								<span class="box">
									<h4 class="event-title">Nuestro top 10 de restaurantes recomendados</h4>
									<p class="event-date">Junio 10, 2019.</p>
									<button class="btn btn-default">
										Seguir leyendo <span class="arrow">&rarr;</span>
									</button>
								</span>
								<img src="{{ asset('dist/images/pages/eventos/evento-2.jpg') }}" alt="" class="img-fluid">
								

							</a>
						</div>
						<div class="evento evento-bottom box">
							<a class="box evento-link" href="{{ route('blog-2') }}">
								<span class="box">
									<h4 class="event-title">5 Comidas que debes probar en Cartagena</h4>
									<p class="event-date">Junio 10, 2019.</p>
									<button class="btn btn-default">
										Seguir leyendo <span class="arrow">&rarr;</span>
									</button>
								</span>

								<img src="{{ asset('dist/images/pages/eventos/evento-3.jpg') }}" alt="" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>







	</div>

</div>


@endsection