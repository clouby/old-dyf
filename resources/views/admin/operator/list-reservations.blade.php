@extends('layouts.dashboard')

@section('claseBody') is-admin is-operador @endsection

@section('content')



<div class="box">
  @if ( $myReservations->reservations->count() > 0 )
  <table class="table">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Servicio</th>
        <th>Número de Personas</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Hora Seleccionada</th>
        <th>Estado</th>
        <th>Condiciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($myReservations->reservations as $reserva)
      <tr>
        <td>{{ $reserva->user->nickname }}</td>
        <td>{{ $reserva->service->service_name }}</td>
        <td>{{ $reserva->quantity }}</td>
        <td>{{ $reserva->reserv_start}}</td>
        <td>{{ $reserva->reserv_end }}</td>
        <td>{{ $reserva->reserv_hour }}</td>
        <td>{{ $reserva->status }}</td>
        <td>{{ $reserva->conditions }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <div id="message">No tienes ninguna reservación en estos momentos.</div>
  @endif
</div>



@endsection