@extends('layouts.dashboard')

@section('claseBody') is-admin is-category @endsection

@section('content')
@if ( $combos->count() > 0 )
    @if ( Session::has('success') )
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @elseif ( Session::has('errors') )
    <div class="alert alert-warning" role="alert">
        {{Session::get('errors')}}
    </div>
    @endif

<div class="create-category-options box">
    <a class="btn btn-default" href="{{ route('combo.create') }}">Crear un opcion para el combo <span class="fa fa-plus"></span></a>
</div>

<div class="box">

    <table class="table table">
        <thead class="thead-inverse">
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($combos as $combo)
            <tr>
                <td>{{ $combo->name }}</td>
                <td>{{ $combo->value }}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{ route('category.edit', $category) }}">Editar <span class="fa fa-pencil"></span> </a>
                    <a class="btn btn-danger btn-sm" href="{{ route('category.destroy', $category) }}"
                    onclick="event.preventDefault();
                    if(confirm('¿Desea Borrar esta categoria?')==true){document.getElementById('category-delete-{{$category->id}}').submit();}
                    "> Eliminar <span class="fa fa-close"></span>
                    </a>
                    <form id="category-delete-{{$category->id}}" action="{{ route('category.destroy', $category) }}" method="POST" style="display:none;">
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
    <p>No tiene categoria creada</p>
    <a class="btn btn-primary" href="{{ route('category.create') }}">Crear Categoria</a>
</div>
@endif
@endsection