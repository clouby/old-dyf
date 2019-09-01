@extends('layouts.prueba')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Reservación N°-{{ $reservation->id }}</div>
            <div class="card-body">
                Reservación N°-{{ $reservation->id }}
            </div>
        </div>
    </div>
</div>
@endsection