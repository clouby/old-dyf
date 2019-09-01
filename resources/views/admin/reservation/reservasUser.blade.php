@extends('layouts.dashboard')

@section('claseBody') is-admin is-user-admin @endsection


@section('content')

<div class="box">
  <h1>Mis reservaciones</h1>
  <a href="{{ URL::previous() }}" class="cancelar-option"><span class="arrow">&larr;</span>Cancelar y Regresar</a>
</div>

<div class="box">

    <table class="table">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Reservado a</th>
                <th>Reserv. Inicio(fecha)</th>
                <th>Reserv. Fin(fecha)</th>
                <th>Reserv. Hora</th>
                <th>Estado</th>
                <th>Condiciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($myReservations as $item)
            <tr>    
                <td>{{ $item->service->service_name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->reserv_start }}</td>
                <td>{{ $item->reserv_end }}</td>
                <td>{{ $item->reserv_hour }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->conditions }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection