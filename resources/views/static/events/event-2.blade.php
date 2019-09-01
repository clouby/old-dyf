@extends('layouts.app')

@section('titulopagina') ¿Por qué ir a playa blanca? @endsection

@section('claseBody') page playa-blanca evento-single @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container containermin">
			<div class="row">
				<div class="col-12 col-sm-10">

					<span class="hero-sup-title">Recomendados.</span>
					<h1 class="hero-title">¿Por qué ir a playa blanca?</h1>

					<a href="{{ route('home') }}" class="btn btn-back-main"><span class="arrow left">&larr;</span> Regresar</a>

				</div>
			</div>
		</div>

	</div>
</div>

@endsection

@section('content')


<div class="page-contacto-content box">
	<div class="box">
		<div class="container containermin">
			<div class="row">
				<div class="col-12">
					<div class="card box">

						<div class="row">
							<div class="col-12 col-sm-4">
								<img src="{{ asset('dist/images/pages/eventos/gbqb2ipk3xez.jpg') }}" alt="" class="img-fluid">
							</div>
							<div class="col-12 col-sm-8">
								<div class="box">
									<h5>Un paraíso listo para descubrir.</h5>
									<p>
										Ubicada en la isla Barú es uno de los lugares más visitados por los turistas en Cartagena así mismo para los locales gracias a sus hermosas aguas cristalinas que atraen la atención de los bañantes. 
									</p>
									<h5>El mar, el océano.</h5>
									<p>
										En Este bello mar podrás probar cocteles y comida típica disfrutando de la arena blanca que componen la belleza de la playa, además podrás apreciar una puesta de sol única que permitirá que en las noches observes el plancton fosforescente que se llega a la orilla a través de cada ola. 
									</p>
									<h5>Deportes y diversión.</h5>
									<p>
										Si te gustan los deportes náuticos playa Blanca es el sitio indicado para sumergirte en las profundidades y divertirte buceando donde podrás apreciar diferentes especies de peces de colores y la belleza de los arrecifes de corales. El kayak, el canotaje y careteo también hacen parte de las actividades que puedes disfrutar en esta zona.	
									</p>
								</div>
							</div>
						</div>


						
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection