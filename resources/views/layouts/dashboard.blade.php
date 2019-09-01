<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DealYourFun - Dashboard</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include(app_path().'/Includes/versionado.php'); ?>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
	<link rel="stylesheet" href="{{ asset('dist/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dist/css/style.css') }}<?=$ver;?>">

</head>
<body class="is-dashboard is-operador @yield('claseBody') reduced-hero">

	@include('partials.toolbar')

	<div id="main" class="main-dashboard box">
		@include('partials.aside')

		<section id="main-content" class="box">
			<!-- Contenido dentro de la Dashboard -->
			<!-- <div id="hero" class="hero box"></div> -->


			<div id="main-content-content" class="box">
				<div class="box">
					<div class="box">
						<div class="box">

							<div id="main-content-content-info" class="box">
								@yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	{{-- @include('partials.footer') --}}
	@yield('scripts')

</body>
</html>
