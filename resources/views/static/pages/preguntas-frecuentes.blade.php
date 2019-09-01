@extends('layouts.app')

@section('titulopagina') Preguntas Frecuentes | Deal your Fun @endsection

@section('claseBody') page faqs @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8">

					<span class="hero-sup-title">¿Ayuda? aquí tienes nuestras</span>
					<h1 class="hero-title">Preguntas Frecuentes.</h1>

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
				<div class="col-12">


					<div class="accordion box" id="faqs">
						<div class="card box">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										¿Puedo cancelar mis experiencias?
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse box show" aria-labelledby="headingOne" data-parent="#faqs">
								<div class="card-body">
									Sí, siempre y cuando lo hagas en un periodo no mayor a 48 horas después de hecha tu compra, de igual forma te invitamos a leer nuestras políticas de uso <a href="{{ route('terminos-condiciones') }}">(click aquí)</a>
								</div>
							</div>
						</div>
						<div class="card box">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										¿Una vez pagadas mis experiencias, como puedo saber que está reservada?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse box" aria-labelledby="headingTwo" data-parent="#faqs">
								<div class="card-body">
									Te llegará un correo electrónico a la dirección con la que te registraste, que incluye la confirmación de tu compra, datos de contacto del operador e información relevante sobre la experiencia que escogiste, además, si reservaste tu experiencia para mucho tiempo después te enviaremos periódicamente recordatorios para que no olvides que la diversión está por llegar.
								</div>
							</div>
						</div>
						<div class="card box">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										¿Puedo ponerme en contacto con el operador de la experiencia que compré?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse box" aria-labelledby="headingThree" data-parent="#faqs">
								<div class="card-body">
									Por supuesto, una vez hagas la compra, en el correo de confirmación tendrás la información de contacto del operador, así podrás comunicarte con él para cualquier novedad.
								</div>
							</div>
						</div>


						<div class="card box">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										¿Una vez hecha la compra, puedo modificar la fecha en la que quiero realizar mi experiencia?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse box" aria-labelledby="headingFour" data-parent="#faqs">
								<div class="card-body">
									¡Claro que si!, Sólo debes tener en cuenta que esta fecha no puede ser superior a un año.
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