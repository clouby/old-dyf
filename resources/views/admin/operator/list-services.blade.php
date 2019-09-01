@extends('layouts.dashboard')

@section('claseBody') is-admin is-operador @endsection

@section('content')



<div class="box">
  @if ( $myServices->count() > 0 )
  <a href="{{ route('crearServicio') }}">Crear un servicio</a>
  <table class="table">
    <thead>
      <tr>
        <th>Categoría</th>
        <th>Servicio</th>
        <th>Precio</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($myServices as $service)
      <tr>
        <td>{{ $service->category->category }}</td>
        <td>{{ $service->service_name }}</td>
        <td>
          
        </td>
        <td>
          @if ($service->active)
          <span class="badge badge-success">Activado</span>
          @else
          <span class="badge badge-danger">Desactivado</span>
          @endif
        </td>
        <td>
          <a class="btn" href="{{ route('operador.servicio', $service) }}">Ver Servicio <span class="arrow">&rarr;</span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div id="message">No tienes ninguna servicios en estos momentos.</div>
  <a href="{{ route('crearServicio') }}">Crear un servicio</a>
  @endif


  @endsection