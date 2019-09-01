@extends('layouts.app')

@section('titulopagina') Explora Turbaco @endsection

@section('claseBody') page ciudad turbaco @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">

					<span class="hero-sup-title">Explora Bolívar</span>
					<h1 class="hero-title">Explora Turbaco.</h1>
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
						<h3>¿Qué hay para hacer hoy en Turbaco?</h3>


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
							<li>Gentilicio: Turbaquero</li>
							<li>Otros nombres que ha recibido el municipio: Turuaco o Yurbaco</li>
						</ul>
						<hr>
						<p>
							<strong>Geografía:</strong>
							La posición geográfica de Turbaco lo sitúa a los 10°19'30" segundos de latitud norte; y a 1°17'29" de longitud oeste del meridiano de Bogotá.
						</p>
						<p>
							El suelo de Turbaco es fértil en el 80%, seco, de roca caliza con restos de corales petrificados, muy permeable a las aguas lluvias.
						</p>
						<hr>
						<p>
							<strong>Límites del municipio:</strong>
							Turbaco limita al norte con los municipios de: Santa Rosa y Villanueva (Alipaya y Timiriguaco, Sus nombres indígenas); Al este con San Estanislao de Kostka, Arenal; Al Sur con Arjona y Turbana y al Occidente con Turbana y Cartagena; Siguiendo con esta última el curso del arroyo de ahoga sapos, canalizado para la construcción de la Urbanización 11 de Noviembre. Los corregimientos de Cañaveral, Chiquito y la Vereda de Aguas Prietas, integran la división política administrativa del Municipio de Turbaco.
						</p>
						<ul class="list-unstyled">
							<li>Extensión total: 170 km2</li>
							<li>Extensión área urbana: 5,34 km2</li>
							<li>Extensión área rural: 5,069 km2</li>
							<li>Altitud de la cabecera municipal (metros sobre el nivel del mar): 200 Metros</li>
							<li>Temperatura media: 27 °C</li>
							<li>Distancia de referencia: 10 km desde Cartagena de Indias</li>
							

							
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection