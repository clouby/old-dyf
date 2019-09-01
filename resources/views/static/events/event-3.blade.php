@extends('layouts.app')

@section('titulopagina') Playa Blanca: Un lugar que no debes dejar de ir. @endsection

@section('claseBody') page cinco-comidas evento-single @endsection

@section ('herocontent')
<div class="hero-information hero-content">
	<div class="hero-information-viewport">

		<div class="container containermin">
			<div class="row">
				<div class="col-12 col-sm-10">

					<span class="hero-sup-title">Recomendados.</span>
					<h1 class="hero-title">5 Comidas que debes probar en Cartagena.</h1>

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

							¿Dulce o salado? en Cartagena eso no es un problema, esta ciudad te brinda la más variada gastronomía tanto informal y callejera como gourmet o especializada, solo debes tener tus sentidos preparados para disfrutar de platos únicos, exquisitos y exóticos, hoy te mostramos los 5 platos que no debes dejar de probar si vienes a Cartagena 
						</p>

						<ul>
							<li>
								<strong>1. Pescado frito.</strong>
								¡El inconfundible!, el que todos quieren , no importa si es mojarra, bocachico , lo importante es que te lo debes comer a pie de playa , disfrutando de un dia de buen sol y mar , este plato se compone de la pesca del día, generalmente es preparada por pescadores y sus familias, con arroz con coco, patacones y una buena ensalada fresca.
							</li>
							<li>
								<strong>2.Postra negra Cartagenera.</strong>
								Uno de los platos mas emblemáticos de la “Heroica”, y es la muestra viva de la multiculturalidad que construyo la base de la sociedad de esta ciudad , Medallones de lomo de res cocinados en fuego lento y cubiertos de una salsa a base de panela , cocacola o cerveza negra , acompañados de arroz con cocó y plátano amarillo confitado en Kola Roman , aquí se le dice "Platano en tentacion"
							</li>
							<li>
								<strong>3. Arepa de huevo </strong>
								¡Su Majestad! La arepa de huevo , es la reina entre las comidas callejeras , hace parte del típico desayuno , es una fritura a base masa de maíz relleno con un huevo frito y carne molida o lo que quieras echar , la encuentras en cualquier esquina de la ciudad y es un sacrilegio si no la acompañas con la Kola Roman que es las mas antigua de las bebidas gaseosas de Colombia y picante.
							</li>
							<li>
								<strong>4. Alegrías </strong>
								En el tradicional portal de los dulces cerca a la torre del reloj, encontraras una típica golosina con base de ajonjolí y coco, este dulce es una de las grandes herencias gastronómicas de la cultura afrodescendiente a Colombia, describir su sabor es imposible, tienes que probarla 
							</li>
							<li>
								<strong>5. Ensalada de frutas</strong> 
								Servido por una amable y colorida palenquera: mujeres oriundas de san basilio de palenque que venden en las calles del centro histórico un mix de frutas como papaya, piña, banano, melón, manzana, mango entre otros, es una opción muy saludable y refrescante para que recorras cada calle y conozcas sus historias.
							</li>
						</ul>
						<p>
							Cada uno de estos platos es una representación de Cartagena , de su gente amable , definitivamente en esta ciudad lo de “barriga llena , corazón contento ” se lo toman muy en serio.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


@endsection