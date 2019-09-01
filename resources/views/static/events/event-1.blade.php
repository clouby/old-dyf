@extends('layouts.app')

@section('titulopagina') Próximos Eventos @endsection

@section('claseBody') page eventos-main evento-single @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container containermin">
			<div class="row">
				<div class="col-12 col-sm-10">

					<span class="hero-sup-title">Próximo evento.</span>
					<h1 class="hero-title">Bike &amp; Pray Cartagena.</h1>

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
					<h4>Bike &amp; Pray Cartagena.</h4>
					<p>
						Llega a Cartagena la 1ra edición del Bike and Pray. Ven con tu familia y acompáñanos a pedalear y orar por nuestra ciudad y nuestra nación.
					</p>
					<p>
						<strong>¿Cuándo?:</strong>
						Viernes 14 de junio de 2019.<br>
						17:00 – 19:00 hora estándar de Colombia hora de Colombia.
					</p>
					<p>
						<strong>Dónde?:</strong>
						TORRE DEL RELOJ.<br>
						#32-41 Carrera 7.<br>
						Cartagena, Bolivar 130001.
					</p>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection