@extends('layouts.app')

@section('titulopagina') Nosotros | Deal your Fun @endsection

@section('claseBody') page about-dyf @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">

					<span class="hero-sup-title">Conócenos.</span>
					<h1 class="hero-title">Somos Deal your Fun</h1>

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



			<div class="row row-va">
				<div class="col-12 col-sm-7">
					<h3>Quienes Somos.</h3>
					<p>
							Somos una compañía de soluciones Tecnológicas, cuyo enfoque
							principal está orientado al sector turismo, en el que a través
							del desarrollo de una plataforma virtual intuitiva, moderna,
							flexible, dinámica y altamente avanzada pretendemos
							brindar a los operadores turísticos locales la
							oportunidad de expandir el alcance de su oferta
							a mercados ya consolidados y otros con creciente
							desarrollo de consumo, así como también que
							puedan diversificar la interacción con
							nuevos usuarios finales. 
						</p>
				</div>
				<div class="col-12 col-sm-5">
					<img src="{{ asset('dist/images/pages/about/q1.png') }}" alt="" class="img-fluid">
				</div>
			</div>

			<div class="row row-va">
				<div class="col-12">
					<h3>Lo que nos diferencia.</h3>
					<p>
						Como compañía Local, hemos puesto a disposición de nuestros clientes directos (Operadores Turísticos) un equipo multidisciplinario, que brindará asistencia y acompañamiento en tiempo real para desarrollar sus operaciones diarias de manera conjunta.
					</p>
					<p>
						Conectamos tus ganas de divertirte con planes turísticos en Cartagena y Bolívar, acompañados de de un proceso tecnológico que permite encontrar las experiencias más cercanas a tus gustos para que así disfrutes de forma segura y ágil los lugares más increíbles, las playas mas lindas y relajantes, recorras calles pintorescas, plazas llenas de historia y descubras porque Colombia es la tierra de la sabrosura,
					</p>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection