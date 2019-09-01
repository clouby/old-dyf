@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $service->service_name }}</h4>
                    <a class="btn" href="{{ route('horariosServiceCreate', $service) }}">Crear Horario</a>
                </div>
                <div class="card-body">
                    @if ($service->availabilities->count()>0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service->availabilities as $item)
                                <tr>
                                    <td>{{ $item->hour }}</td>
                                    <td>
                                        <a class="btn" href="{{ route('availability.edit', $item) }}">Actualizar</a>
                                        <a class="btn" href="{{ route('availability.destroy', $item) }}"
                                        onclick="event.preventDefault();
                                        if(confirm('¿Desea Borrar esta hora?')==true){document.getElementById('horario-delete-{{$item->id}}').submit();}
                                        "> Eliminar <span class="fa fa-close"></span>
                                        </a>
                                        <form id="horario-delete-{{$item->id}}" action="{{ route('availability.destroy', $item) }}" method="POST" style="display:none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div>
                            <p>Por el momento este servicio no cuenta con horario dinamicos</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection