@extends('layouts.dashboard')

@section('claseBody') is-admin is-services @endsection

@section('content')
<div class="box">

    <h3>Visualizando, {{ $service->service_name }}</h3>
    <table class="table">
        <thead>
            <th>Operador</th>
            <th>Categoría</th>
            <th>Descripción y Contenidos</th>
            <th>Qué esperar</th>
            <th>Información importante</th>
            <th>Información adicional</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $service->operator->operator_name }}</td>
                <td>{{ $service->category->category }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->what_to_expect }}</td>
                <td>{{ $service->important_inf }}</td>
                <td>{{ $service->additional_inf }}</td>
                <td>{{ $service->price }}</td>
            </tr>
        </tbody>
    </table>


    <a class="btn" href="{{ route('myGalery', $service) }}">Mostrar Galería <span class="fa fa-photo"></span></a>
    <a class="btn" href="{{ route('formGalery', $service) }}">Subir imagen a la Galería <span class="fa fa-plus"></span></a>


</div>
@endsection