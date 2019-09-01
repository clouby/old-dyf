<?php 
$actual_URL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_host = "//$_SERVER[HTTP_HOST]";

/* Sabina */  
if (strpos($actual_URL, 'sabina') !== false) {
	echo '
	<div style="margin: 0 0 20px;" class="promocionesContainer promoSabina box">
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
			<img style="border-radius: 5px;" class="img-responsive" src="https:'.$url_host.'/storage/promos/banner-promo-sabina-enero-2019.png">
		</div>
		</div>
		</div>
	</div>
	';
}
?>