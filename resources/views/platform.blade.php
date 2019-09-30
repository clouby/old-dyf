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
                                    <button class="btn my-2 my-sm-0 text-light search__details_button" >Log In</button>
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
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
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
                            <h2>Dale una mirada</h2>
                            <h4>Descubrir más</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-home box hidden-box wrapper-details-card">
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
                    <div class="row row-vh row-top text-center">
                        <div class="col-12 col-md-8 center-container">
                            <h2 class="title-section">Experiencias</h2>
                            {{-- <p class="paragraph-hero">Se uno de los primeros que harán parte de la revolución del turismo en la ciudad de Cartagena. Nos gustaría ponernos en contacto contigo y hablarte más sobre nuestra plataforma.</p> --}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="intro-home box hidden-box wrapper-details-card">
                    <div class="container-fluid">
                        <div class="row row-vh text-center">
                            <div class="col-12 col-md-12 ">
                                <div class="alter__card" >
                                    <div class="display__section wrapper__categories">
                                            <div class="card__wrapper categories">
                                                <img src="{{ asset('dist/images/platform/bar_card.png') }}" alt="" class="img-fluid">
                                                <div class="paragraph-card category__details">
                                                        Bar & Restaurantes
                                                </div>
                                            </div>
                                            <div class="card__wrapper categories">
                                                    <img src="{{ asset('dist/images/platform/nauticas_card.png') }}" alt="" class="img-fluid">
                                                    <div class="paragraph-card category__details">
                                                            Experiencias Náuticas
                                                    </div>
                                            </div>
                                            <div class="card__wrapper categories">
                                                    <img src="{{ asset('dist/images/platform/playas_card.png') }}" alt="" class="img-fluid">
                                                    <div class="paragraph-card category__details">
                                                            Islas & Playas
                                                    </div>
                                            </div>
                                            <div class="card__wrapper categories">
                                                    <img src="{{ asset('dist/images/platform/tours_card.png') }}" alt="" class="img-fluid">
                                                    <div class="paragraph-card category__details">
                                                            Tours & Aventuras
                                                    </div>
                                            </div>
                                            <div class="card__wrapper categories">
                                                    <img src="{{ asset('dist/images/platform/transfer_card.png') }}" alt="" class="img-fluid">
                                                    <div class="paragraph-card category__details">
                                                            Transfers
                                                    </div>
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

@endsection
