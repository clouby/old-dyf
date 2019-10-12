@extends('layouts.main')

@section('titulopagina') Iniciar Sesión | Deal your Fun @endsection

@section('claseBody') page login @endsection

@section ('herocontent')
{{-- <div class="hero-information hero-content">
    <div class="hero-information-viewport">

        <div class="container">
            <div class="row row-va">
                <div class="col-12 col-sm-7 login-title">

                    <span class="hero-sup-title">Tu punto de partida.</span>
                    <h1 class="hero-title">Iniciar Sesión</h1>

                </div>
                <div class="col-12 col-sm-5">
                    <div class="card login-card box">
                        <div class="box">
                            <form method="POST" class="login-form box" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-12 col-form-label">{{ __('Correo electrónico') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-12 col-form-label">{{ __('Contraseña') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordar sesión') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-12">

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn-recover-password" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidó su contraseña?') }}
                                        </a>
                                        @endif



                                       /*
                                        <a href="{{ route('login.socialite', 'facebook') }}" class="btn btn-primary">Facebook</a>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        */


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> --}}

@endsection

@section('content')
<div class="platform login">
    <div class="header__hero" style="background-image: url('{{ asset('dist/images/platform/login_background.png') }}');">
        <div class="container center login">
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
                            <button class="btn my-2 my-sm-0 text-light btn__redirect" data-toggle="modal" data-target="#exampleModalCenter">Log In</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            </div>
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
                <h1 class="center-align title-hero">¡Bienvenido!</h1>
                <h2 class="center-align title-hero" style="font-size: 48px; font-weight:500;">¿Estas listo para la aventura?</h2>
                <div class="card search__details __form">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row wrapper_form__search">
                                <div class="col-12 search__details__drop">
                                    <div class="input-group email-context">
                                        <input type="text" class="form-control icon @error('email')is-invalid @enderror" autocomplete="email" value="{{ old('email') }}" placeholder="Email" name="email" required/>
                                    </div>

                                </div>
                                <div class="col-12 seatch__details__drop">
                                    <div class="input-group lock-context">
                                        <input type="password" class="form-control icon @error('password')is-invalid @enderror" autocomplete="current-password" placeholder="Password" name="password" />
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-lg-6 col-sm-12">
                                    <button class="btn my-2 my-sm-0 text-light btn__cursor" type="submit">INICIAR SESIÓN</button>
                                </div>
                                <div class="col-lg-6 col-sm-12" style="display: flex; align-items:center; justify-content:center; font-size: 18px; color: #585858; margin-top: 20px;">
                                    <span class="align-middle">
                                        ¿Olvidaste tu contraseña?
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col">
                                    <a class="btn my-2 my-sm-0 text-light facebook" href="{{ route('login.socialite', 'facebook') }}">
                                            Continuar con Facebook
                                    </a>
                                </div>
                                <div class="col" >
                                    <a class="btn my-2 my-sm-0 text-light google"  href="{{ route('login.socialite', 'google') }}">
                                            Continuar con Google
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col">
                                    <span>
                                        ¿No tienes cuenta? Registrarse
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
