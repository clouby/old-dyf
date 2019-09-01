@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-center p-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
              <h1>{{ $combo->service->service_name }}</h1>
              <p>Opción de pago para este servicio</p>
            </div>
            <div class="card-body">
                <form action="{{ route('combo.update', $combo) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Descriptivo de opción</label>
                        <input type="text" name="name" id="name" value="{{ $combo->name }}" class="form-control col-6">
                    </div>

                    <div class="form-group">
                        <label for="value">Valor de la opción</label>
                        <input type="text" name="value" id="value" value="{{ $combo->value }}" class="form-control col-6">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Actualizar opción</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection