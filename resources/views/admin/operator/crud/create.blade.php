@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Operador</div>
                <div class="card-body">
                    <form action="{{ route('operator.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="user_id">Usuario:</label>
                          <select name="user_id" id="user_id" class="form-control">
                                <option value="">-- Seleccione Usuario --</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nickname }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="operator_name">Nombre Operador:</label>
                          <input type="text" name="operator_name" id="operator_name" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="email_corp">Correo Electrónico:</label>
                          <input type="email" name="email_corp" id="email_corp" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="phone_corp">Teléfono Corporativo:</label>
                          <input type="text" name="phone_corp" id="phone_corp" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="address">Dirección:</label>
                          <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="description">Descripción</label>
                          <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection