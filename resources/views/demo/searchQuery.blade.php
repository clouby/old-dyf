@extends('layouts.app')

@section('titulopagina') Resultados de búsqueda para {{ request('q') }} | Deal your Fun @endsection

@section('claseBody') page listado-categoria listado-search reduced-hero @endsection

@section ('herocontent')
<div class="hero-information hero-content">
    <div class="hero-information-viewport">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <h1 class="hero-title">
                        Se han encontrado {{ $searchResults->count() }} resultados para <span class="queryTerm">{{ request('q') }}</span>
                    </h1>
                    <div class="hero-content-search box">
                        <form action="{{ route('search') }}" method="POST">@csrf
                            <input placeholder="Realizar otra búsqueda" required="" type="text" name="q">
                            <input type="submit" value="&#xF002;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-container box">
                    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                    <div class="box search-container-content">
                        <hr>
                        <h4 class="search-container-title">{{ ucfirst($type) }}</h4 class="search-container-title">

                            <ul>
                                @foreach($modelSearchResults as $searchResult)
                                <li class="search-container-card card">
                                    <span class="search-container-card-categoria">{{ ucfirst($type) }}</span>
                                    <h5>{{ $searchResult->title }}</h5>
                                    <a class="btn btn-default" href="{{ $searchResult->url }}">Leer más <span class="arrow">&rarr;</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

