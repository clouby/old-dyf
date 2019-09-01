@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-center p-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Opción de combo para un servicio especifico</div>
            <div class="card-body">
                <form action="{{ route('combo.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="service">Descriptivo de opción</label>
                        <select name="service_id" id="service_id" class="form-control col-6">
                          @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                          @endforeach
                        </select>
                    </div>

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