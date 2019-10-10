@extends('layouts.main')

@section('content')
    <div class="platform">
        <div class="header__hero">
            <div class="container center">
                @auth
                {{-- login --}}
                <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                        <a class="navbar-brand" href="#">
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
                                <a class="nav-link" href="/carrito">
                                    <img src="{{ asset('dist/images/platform/shop_icon.png') }}" class="img-fluid" >
                                </a>
                            </li>
                            <li class="nav-item">
                                <button class="btn my-2 my-sm-0 text-light btn__sec">
                                        <img src="{{ asset('dist/images/platform/car_icon.png') }}" />
                                        <span class="text__button">
                                            Transfers
                                        </span>
                                </button>
                            </li>
                            <li class="nav-item" style="padding: 20px;">
                                <span class="navbar-toggler-icon"></span>
                            </li>
                            </ul>

                        </div>
                        </nav>
                @endauth

                @guest
                    {{-- guest --}}
                <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                        <a class="navbar-brand" href="#">
                            <img class="classic__logo" src="{{ asset('dist/images/DYF_Logo.png') }}" alt="" class="img-fluid" />
                            <img class="resp__logo" src="{{ asset('dist/images/DYF_Logo_min.png') }}" alt="" class="img-fluid" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <button class="btn my-2 my-sm-0 text-light btn__redirect btn__sec">
                                        <img src="{{ asset('dist/images/platform/car_icon.png') }}" />
                                        <span class="text__button">
                                            Transfers
                                        </span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <a class="btn my-2 my-sm-0 text-light btn__redirect" style="background-color: #00bcd5;" href="/login">Log In</a>
                                    {{-- <a class="btn my-2 my-sm-0 text-light btn__redirect" data-toggle="modal" data-target="#exampleModalCenter">Log In</a> --}}
                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border-bottom: none;">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                    <button type="button" style="background-color: white;" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"> <img src="{{ asset('dist/images/platform/mark.png') }}" /></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="text-align: center;">
                                                    <img src="{{ asset('dist/images/platform/login.png') }}" style="cursor: pointer;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li class="nav-item">
                                    <button class="btn my-2 my-sm-0 text-light btn__cursor" type="submit">ES</button>
                                </li>
                                <li class="nav-item">
                                    <span class="navbar-toggler-icon"></span>
                                </li>
                            </ul>

                        </div>
                    </nav>
                @endguest

                <div class="center-align">
                    <h1 class="center-align title-hero">¿Estas listo para la aventura?</h1>
                    <div class="card search__details">
                        <div class="card-body">
                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="row wrapper_form__search">
                                    <div class="col search__details__drop">
                                        <div class="input-group">
                                            <input type="text" class="form-control" autocomplete="off" placeholder="Playa, Tours, Aventuras..." name="q" />
                                        </div>
                                        {{--
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('dist/images/platform/stars_icon.png') }}" />
                                                <span class="text__button">
                                                    Experiencias
                                                </span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div> --}} {{--
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('dist/images/platform/user_icon.png') }}" />
                                            <span class="text__button">
                                                Personas
                                            </span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> --}} {{--
                                    <div class="dropdown">
                                        <button id="datepicker" class="btn btn-secondary dropdown-toggle" />
                                        <img src="{{ asset('dist/images/platform/calendar_icon.png') }}" />
                                        <span class="text__button">
                                                Fecha
                                            </span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> --}}
                                    </div>
                                    <div class="col text-right" style="flex-grow: 0;">
                                        <button class="btn my-2 my-sm-0 text-light search__details_button"><img src="{{ asset('dist/images/platform/magni_icon.png') }}" /></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-home box">
            <div class="container wrapper__carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('dist/images/platform/carousel.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dist/images/platform/carousel.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dist/images/platform/carousel.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="intro-home box">
            <div class="container">
                <div class="row row-vh row-title text-center">
                    <div class="col-12 col-md-7">
                        <h2 style="font-size: 36px;">Dale una mirada</h2>
                        <h4 style="font-size: 18px;">Descubrir más</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-home box hidden-box wrapper-details-card alt">
            <div class="container-fluid">
                <div class="row row-vh text-center">
                    <div class="col-12 col-md-12 ">
                        <div class="alter__card">
                            <div class="display__section">
                                @foreach($latestServices as $service)
                                    <a href="{{ " /servicio/{$service->slug}" }}">
                                        <div class="card__wrapper offert">
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
                        <h2 class="title-section" style="font-size: 36px;">Experiencias</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-home box hidden-box wrapper-details-card alt">
            <div class="container-fluid">
                <div class="row row-vh text-center">
                    <div class="col-12 col-md-12 ">
                        <div class="alter__card">
                            <div class="display__section wrapper__categories">
                                @foreach ($categories as $category)
                                    <a href="/categoria/{{ $category->slug }}">
                                        <div class="card__wrapper categories">
                                            <img src="{{ $category->image }}" alt="" class="img-fluid">
                                            <div class="paragraph-card category__details">
                                                {{ $category->category }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-home box">
            <div class="container">
                <div class="row row-vh row-title text-center">
                    <div class="col-12 col-md-7">
                        <h2 style="font-size: 36px;">Dale una mirada</h2>
                        <h4 style="font-size: 18px;">Descubrir más</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-home box hidden-box wrapper-details-card alt">
            <div class="container-fluid">
                <div class="row row-vh text-center">
                    <div class="col-12 col-md-12 ">
                        <div class="alter__card">
                            <div class="display__section wrapper__categories">
                                <div class="card__wrapper categories blog__events">
                                    <img src="{{ asset('dist/images/platform/blog.png') }}" alt="" class="img-fluid">
                                    <div class="paragraph-card category__details" style="color: #241f59; font-size: 36px; font-weight: 600;">
                                        Blog
                                        <a class="btn btn-rojo" style="margin-top: 25px;" href="http://blog.dealyourfun.com?src=dyf">Leer más <span class="arrow">&rarr;</span></a>
                                    </div>
                                </div>
                                <div class="card__wrapper categories blog__events">
                                    <img src="{{ asset('dist/images/platform/events.png') }}" alt="" class="img-fluid">
                                    <div class="paragraph-card category__details" style="font-size: 36px; font-weight: 600;">
                                        Eventos
                                        <a class="btn btn-rojo" style="margin-top: 25px;" href="http://blog.dealyourfun.com?src=dyf">Leer más <span class="arrow">&rarr;</span></a>
                                    </div>
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
        </div>
    </div>
@endsection
