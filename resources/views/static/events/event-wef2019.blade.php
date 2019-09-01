@extends('layouts.app')

@section('titulopagina') Próximos Eventos @endsection

@section('claseBody') page evento-wef evento-single @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container containermin">
			<div class="row">
				<div class="col-12 col-sm-10">

					<span class="hero-sup-title">Próximo evento.</span>
					<h1 class="hero-title">Women Economic Forum Latinoamerica</h1>

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
						<p>
							Único foro regional enfocado en la economía de la mujer celebrado por primera vez en América latina.  Se celebra anualmente en New Delhi India y con más de 500 capítulos regionales, con la participación de 150 países aliados y una cámara global (ALL LADIES LEAGUE) que cuenta con 50.000 miembros, con el objetivo de perseguir iniciativas para el progreso económico de la mujer.
						</p>
						<p>
							<strong>¿Cuándo?:</strong>
							Agosto 1 al 3 de 2019.<br>
						</p>
						<p>
							<strong>Dónde?:</strong>
							Hotel Hilton Cartagena<br>
						</p>
						<p>
							<strong>Agenda:</strong>
							<img style="margin-top: 10px; box-shadow: 0 10px 40px -5px rgba(0,0,0,.12);" src="https://weflatinoamerica.com/wp-content/uploads/2019/06/AGENDA01.png" alt="" class="img-fluid">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection