
<footer id="footer-page" class="box">
	<div class="container">
		<div class="row">

			<div class="col-12">
				<div class="row">
					<div class="col-12 col-sm-2">
						<img src="{{ asset('dist/images/DYF_Icon.svg') }}" alt="" class="footer-logo img-fluid">
					</div>
					<div class="footer-page-links col-12 col-sm-10">
						<div class="row">
							<div class="footer-col col-12 col-sm-3">
								<div class="footer-links box">
									<ul class="list-unstyled">
										<li><a href="{{ route('home') }}">Home</a></li>
										<li><a href="{{ route('acerca-dyf') }}">Deal your Fun</a></li>
										<!-- <li><a target="_blank" href="http://blog.dealyourfun.com?src=dyf">Blog</a></li> -->
										<!-- <li><a target="_blank" href="http://blog.dealyourfun.com/eventos/?src=dyf">Próximos Eventos</a></li> -->
										@auth
											@role('superadmin')
												<li><a href="{{ route('admin') }}">Dashboard</a></li>
											@endrole
											@role('finanzas')
												<li><a href="{{ route('finanzas') }}">Dashboard</a></li>
											@endrole
											@role('moderador')
												<li><a href="{{ route('moderador') }}">Dashboard</a></li>
											@endrole
											@role('operador')
												<li><a href="{{ route('operador') }}">Dashboard</a></li>
											@endrole
											@role('cliente')
												<li><a href="{{ route('cliente') }}">Dashboard</a></li>
											@endrole
											<li><a href="{{ route('salir') }}">Cerrar sesión</a></li>
										@else
										<li><a href="{{ route('login') }}">Iniciar sesión</a></li>
										@endauth
									</ul>
								</div>
							</div>
							<div class="footer-col col-12 col-sm-3">
								<div class="footer-links box">
									<h5>Ayuda.</h5>
									<ul class="list-unstyled">
										<li><a href="{{ route('preguntas-frecuentes') }}">Preguntas frecuentes</a></li>
										<li><a href="{{ route('contacto') }}">Contacto</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-col col-12 col-sm-3">
								<div class="footer-links box">
									<h5>Información</h5>
									<ul class="list-unstyled">
										<li><a href="{{ route('politicas-privacidad') }}">Políticas de privacidad</a></li>
										<li><a href="{{ route('terminos-condiciones') }}">Términos y condiciones</a></li>
									</ul>
								</div>
							</div>
							<div class="footer-col col-12 col-sm-3">
								<div class="footer-links footer-socialmedia box">
									<h5>Síguenos.</h5>
									<ul class="list-unstyled">
										<li>
											<a target="_blank" href="https://www.facebook.com/Dealyourfun/"><span class="fa fa-facebook"></span></a>
										</li>
										<li>
											<a target="_blank" href="https://www.instagram.com/dealyourfun/"><span class="fa fa-instagram"></span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-12 text-center">
				<p class="small copy-text">
					&copy; 2019. Todos los derechos reservados. Travelly S.A.S. <br>Transformamos la forma como se hace el turismo en Colombia.
				</p>
			</div>
		</div>
	</div>
</footer>

<?php include(app_path().'/Includes/versionado.php'); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
-->

<script src="{{ asset('dist/libs/bootstrap-datepicker-1.6.1-dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('dist/libs/bootstrap-datepicker-1.6.1-dist/locales/bootstrap-datepicker.es.min.js') }}"></script>

<script src="{{ asset('dist/js/app.js') }}<?=$ver;?>"></script>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('dist/libs/lightgallery/js/lightgallery.min.js')}}"></script>
<script src="{{ asset('dist/libs/lightgallery/js/lg-thumbnail.min.js')}}"></script>
<script src="{{ asset('dist/libs/lightgallery/js/lg-fullscreen.min.js')}}"></script>

<script>
	(function($) {

		/* DataTables */
		$('table#users').DataTable();
		$('table#operadores').DataTable();
		$('table#servicios').DataTable();

		$('#selector-ciudad,#selector-ciudad-nav').on('change', function() {
			var ciudad = $(this).val();
			switch (ciudad) {

				case "cartagena":
				window.location.href = "{{ route('home') }}";

				break;

				case "turbaco":
				window.location.href = "{{ route('home') }}/turbaco";
				break;

				case "mompox":
				window.location.href = "{{ route('home') }}/mompox";
				break;

				case "elcarmen":
				window.location.href = "{{ route('home') }}/elcarmen";
				break;

				case "sanjacinto":
				window.location.href = "{{ route('home') }}/sanjacinto";
				break;

				case "palenque":
				window.location.href = "{{ route('home') }}/palenque";

				break;
			}
		});


		var ciudad = location.pathname.split('/')[1];


		if(document.getElementById(ciudad)){
			document.getElementById(ciudad).selected="selected";
		}

		$('#lightgallery').lightGallery({
			thumbnail:true,
			animateThumb: true,
			showThumbByDefault: false
		});

		$('#reserv_start').datepicker({
			format: 'yyyy-mm-dd',
			disableTouchKeyboard: true,
			language: 'es',
			autoclose: true,
			todayHighlight: true,
			startDate: "setStartDate(date)"
		});


	})(jQuery);
</script>
