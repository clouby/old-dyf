@extends('layouts.app')

@section('titulopagina') Explora San Jacinto @endsection

@section('claseBody') page ciudad sanjacinto @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">

					<span class="hero-sup-title">Explora Bolívar</span>
					<h1 class="hero-title">Explora San Jacinto.</h1>
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
						<h3>¿Qué hay para hacer hoy en San Jacinto?</h3>


						<div class="box">
							<p>
								<strong>Recorrido Histórico- Cultural</strong><br>
								Incluye visita a: el Museo Comunitario de San Jacinto, ubicado en la plaza principal, Talleres de Tejidos, Taller de elaboración de instrumentos como tamboras y gaitas, muestra musical y de danzas, Almuerzo típico y corredor artesanal sobre la vía principal.
							</p>
							<p>
								Senderos ecológicos hasta los petroglifos, y hasta la cumbre del Cerro Maco.
							</p>
							<p>
								<strong>Ruta turística:</strong><br>
							</p>
							<ul>
								<li>
									<strong>Recorrido 1.</strong> Duración: cuatro horas. Visita al Museo Comunitario –guiado en español, inglés y francés-; arribo al taller de tejidos donde los turistas conocen el proceso de este oficio y aprecian la muestra artesanal; visita al taller de instrumentos de música tradicional; sigue la muestra folclórica con la presentación de los Gaiteros de San Jacinto, acompañados de niños y jóvenes bailadores de los aires tradicionales –porro, gaita, corrida, cumbia y puya; almuerzo preparado por cocineros certificados y recorrido por las tiendas de artesanías. Incluye un circuito cultural por las calles en el casco urbano del municipio.
								</li>
								<li>
									<strong>Recorrido 2.</strong> Duración: seis horas. El punto de reunión es en el Museo Comunitario –esquina parque principal- a las 9:00 a. m. De allí a los senderos ecológicos que conducen a los petroglifos -de Rastro, El Salto del Jaguar y el arroyo El Mico- que dejaron hace aproximadamente 2.000 años los indígenas Zenúes y Malibúes. Durante el mismo se aprecia la riqueza ecológica de los Montes de María y afluentes de agua cristalina.
								</li>
								<li>
									<strong>Recorrido 3.</strong> Duración: cuatro horas. Subida al Cerro Maco. El preferido de los visitantes por ser un ícono para los sanjacinteros. Va de 300 hasta 1.000 metros sobre el nivel del mar. En este lugar nacen todas las vertientes hidrográficas de San Jacinto, San Juan Nepomuceno, El Carmen de Bolívar y Marialabaja, entre otros. Además de incomparables vistas y fincas cultivadoras de cacao y aguacate. Durante el trayecto se aprecia la rica flora y fauna de la región, hogar de monos, loros, guacamayos, tucanes, jaguares, zainos, ñeques y guartinajas. Desde la cima se aprecian varios municipios de los Montes de María, el Río Magdalena, Cartagena, el mar Caribe, el Canal del Dique, la Ciénaga de Marialabaja y Palenque.
								</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-12 col-lg-4">
					<div class="box card">
						<ul class="list-unstyled">
							<h3>El municipio.</h3>
							<li>Gentilicio: Sanjacintero</li>
						</ul>
						<hr>
						<p>
							<strong>Geografía:</strong>
							La cabecera municipal fue creciendo en forma reticular, como inicialmente lo delineó su fundador, de la parte centro (parque principal) hacia fuera (periferia), donde se demarcan las etapas de crecimiento, en los últimos años se han presentado nuevos asentamientos con unas tendencias de crecimientos hacia el norte y el este del municipio. De los barrios que conforman la cabecera municipal el barrio Centro es el más antiguo, que se originó con la delineación inicial y es el privilegiado con equipamiento social como parque recreacional, instituciones educativas, canchas deportivas, institucional, culto; además cuenta con los servicios públicos y vías pavimentadas, le siguen los barrios que surgieron alrededor de este y los barrios periféricos que tienen deficiencias de servicios públicos y equipamiento.

						</p>
						<ul class="list-unstyled">
							<li>Extensión total: 462 Km2</li>
							<li>Extensión área urbana: 92 Km2​</li>
							<li>Extensión área rural: 370 Km2</li>
							<li>Altitud de la cabecera municipal: 239 msnm</li>
							<li>Temperatura media: 27 º C</li>
							<li>Distancia de referencia: 120 Km​</li>
							​
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection