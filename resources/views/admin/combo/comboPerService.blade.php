@extends('layouts.dashboard')

@section('claseBody') is-admin is-category @endsection

@section('content')
@if ( $service->combos->count() > 0 )
    @if ( Session::has('success') )
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @elseif ( Session::has('errors') )
    <div class="alert alert-warning" role="alert">
        {{Session::get('errors')}}
    </div>
    @endif

<div>
  <h1>{{ $service->service_name }}</h1>
  <p>Opciones de paso de este servicio</p>
</div>

<div class="create-category-options box">
    <a class="btn btn-default" href="{{ route('comboCreatePerService', $service) }}">Crear un opcion para el combo <span class="fa fa-plus"></span></a>
</div>

<div class="box">

    <table class="table table">
        <thead class="thead-inverse">
            <tr>
                <th>Opción</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service->combos as $combo)
            <tr>
                <td>{{ $combo->name }}</td>
                <td>{{ $combo->value }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('combo.edit', $combo) }}">Editar <span class="fa fa-pencil"></span> </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('combo.destroy', $combo) }}"
                    onclick="event.preventDefault();
                    if(confirm('¿Desea Borrar esta opción?')==true){document.getElementById('combo-delete-{{$combo->id}}').submit();}
                    "> Eliminar <span class="fa fa-close"></span>
                    </a>
                    <form id="combo-delete-{{$combo->id}}" action="{{ route('combo.destroy', $combo) }}" method="POST" style="display:none;">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>    
        @endforeach
    </tbody>
</table>

</div>


@else
<div class="text-center">
    <p>Este servicio no cuenta con opciones de combo.</p>
    <a class="btn btn-primary" href="{{ route('comboCreatePerService', $service) }}">Crear opciones de pago para este servicio</a>
</div>
@endif
@endsection