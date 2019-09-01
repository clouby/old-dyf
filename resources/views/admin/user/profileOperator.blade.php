@extends('layouts.dashboard')

@section('content')


<header class="main-content-header box">
    <h1>Perfil.</h1>
    <p class="lead">Ajusta lo que necesite de su perfil público.</p>
</header>


<section class="main-content-tabs box">


    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Información</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Servicios</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Disponibilidad</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Reservas</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    DATOS IMPORTANTES
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h3>Información</h3>

                    <div class="box page-section">
                        <div class="row row-va">
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-12 col-sm-8">
                                        <h4>Nombre del Operador</h4>
                                        <p class="lead">Valoración</p>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <h1>4.5</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card informacion-valoracion box">
                                    <ul class="list-unstyled box">
                                        <li>
                                            Atención
                                            <span>
                                                <img src="{{ asset('dist/images/estrellas.svg') }}" alt="" class="img-fluid">
                                            </span>
                                        </li>
                                        <li>
                                            Puntualidad
                                            <span>
                                                <img src="{{ asset('dist/images/estrellas.svg') }}" alt="" class="img-fluid">
                                            </span>
                                        </li>
                                        <li>
                                            Precio
                                            <span>
                                                <img src="{{ asset('dist/images/estrellas.svg') }}" alt="" class="img-fluid">
                                            </span>
                                        </li>
                                        <li>
                                            Satisfacción
                                            <span>
                                                <img src="{{ asset('dist/images/estrellas.svg') }}" alt="" class="img-fluid">
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Información Perfil Privado -->
                    <div class="informacion-perfil informacion-privada box page-section">
                        <h5 class="informacion-perfil-title">Información de Contacto</h5>
                        
                        <form action="/" method="post">
                            <div class="row">
                                @method('PUT')
                                @csrf
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="email_corp">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email_corp">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_corp">Teléfono de Contacto</label>
                                        <input type="text" class="form-control" id="phone_corp">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="address">Dirección</label>
                                        <input type="text" class="form-control" id="address">
                                    </div>
                                </div>
                                <button class="btn btn-rojo-oscuro" type="submit">Guardar información</button>
                            </div>
                        </form>
                        
                    </div>

                    <!-- Comentarios -->
                    <div class="informacion-perfil informacion-privada box page-section">
                        <h5 class="informacion-perfil-title">Comentarios</h5>


                        <div class="comentario box">
                            <div class="row">
                                <div class="col-12 col-sm-2">
                                    <img src="{{ asset('dist/images/perfil.svg') }}" alt="" class="img-fluid comentario-imagen">
                                    <h4>Nombre personas</h4>
                                </div>
                                <div class="col-12 col-sm-10">
                                    <img src="{{ asset('dist/images/estrellas.svg') }}" alt="" class="img-fluid">
                                    <ul class="listado-puntuaciones box list-unstyled">
                                        <li>
                                            Atención: 5
                                        </li>
                                        <li>
                                            Puntualidad: 5
                                        </li>
                                        <li>
                                            Precio: 5
                                        </li>
                                    </ul>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">


                    <!-- Información Perfil Privado -->
                    <div class="informacion-perfil informacion-privada box page-section">
                        <h5 class="informacion-perfil-title">Servicios</h5>


                        <div class="row">
                            <div class="col-12">
                                <ul class="list-unstyled listado-servicios box">
                                    
                                    @foreach ($services as $service)
                                    <li>
                                        
                                        <h6>{{ $service->service_name }}</h6>
                                        <span><a href="{{ route('service.edit', $service) }}" class="btn btn-rojo-oscuro">Editar</a></span>
                                        
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptates commodi iste impedit, culpa, aut quaerat delectus, explicabo eum repellat fuga aliquam! Ullam, vitae. Delectus nemo dolores quibusdam rerum quia.
                </div>
            </div>
        </div>

    </div>

</section>


@endsection


