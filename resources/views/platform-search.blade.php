@extends('layouts.main')

@section('content')

<div class="platform">
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
                        <li class="nav-item">
                            <button class="btn my-2 my-sm-0 text-light btn__redirect btn__sec">
                                    <img src="{{ asset('dist/images/platform/car_icon.png') }}" />
                                    <span class="text__button">
                                        Transfers
                                    </span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="btn my-2 my-sm-0 text-light btn__redirect" >Log In</button>
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
                  <div class="center-align">
                    <h1 class="center-align title-hero">¿Estas listo para la aventura?</h1>
                    <div class="card search__details">
                        <div class="card-body">
                            <form>
                                <div class="row wrapper_form__search">
                                  <div class="col search__details__drop">
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
                                    </div>
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
                                    </div>
                                    <div class="dropdown">
                                       <button id="datepicker" class="btn btn-secondary dropdown-toggle"  />
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
                                    </div>
                                  </div>
                                  <div class="col text-right">
                                    <button class="btn my-2 my-sm-0 text-light search__details_button" ><img src="{{ asset('dist/images/platform/magni_icon.png') }}" /></button>
                                  </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="intro-home box">
                <div class="container">
                    <div class="row row-vh row-title text-center">
                        <div class="col-12 col-md-7">
                            <h2 style="font-size: 36px;">Genial, ahora atrévete!</h2>
                            <h4 style="font-size: 18px;">Encontramos 8 experiencias para ti</h4>
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

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-home box">
                <div class="container">
                    <div class="row row-vh text-center">
                        <div class="col-12 col-md-7">
                            <span style="
                            width: 30px;
                            height: 30px;
                            display: inline-block;
                            background-color: #EB1846;
                            line-height: 2;
                            color: white;
                            font-weight:600;
                            border-radius: 50%;
                        ">1</span>
                            <span style="
                            width: 30px;
                            height: 30px;
                            display: inline-block;
                            background-color: #CCCCCC;
                            line-height: 2;
                            color: white;
                            font-weight:600;
                            border-radius: 50%;
                        ">2</span>
                            <span style="
                            width: 30px;
                            height: 30px;
                            display: inline-block;
                            background-color: #CCCCCC;
                            line-height: 2;
                            color: white;
                            font-weight:600;
                            border-radius: 50%;
                        ">3</span>
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

@endsection