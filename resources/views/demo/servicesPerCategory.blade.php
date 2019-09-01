@extends('layouts.app')

@section('titulopagina') {{ $category->category }} | Deal your Fun @endsection

@section('claseBody') listado-categoria {{ $category->slug }} reduced-hero @endsection

@section ('herocontent')
<div class="hero-information hero-content">
    <div class="hero-information-viewport">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <h1 class="hero-title">{{ $category->category }}</h1>
                    <a class="btn btn-back-main" href="{{ route('home')  }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')

@if (session('NotAddCart'))
<div class="alert alert-danger">
    {{ session('NotAddCart') }}
</div>
@endif

<div class="experiencias-home experiencias-categoria-feed page-section box">
    <div class="container">

        <div class="row experiencias-categoria-feed-row">
            <div class="col-12 text-center">
                <!-- <h2 class="experiencias-categoria-feed-title">{{ $category->category }}</h2> -->
                
                @if ($services->count()>0)
                <p class="lead">Explora todas las opciones que hemos preparado para ti. </p>
                @else
                <p class="lead">Próximamente estaremos agregando nuevas experiencias.</p>
                <a class="btn btn-back-main" href="{{ route('home') }}">Regresar al Home</a>
                @endif


            </div>
        </div>

        <div class="row">
            @if ($services->count()>0)
            @foreach ($services as $service)

            <div class="col-12 col-sm-6">
                <div class="experiencias-right box">
                    <div class="experiencias-info box">
                        <div class="experiencias-info-container">

                            <div class="box">
                                <div class="experiencias-info-container-title box">
                                    <h3>{{ $service->service_name }}</h3>
                                </div>
                                <div class="experiencias-info-container-datos box">
                                    <p class="experiencias-info-precio"><span>Desde:</span> @money( $service->price_adult ,'COP', true ) @currency('COP') </p>
                                    <div class="experiencias-info-datos-comprar">
                                        <a class="btn experiencias-info-datos-comprar-btn" href="{{ route( 'service.query', $service ) }}">Ver detalles <span class="arrow">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <img src="{{ $service->image }}" alt="">
                    </div>
                </div>
            </div>

            @endforeach

            <div class="d-flex justify-content-center">
                {{ $services->links() }}
            </div>
            @else
            <div class="col-12 text-center">

            </div>
            @endif
        </div>
    </div>
</div>

@endsection
