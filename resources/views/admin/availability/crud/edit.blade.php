@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $availability->service->service_name }}</h1>
                </div>
                <div class="card-body">
                  <form action="{{ route('availability.update', $availability) }}" method="post">
                    @csrf
                    @method('PUT')
                    
                    <input type="hidden" name="service_id" value="{{ $availability->service_id }}">

                    <div class="form-group">
                      <label for="hour">Hora</label>
                      <input type="time" name="hour" id="hour" value="{{ $availability->hour }}" class="form-control">
                    </div>

                    <button type="submit" class="btn">Actualizar</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection