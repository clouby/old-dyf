<?php 
$actual_URL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/* Promoción para el restaurante HABIBIS */ 
if (strpos($actual_URL, 'habibis') !== false) {
	echo '

	<div class="promocionesContainer box">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="hgroup">
						<h3>Menus para eventos especiales</h3>
						<p class="">
							Te ofrecemos estos completos menús para celebrar y disfrutar de tus eventos especiales en 
							Habibis\'s Grill, válido sólo para eventos y celebraciones de 15 personas en adelante.
						</p>
					</div>
				</div>
			</div>
			<div class="row row-separatorBlock">
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 1</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: Media pechuga a la plancha o medio lomo fino, ensalada fattouch, y puré de papa gratinado.</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$35.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 2</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: MINI MIXTO o MIXTO VEGETARIANO (plato árabe que lleva ensalada tabboule, unidad de quibbe frito, repollitos, hojas de parra, arroz de almendras y kafta)</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$36.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 3</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: ½ PECHUGA DE POLLO GRATINADA, ensalada fattouch  y arroz de almendra.</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$35.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 4</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: ½ PUNTA GORDA  O MEDIO POLLO AL CARBON, ensalada, yuca y papa al vapor</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$36.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 5</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: ½ ARROZ CON POLLO O CAMARONES con papas francesa y ensalada de la casa</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$32.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 6</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: ½ COSTILLA croquetas de yuca frita y ensalada fattouch</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$36.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 7</h4>
						<ul class="list-unstyled">
							<li>Cóctel de Bienvenida</li>
							<li>Entradas: Garbanzo con tahine o arish con verdura (acompañados con pan árabe)</li>
							<li>Plato Fuerte: PARRILLADA MIXTA (Pechuga, costilla, punta gorda) con yuca, papa al vapor y ensalada</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$46.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 8</h4>
						<ul class="list-unstyled">
							<li>Mixto Vegetariano</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$27.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 9</h4>
						<ul class="list-unstyled">
							<li>Mixto Árabe</li>
							<li>Vaso de Gaseosa</li>
							<li>Postre Árabe</li>
						</ul>
						<div class="precio box">
							<p>$29.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 10</h4>
						<ul class="list-unstyled">
							<li>Medio Pollo</li>
							<li>Vaso de Gaseosa</li>
						</ul>
						<div class="precio box">
							<p>$18.000</p>
						</div>
					</div>
				</div>
				<div class="promocionBlock col-xs-12 col-sm-6 col-md-4">
					<div class="inner box">
						<h4>Menú 11</h4>
						<ul class="list-unstyled">
							<li>Sándwich (falafel, shawarma, kabab o kafta) con papas fritas</li>
							<li>Vaso de Gaseosa</li>
						</ul>
						<div class="precio box">
							<p>$15.000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	';
}

?>











