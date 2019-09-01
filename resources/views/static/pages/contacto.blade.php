@extends('layouts.app')

@section('titulopagina') Contáctenos | Deal your Fun @endsection

@section('claseBody') page page-contacto @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">
					<span class="hero-sup-title">Estamos para ti.</span>
					<h1 class="hero-title">¡Charlemos!</h1>
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
				<div class="col-12 col-sm-8">
					<p>
						Aquí estamos listos para atender cualquier asunto que necesites antes, durante y después de tu estadía en la ciudad o experiencia.
					</p>
					<p>
						Puedes comunicarte con nosotros en cualquiera de estos teléfonos:
					</p>
					<ul class="list-unstyled page-contacto-telefonos">
						<li>
							+57 300 861 9081
						</li>
						<li>
							+57 301 558 3965
						</li>
					</ul>
				</div>
				<div class="col-12 col-sm-4">
					<p>
						Así mismo puedes comunicarte vía Email a los siguientes departamentos:
					</p>
					<ul class="list-unstyled page-contacto-correos">
						<li>
							Comercial <a target="_blank" href="mailto:comercial@dealyourfun.com">comercial@dealyourfun.com</a>
						</li>
						<li>
							Administración <a target="_blank" href="mailto:gerencia@dealyourfun.com">gerencia@dealyourfun.com</a>
						</li>
						<li>
							Soporte técnico <a target="_blank" href="mailto:it@dealyourfun.com">it@dealyourfun.com</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>



@endsection