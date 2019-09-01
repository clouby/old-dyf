@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear horario para un servicio</div>
                <div class="card-body">
                  <form action="{{ route('availability.store') }}" method="post">
                    @csrf
                    
                    <div class="form-group">
                      <label for="service_id">Servicio</label>
                      <select name="service_id" id="service_id" class="form-control">
                        @foreach ($services as $item)
                          <option value="{{ $item->id }}">{{ $item->service_name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="hour">Hora</label>
                      <input type="time" name="hour" id="hour" class="form-control">
                    </div>

                    <button type="submit" class="btn">Guardar</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection