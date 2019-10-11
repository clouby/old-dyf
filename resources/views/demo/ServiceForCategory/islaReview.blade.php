@extends('layouts.main')

@section('titulopagina') {{ $service->service_name }} | Deal your Fun @endsection

@section('claseBody') service-{{ $service->slug }}  listado-categoria is-servicio-single {{ $service->category->slug }} reduced-hero @endsection

@section('content')
<div class="header__hero" style="background-image: url('{{ route('home') }}{{ $service->principal }}');">
    <div class="container center">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="classic__logo" src="{{ asset('dist/images/DYF_Logo.png') }}" alt="" class="img-fluid"/>
            <img class="resp__logo" src="{{ asset('dist/images/DYF_Logo_min.png') }}" alt="" class="img-fluid"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav reduce">
            <li class="nav-item active">
                <a class="nav-link text-light" href="#"><img src="{{ asset('dist/images/platform/user_avatar_icon.png') }}" class="img-fluid" style="border-radius: 50px;"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle hero__drop" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Cartagena
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                  <span class="dropdown-item">Cartagena</span>
                                  <span class="dropdown-item" >Turbaco</span>
                                  <span class="dropdown-item" >Mompox</span>
                                  <span class="dropdown-item" >Palenque</span>
                                  <span class="dropdown-item" >San Jacinto</span>
                                </div>
                        </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('dist/images/platform/shop_icon.png') }}" class="img-fluid" >
                </a>
            </li>
            <li class="nav-item">
                <button class="btn my-2 my-sm-0 text-light btn__redirect btn__sec">
                        <img src="{{ asset('dist/images/platform/car_icon.png') }}" />
                        <span class="text__button">
                            Transfers
                        </span>
                </button>
            </li>
            <li class="nav-item">
                <span class="navbar-toggler-icon"></span>
            </li>
            </ul>

        </div>
        </nav>
        {{-- <h1 class="center-align title-hero">Una nueva forma de disfrutar una Cartagena</h1> --}}
    </div>
</div>

<div class="is-mobile info-operador page-section box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hero-title">{{ $service->service_name }}</h1>
                <h4 class="hero-subtitle">{{ $service->category->category }}</h4>

                <strong>Desde:</strong>
                <h5>{{ $service->price_adult }}</h5>

            </div>
        </div>
    </div>
</div>

<div class="info-operador-descripcion box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="info-operador-precio box">
                    <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                    <h1 class="preview-title">{{ $service->service_name }}</h1>
                    <h4 class="preview-subtitle">{{ $service->category->category }}</h4>
                    <div class="preview-price">
                            <strong>Desde:</strong>
                            <h5 class="price"> @money( $service->price_adult , 'COP', true ) @currency('COP') </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-sm-8">
                <div class="info-operador-descripcion-content box ">
                    <p class="baseline__details">
                        <img src="{{ asset('dist/images/platform/time_icon.png') }}" class="img-fluid">
                        <span class="text-description" style="font-size: 18px;">Duración de X horas.</span>
                    </p>
                    <p class="baseline__details">
                            <img src="{{ asset('dist/images/platform/credit_card_icon.png') }}" class="img-fluid">
                            <span class="text-description alt" style="font-size: 18px;">Tienes hasta 48 horas de antelación para cancelar tu experiencia.</span>
                    </p>
                </div>
                <div class="info-operador-descripcion-content box">
                    <strong>Qué harás</strong>
                    <p>
                        {!! $service->description !!}
                    </p>
                </div>
                <!-- -->
                {{-- <div class="info-operador-descripcion info-operador-descripcion-esperar box">
                    <strong>¿Qué esperar?</strong>
                    <p>
                        {!! $service->what_to_expect !!}
                    </p>
                </div> --}}
                <!-- -->
                <div class="info-operador-descripcion info-operador-descripcion-importante box">
                    <strong>Qué incluye</strong>
                    <p>
                        <ul class="line">
                            <li>
                                <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_green.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_red.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                            <li>
                                    <img src="{{ asset('dist/images/platform/check_red.png') }}" class="img-fluid">
                                    <span>Cóctel de bienvenida.</span>
                            </li>
                        </ul>
                    </p>
                </div>
                <!-- -->
                <div class="info-operador-descripcion info-operador-descripcion-importante box">
                    <strong>Información Adicional</strong>
                    <p>
                        {!! $service->additional_inf !!}
                    </p>
                </div>
                <div class="info-operador-descripcion info-operador-descripcion-importante box">
                        <strong>Recomendaciones</strong>
                        <p>
                            <ul class="line">
                                <li>
                                    <img src="{{ asset('dist/images/platform/warning_icon.png') }}" class="img-fluid">
                                    <span>Estar presentes 30 minutos antes del embarque.</span>
                                </li>
                                <li>
                                    <img src="{{ asset('dist/images/platform/warning_icon.png') }}" class="img-fluid">
                                    <span>Llevar documentos de identidad o pasaportes.</span>
                                </li>
                            </ul>
                        </p>
                    </div>

            </div>
            <div class="col-12 col-sm-4">
                <div class="info-operador-booking card box">
                    <h3>{{ $service->service_name }}</h3>
                    <h6>Reserva tu Experiencia</h6>
                    @if (Session::has('errors'))
                        <div class="alert alert-danger">{{ Session::get('errors') }}</div>
                    @endif
                    @include('partials.switchFormPerCategory')
                </div>
                <div class="card box alt" style="margin-top: 20px;">
                        <img src="{{ asset('dist/images/platform/map.png') }}" class="img-fluid">
                        <div style="padding: 30px;">
                                <h3>Punto de embarque</h3>
                                <h6 style="color: #333333; margin-bottom: 30px;">Muelle de los Pegasos / La Bodequita</h6>
                                <button  class="btn btn-info-operador-booking mx-auto">ABRIR GOOGLE MAPS</button>
                        </div>

                </div>
            </div>
        </div>

        <div id="fotos" class="row">
            <div class="col-12">
                <div class="info-operador-title-section box">
                    {{-- <h4 class="">Fotos y Videos</h4> --}}
                </div>

                <div id="lightgallery">
                    @foreach ($service->images as $image)
                    <a href="{{ $image->url }}">
                        <figure class="zoom-img" alt="Zoom"></figure>
                        <img alt="{{ $service->service_name }}" src="{{ $image->url }}" />
                    </a>
                    @endforeach
                </div>

            </div>
        </div>

        {{-- <div id="experiencias" class="row">
            <div class="col-12">
                <div class="info-operador-title-section box">
                    <h4 class="">También te puede interesar</h4>
                </div>
            </div>
        </div> --}}

        <div class="info-operador-descripcion-content box">
                <strong>Reseñas</strong>
                <p>
                    Las reseñas solo pueden ser realizadas por personas que han vivido la experiencia.
                </p>
        </div>

        <div id="comentarios" class="row comments">
            <div class="col-12 wrapper__comment">
                <div class="info-operador-title-section box">
                    <div class="row">
                        <div class="avatar col-2">
                                <img src="{{ asset('dist/images/platform/user_avatar_icon.png') }}" class="img-fluid" style="border-radius: 50px;">
                                <strong>Jhon Doe</strong>
                                <p>New York</p>
                        </div>
                        <div class="comment col-10">
                                <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                <strong>
                                    Puntualidad 5 | Atención 5 | Satisfacción 5
                                </strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 wrapper__comment">
                    <div class="info-operador-title-section box">
                        <div class="row">
                            <div class="avatar col-2">
                                    <img src="{{ asset('dist/images/platform/user_avatar_icon.png') }}" class="img-fluid" style="border-radius: 50px;">
                                    <strong>Jhon Doe</strong>
                                    <p>New York</p>
                            </div>
                            <div class="comment col-10">
                                    <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                    <strong>
                                        Puntualidad 5 | Atención 5 | Satisfacción 5
                                    </strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="btn my-2 my-sm-0 text-light btn__redirect mx-auto" style="margin-top: 15px;">
                        {{-- <img src="{{ asset('dist/images/platform/car_icon.png') }}" /> --}}
                        <span class="text__button" style="letter-spacing: 3px;">
                            CARGAR MÁS
                        </span>
                </button>
        </div>

        <div class="intro-home box">
                <div class="container">
                    <div class="row row-vh row-title text-center">
                        <div class="col-12 col-md-7">
                            <h2 style="font-size: 36px;">Más experiencias</h2>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

<div class="intro-home box hidden-box wrapper-details-card alt">
        <div class="container-fluid">
            <div class="row row-vh text-center">
                <div class="col-12 col-md-12 ">
                    <div class="alter__card" >
                            <div class="display__section">
                                @foreach($anotherServices as $service)
                                    <a href="{{ " /servicio/{$service->slug}" }}">
                                        <div class="card__wrapper offert" style="overflow: hidden; height: 313px;">
                                            <img src="{{ $service->image }}" alt="" class="img-fluid">
                                            <div class="paragraph-card offert__details">
                                                <div class="head__offert">
                                                    <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                                    <span>{{ $service->service_name }}</span>
                                                </div>
                                                <div class="foot__offert">
                                                    <span>Desde</span>
                                                    <span>@money( $service->price_adult , 'COP', true ) @currency('COP')</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                {{-- <div class="card__wrapper offert">
                                    <img src="{{ asset('dist/images/platform/card_image.png') }}" alt="" class="img-fluid">
                                    <div class="paragraph-card offert__details">
                                       <div class="head__offert">
                                            <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                            <span>Tour Islas del Rosario</span>
                                       </div>
                                       <div class="foot__offert">
                                            <span>Desde</span>
                                            <span>$ 00.000 COP</span>
                                       </div>
                                    </div>

                                </div>
                                <div class="card__wrapper offert">
                                        <img src="{{ asset('dist/images/platform/card_image.png') }}" alt="" class="img-fluid">
                                        <div class="paragraph-card offert__details">
                                           <div class="head__offert">
                                                <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                                <span>Tour Islas del Rosario</span>
                                           </div>
                                           <div class="foot__offert">
                                                <span>Desde</span>
                                                <span>$ 00.000 COP</span>
                                           </div>
                                        </div>

                                </div>
                                <div class="card__wrapper offert">
                                        <img src="{{ asset('dist/images/platform/card_image.png') }}" alt="" class="img-fluid">
                                        <div class="paragraph-card offert__details">
                                            <div class="head__offert">
                                                <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                                <span>Tour Islas del Rosario</span>
                                            </div>
                                            <div class="foot__offert">
                                                <span>Desde</span>
                                                <span>$ 00.000 COP</span>
                                            </div>
                                        </div>

                                </div>
                                <div class="card__wrapper offert">
                                        <img src="{{ asset('dist/images/platform/card_image.png') }}" alt="" class="img-fluid">
                                        <div class="paragraph-card offert__details">
                                           <div class="head__offert">
                                                <img src="{{ asset('dist/images/platform/star__offert.png') }}" class="img-fluid">
                                                <span>Tour Islas del Rosario</span>
                                           </div>
                                           <div class="foot__offert">
                                                <span>Desde</span>
                                                <span>$ 00.000 COP</span>
                                           </div>
                                        </div>

                                </div> --}}
                            </div>
                    </div>
                </div>
            </div>
        </div>
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
