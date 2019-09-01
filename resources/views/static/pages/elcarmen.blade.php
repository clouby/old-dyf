@extends('layouts.app')

@section('titulopagina') Explora Maria la Baja @endsection

@section('claseBody') page ciudad marialabaja @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">

					<span class="hero-sup-title">Explora Bolívar</span>
					<h1 class="hero-title">Explora El Carmen de Bolívar</h1>
					<a class="btn btn-back-main" href="{{ route('home')  }}">Regresar</a>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection

@section('content')


<div class="page-contacto-content box">
	<div class="box">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">

					<div class="box">
						<h3>¿Qué hay para hacer hoy en Maria la Baja?</h3>


						<div class="box">


							<div class="evento-municipio card box">
								<div class="evento-municipio-info box">

									<div class="row">
										<div class="col-12 col-sm-4">
											<img src="{{ asset('dist/images/pages/departamento/turbaco/fiestas4colturbaco.jpg') }}" alt="" class="img-fluid">
										</div>
										<div class="col-12 col-sm-8">
											<h4>Fiestas en honor a la Santísima Cruz de Mayo, en Cañaveral.</h4>
											<p>
												Se acostumbra comprar una cruz hecha con ramas y adornada con flores naturales secas o de papel de colores, la cual se adquiere cerca a las iglesias o en algunos puntos comerciales. La costumbre consiste en bendecirla en la misa inmediatamente posterior y llevarla a casa para que proteja el hogar. 
											</p>
										</div>
									</div>
									
								</div>
							</div>

							<div class="evento-municipio card box">
								<div class="evento-municipio-info">

									<div class="row">
										<div class="col-12 col-sm-4">
											<img src="{{ asset('dist/images/pages/departamento/turbaco/fiestas_taurinas_turbaco.jpg') }}" alt="" class="img-fluid">
										</div>
										<div class="col-12 col-sm-8">
											<h4>Fiestas de toros en homenaje a Santa Catalina de Alejandría, del 20 al 28 de Diciembre.</h4>
											<p>
												Las populares fiestas son realizadas en la plaza principal, lugar en el que concurrían el pueblo turbaquero a celebrar las festividades en honor a Santa Catalina de Alejandría, patrona de este importante municipio. 
											</p>
										</div>
									</div>

								</div>
							</div>

						</div>
						<div class="box">
							<p class="text-center">
								Próximamente más eventos y asuntos de interés para ti.
							</p>
						</div>
					</div>

				</div>
				<div class="col-12 col-lg-4">
					<div class="box card">
						<ul class="list-unstyled">
							<h3>El municipio.</h3>
							<li>Gentilicio: Marialabajense</li>
							<li>Otros nombres que ha recibido el municipio: El municipio no recibió otro nombre si no otro gentilicio, que era Mariquiteño.</li>
						</ul>
						<hr>
						<p>
							<strong>Geografía:</strong>
							Descripción Física: María La Baja en esta zona produce condiciones favorables para la vía por la cercanía del agua para el desarrollo de la agricultura y la ganadería. Se encuentra en las faldas de los montes de María, con un suelo que tiene un 90% apto para la agricultura y unos recursos hidráulicos con una ciénaga llamada la Ciénaga de María La Baja, es una de las más grandes de Colombia que se encuentra al norte de la cabecera municipal y es rica en recursos piscícolas.
						</p>
						<hr>
						<p>
							<strong>Límites del municipio:</strong>
							Norte: Municipio de Arjona
							Este: Municipio de Mahates y San Juan Nepomuceno.
							Oeste: Municipio de San Onofre (Sucre).
							Sur: Municipio del Carmen y San Jacinto.
						</p>
						<ul class="list-unstyled">
							<li>Extensión total: 547 km2</li>
							<li>Extensión área urbana: 150 km2</li>
							<li>Extensión área rural: 397 km2</li>
							<li>Altitud de la cabecera municipal (metros sobre el nivel del mar): 14 Metros</li>
							<li>Temperatura media: 28 °C</li>
							<li>Distancia de referencia: 72 km desde Cartagena de Indias</li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection