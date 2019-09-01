@extends('layouts.app')

@section('titulopagina') Iniciar Sesión | Deal your Fun @endsection

@section('claseBody') page login @endsection

@section ('herocontent')
<div class="hero-information hero-content">
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



                                        <?php /*
                                        <a href="{{ route('login.socialite', 'facebook') }}" class="btn btn-primary">Facebook</a>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                        */ ?>

                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@section('content')

@endsection
