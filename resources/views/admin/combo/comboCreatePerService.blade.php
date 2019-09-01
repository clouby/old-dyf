@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-center p-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              <h1>{{ $service->service_name }}</h1>
              <p>Opción de pago para este servicio</p>
            </div>
            <div class="card-body">
                <form action="{{ route('combo.store') }}" method="post">
                    @csrf

                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <div class="form-group">
                        <label for="name">Descriptivo de opción</label>
                        <input type="text" name="name" id="name" class="form-control col-6">
                    </div>

                    <div class="form-group">
                        <label for="value">Valor de la opción</label>
                        <input type="text" name="value" id="value" class="form-control col-6">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Crear opción</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection