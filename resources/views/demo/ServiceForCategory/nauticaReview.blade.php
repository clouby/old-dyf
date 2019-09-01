@extends('layouts.app')

@section('titulopagina') {{ $service->service_name }} | Deal your Fun @endsection

@section('claseBody') service-{{ $service->slug }}  listado-categoria is-servicio-single {{ $service->category->slug }} reduced-hero @endsection

@section ('herocontent')

<?php /* service-id-{{ $service-id }} */ ?>


<style>
    body.is-servicio-single #hero.hero-profile.box {
        background-image: url('{{ route('home') }}{{ $service->principal }}');
    }
</style>


<link rel="stylesheet" href="{{ asset('dist/libs/lightgallery/css/lightgallery.min.css')}}">
<div class="hero-information hero-content">
    <div class="hero-information-viewport">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <h1 class="hero-title">{{ $service->service_name }}</h1>
                    <h4 class="hero-subtitle">
                        {{ $service->category->category }}
                    </h4>

                    <strong>Desde:</strong>
                    <h5 class="hero-price"> @money( $service->price_adult , 'COP', true ) @currency('COP') </h5>


                    <a href="{{ route('home')  }}/categoria/{{ $service->category->slug }}" class="btn btn-back-main">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

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

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-sm-8">
                <div class="info-operador-descripcion-content box">
                    <strong>Descripción</strong>
                    <p>
                        {!! $service->description !!}
                    </p>
                </div>
                <!-- -->
                <div class="info-operador-descripcion info-operador-descripcion-esperar box">
                    <strong>¿Qué esperar?</strong>
                    <p>
                        {!! $service->what_to_expect !!}
                    </p>
                </div>
                <!-- -->
                <div class="info-operador-descripcion info-operador-descripcion-importante box">
                    <strong>Información Importante</strong>
                    <p>
                        {!! $service->important_inf !!}
                    </p>
                </div>
                <!-- -->
                <div class="info-operador-descripcion info-operador-descripcion-importante box">
                    <strong>Información Adicional</strong>
                    <p>
                        {!! $service->additional_inf !!}
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
            </div>
        </div>

        <div id="fotos" class="row">
            <div class="col-12">
                <div class="info-operador-title-section box">
                    <h4 class="">Fotos y Videos</h4>
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

        {{-- <div id="comentarios" class="row">
            <div class="col-12">
                <div class="info-operador-title-section box">
                    <h4 class="">Comentarios</h4>
                    <p class="lead">Este servicio no ha sido comentado por el momento.</p>
                </div>
            </div>
        </div> --}}

    </div>
</div>

@endsection
