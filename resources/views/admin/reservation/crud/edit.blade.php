@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reservation N°-{{ $reservation->id }} </div>
                <div class="card-body">
                    <form action="{{ route('reservation.update', $reservation) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <button class="btn btn-success" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection