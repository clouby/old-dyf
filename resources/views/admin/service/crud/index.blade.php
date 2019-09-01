@extends('layouts.dashboard')

@section('claseBody') is-admin is-services @endsection

@section('content')


<div class="create-category-options box">
    <a class="btn btn-default" href="{{ route('service.create') }}">Crear Servicio <span class="fa fa-plus"></span></a>
</div>
<div class="box">
    @if ( $services->count() > 0 )
    <table id="servicios" class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre Operador</th>
                <th>Categoría</th>
                <th>Servicio</th>
                <th>Horario</th>
                <th>Combo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->operator->operator_name }}</td>
                <td>{{ $service->category->category }}</td>
                <td>{{ $service->service_name }}</td>
                <td>
                    <a href="{{ route('horariosService', $service) }}">
                        <span class="badge badge-primary">Ver Horarios</span>
                    </a>
                </td>
                <td>
                    @if ($service->combo)
                    <a href="{{ route('comboPerService', $service) }}">
                        <span class="badge badge-success">SI</span>
                    </a>
                    @else
                        <span class="badge badge-danger">NO</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('service.active', $service) }}">
                        @if ($service->active)
                        <span class="badge badge-success">Activado</span>
                        @else
                        <span class="badge badge-danger">Desactivado</span>
                        @endif
                    </a>
                </td>
                <td>
                    <a class="btn btn-default" href="{{ route('service.show', $service) }}"><span class="fa fa-eye"></span></a>
                    <a class="btn btn-default" href="{{ route('service.edit', $service) }}"><span class="fa fa-pencil"></span></a>
                    <a class="btn btn-default" href="{{ route('service.destroy', $service) }}"
                    onclick="event.preventDefault();
                    document.getElementById('service-delete-{{$service->id}}').submit();">
                    <span class="fa fa-close"></span>
                </a>
                <form id="service-delete-{{$service->id}}" action="{{ route('service.destroy', $service) }}" method="POST" style="display:none;">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-default" type="submit">Delete</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>
@else
<div class="col-md-12 text-center">
    <p>No tiene categoria creada</p>
    <a class="btn btn-primary" href="{{ route('services.create') }}">create</a>
</div>
@endif



@endsection