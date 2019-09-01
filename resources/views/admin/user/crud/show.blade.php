@extends('layouts.dashboard')

@section('claseBody') is-admin is-user-admin @endsection


@section('content')

<div class="box">
  <h4>Información General, {{ $user->first_name }} {{ $user->paternal_lastname }}</h4>
  <a href="{{ route('user.index') }}" class="cancelar-option"><span class="arrow">&larr;</span>Cancelar y Regresar</a>
</div>

<div class="box">
    
    <table class="table">
        <tbody>
            
             <tr>
                <td>Primer Nombre:</td>
                <td>{{ $user->first_name }}</td>
            </tr>
             <tr>
                <td>Segundo Nombre:</td>
                <td>{{ $user->second_name }}</td>
            </tr>
             <tr>
                <td>Primer Apellido:</td>
                <td>{{ $user->paternal_lastname }}</td>
            </tr>
             <tr>
                <td>Segundo Apellido:</td>
                <td>{{ $user->maternal_lastname }}</td>
            </tr>
             <tr>
                <td>Tipo de Identificación:</td>
                <td>{{ $user->dni_type }}</td>
            </tr>
             <tr>
                <td>Número de Documento:</td>
                <td>{{ $user->dni_number }}</td>
            </tr>
             <tr>
                <td>Teléfono:</td>
                <td>{{ $user->phone }}</td>
            </tr>
             <tr>
                <td>Email:</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>
                    Imagen de Perfil
                </td>
                <td>
                    <img style="max-width: 400px; height: auto;" class="img-responsive" src="{{ $user->avatar_original }}" alt="{{ $user->nickname }}">
                </td>
            </tr>
            <tr>
                <td>Nickname:</td>
                <td>{{ $user->nickname }}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection