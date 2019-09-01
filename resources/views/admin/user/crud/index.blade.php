@extends('layouts.dashboard')

@section('claseBody') is-admin is-user-admin @endsection

@section('content')

<div class="create-category-options box">
    <a class="btn btn-default" href="{{ route('user.create') }}">Crear Usuario <span class="fa fa-plus"></span></a>
</div>


<div class="box">
    <table id="users" class="table">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Identificación</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            
            <?php // var_dump($user); ?>

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }} {{ $user->second_name }}</td>
                <td>{{ $user->paternal_lastname }} {{ $user->maternal_lastname }}</td>
                <td>{{ $user->dni_number }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('user.show', $user) }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-primary" href="{{ route('user.edit', $user) }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-danger" href="{{ route('user.destroy', $user) }}"
                    onclick="event.preventDefault();
                    document.getElementById('user-delete-{{$user->id}}').submit();">
                    <i class="fa fa-close"></i>
                </a>

                <form id="user-delete-{{$user->id}}" action="{{ route('user.destroy', $user) }}" method="POST" style="display:none;">
                    @method('DELETE')
                    @csrf
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>
</div>



@endsection

