@extends('layouts.prueba')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Nueva Usuario</div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Primer Nombre:</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Primer nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="second_name">Segundo Nombre:</label>
                            <input type="text" name="second_name" id="second_name" class="form-control" placeholder="Segundo nombre">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="paternal_lastname">Primer Apellido:</label>
                            <input type="text" name="paternal_lastname" id="paternal_lastname" class="form-control" placeholder="Primer apellido">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="maternal_lastname">Segundo Apellido:</label>
                            <input type="text" name="maternal_lastname" id="maternal_lastname" class="form-control" placeholder="Segundo apellido">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dni_type">Documento de indentidad:</label>
                            <select id="dni_type" name="dni_type" class="custom-select">
                                <option selected>Seleccione un tipo de documento</option>
                                <option value="CC">Cedula de Ciudadania</option>
                                <option value="CE">Cedula de Extranjeria</option>
                                <option value="PP">Pasaporte</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dni_number">Numero de identificación:</label>
                            <input type="text" name="dni_number" id="dni_number" class="form-control" placeholder="Numero de identificación">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Telefono:</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="role">Seleccione Role:</label>
                            <select id="role" name="role" class="custom-select">
                                <option selected>Seleccione un role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nickname">Nombre de Usuario:</label>
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cpassword">Confirmar Contraseña:</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirmar contraseña" required>
                        </div>
                    </div>

                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image">Seleccione Imagen:</label>
                            <input type="file" name="image" id="image" class="form-control" placeholder="Seleccione Imagen">
                        </div>
                    </div>

                    <hr>
                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Crear</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection