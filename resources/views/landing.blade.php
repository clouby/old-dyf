@extends('layouts.main')

@section('content')

<div class="header__hero">
    <div class="container center">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#">
            <img class="classic__logo" src="{{ asset('dist/images/DYF_Logo.png') }}" alt="" class="img-fluid"/>
            <img class="resp__logo" src="{{ asset('dist/images/DYF_Logo_min.png') }}" alt="" class="img-fluid"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-light" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Beneficios</a>
            </li>
            <li class="nav-item">
                <button class="btn my-2 my-sm-0 text-light" type="submit">Asociados</button>
            </li>
          </ul>

        </div>
      </nav>
      <h1 class="center-align title-hero">Una nueva forma de disfrutar una Cartagena</h1>
    </div>
</div>

<div class="intro-home box">
	<div class="container">
		<div class="row row-vh row-title text-center">
			<div class="col-12 col-md-8 center-container">
				<h2 class="title-section">Quiénes somos</h2>
				<p class="paragraph-hero">Somos una compañía de soluciones Tecnológicas, cuyo enfoque principal está orientado al sector turismo, en el que a través de nuestra plataforma virtual, intuitiva, moderna, flexible, dinámica y altamente avanzada brindamos a nuestros clientes directos (Operadores turísticos, restaurantes y empresas de transporte) el soporte vital para expandir su negocio a una escala sin precedentes en la ciudad.</p>
			</div>
		</div>
	</div>
</div>

<div class="intro-home box hidden-box wrapper-details-card">
	<div class="container-fluid">
		<div class="row row-vh text-center">
			<div class="col-12 col-md-12 ">
                <h2 class="title-section-second row-title" >Nuestros beneficios</h2>
				<div class="section-cards-section">
                    <svg  class="svg__wrapper" viewBox="0 0 1500 1500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M705.544 236.854C493.369 276.855 315.235 179.574 135.333 213.49C-44.8376 247.458 -272.565 466.284 -229.176 696.429C-205.499 822.015 -72.8349 977.02 113.64 941.864C215.902 922.585 306.927 866.195 410.752 846.621C686.127 794.705 727.532 1088.32 1082.86 1021.33C1290.03 982.269 1687.5 754.997 1606.49 325.27C1545.03 -0.735048 1331.04 -16.5137 1184.25 8.05711C998.696 39.2231 918.58 196.691 705.544 236.854Z" fill="url(#paint0_linear)"/>
                        <defs>
                        <linearGradient id="paint0_linear" x1="2.70001" y1="695.548" x2="1438.43" y2="546.144" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFD200"/>
                        <stop offset="1" stop-color="#EE4E23"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="alter__card" >

                        <div class="display__section">
                            <div class="card__wrapper">
                                <img src="{{ asset('dist/images/pages/card_1.png') }}" alt="" class="img-fluid">
                                <p class="paragraph-card">
                                    Ser miembro de forma gratuita
                                </p>
                                <div class="button__card">ver más</div>
                            </div>
                            <div class="card__wrapper">
                                    <img src="{{ asset('dist/images/pages/card_2.png') }}" alt="" class="img-fluid">
                                    <p class="paragraph-card">
                                        Cuentas con un equipo multidisciplinario a disposición
                                    </p>
                                    <div class="button__card">ver más</div>
                            </div>
                            <div class="card__wrapper">
                                    <img src="{{ asset('dist/images/pages/card_3.png') }}" alt="" class="img-fluid">
                                    <p class="paragraph-card">
                                        Expande tu negocio a todas partes del mundo
                                    </p>
                                    <div class="button__card">ver más</div>
                            </div>

                            <div class="card__wrapper">
                                    <img src="{{ asset('dist/images/pages/card_4.png') }}" alt="" class="img-fluid">
                                    <p class="paragraph-card">
                                        Somos una empresa local
                                    </p>
                                    <div class="button__card">ver más</div>
                                </div>
                            <div class="card__wrapper">
                                <img src="{{ asset('dist/images/pages/card_5.png') }}" alt="" class="img-fluid">
                                <p class="paragraph-card">
                                    Brindamos asistencia en tiempo real para lo que necesites
                                </p>
                                <div class="button__card">ver más</div>

                            </div>
                            <div class="card__wrapper">
                                <img src="{{ asset('dist/images/pages/card_6.png') }}" alt="" class="img-fluid">
                                <p class="paragraph-card">
                                    Puedes diversificar tus ventas
                                </p>
                                <div class="button__card">ver más</div>
                            </div>
                        </div>
                </div>
			</div>
		</div>
	</div>
</div>

<div class="intro-home box">
    <div class="container">
        <div class="row row-vh row-top text-center">
            <div class="col-12 col-md-8 center-container">
                <h2 class="title-section">Forma parte</h2>
                <p class="paragraph-hero">Se uno de los primeros que harán parte de la revolución del turismo en la ciudad de Cartagena. Nos gustaría ponernos en contacto contigo y hablarte más sobre nuestra plataforma.</p>
            </div>
        </div>
    </div>
</div>

<div class="intro-home box">
        <form class="form__contact">
            <div class="container">
                    <div class="row row-vh row-title">
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-12 col-md-6 form__align">
                                    <label for="basic-url" >Empresa</label>
                                    <div class="input-group mb-3">

                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form__align">
                                    <label for="basic-url">Persona a cargo</label>
                                    <div class="input-group mb-3">

                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 form__align">
                                    <label for="basic-url">Teléfono</label>
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form__align">
                                    <label for="basic-url">Correo</label>
                                    <div class="input-group mb-3">

                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 form__align">
                                    <label for="basic-url">Mensaje</label>
                                    <div class="input-group mb-3">
                                    <textarea class="form-control" id="basic-url" aria-describedby="basic-addon3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 form__align">
                                    <button class="btn mx-auto text-light submit" type="submit">enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</div>

<div class="footer-home box">
	<div class="container d-flex align-items-center">
		<div class="row full-width">
			<div class="col-12 col-sm-3 d-flex align-items-center">
				<div class="eventos-blog-home-content box">
					<img src="{{ asset('dist/images/DYF_Logo_alt.png') }}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-12 col-sm-3 d-flex align-items-center">
				<div class="eventos-blog-home-content box">
					<div class="info">
                        <span class="title">Contacto</span>
                        <span class="details">gerencia@dealyourfun.com</span>
                        <span class="details">Cel. 300 861 9081</span>
					</div>

				</div>
            </div>
            <div class="col-12 col-sm-3 d-flex align-items-center">
                    <div class="eventos-blog-home-content box">
                        <div class="info">
                            <span class="title">Ubicación</span>
                            <span class="details">Bocagrande, Cra. 3 # 9-161</span>
                            <span class="details">Cartagena, Colombia</span>
                        </div>
                    </div>
            </div>
            <div class="col-12 col-sm-3 d-flex align-items-start">
                    <div class="eventos-blog-home-content box">
                        <div class="info-social">
                            <span class="title">Siguenos en</span>
                                <div>
                                    <a href="#">
                                            <img src="{{ asset('dist/images/fb_home.png') }}" alt="" class="img-fluid">
                                    </a>
                                    <a href="#">
                                            <img src="{{ asset('dist/images/ig_home.png') }}" alt="" class="img-fluid">
                                    </a>
                                </div>

                        </div>
                    </div>
            </div>
		</div>
	</div>
</div>

@endsection
