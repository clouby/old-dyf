@extends('layouts.dashboard')

@section('claseBody') is-admin is-operator-admin @endsection

@section('content')
@if ( $operators->count() > 0 )

<div class="create-category-options box">
    <a class="btn btn-default" href="{{ route('operator.create') }}">Crear Operador <span class="fa fa-plus"></span></a>
</div>
<div class="box">
    <table id="operadores" class="table">
        <thead class="thead-inverse">
            <tr>
                <th>Operador</th>
                <th>Descripción</th>
                <th>Correo Electronico</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operators as $operator)
            <tr>
                <td>{{ $operator->operator_name }}</td>
                <td>{{ $operator->description }}</td>
                <td>{{ $operator->email_corp }}</td>
                <td>{{ $operator->phone_corp }}</td>
                <td>{{ $operator->address }}</td>
                <td class="operator-acciones">
                    <a class="btn btn-default" href="{{ route('operator.edit', $operator) }}">Editar <span class="fa fa-pencil"></span></a>
                    <a class="btn btn-default" href="{{ route('operator.destroy', $operator) }}">Eliminar <span class="fa fa-close"></span></a>

                    <form class="operator-delete-{{$operator->id}}" action="{{ route('operator.destroy', $operator) }}" method="POST" style="display:none;">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
    @else
    <div class="col-md-12 text-center">
        <p>No tiene operador creada</p>
        <a class="btn btn-primary" href="{{ route('operator.create') }}">create</a>
    </div>
    @endif
</div>




@endsection