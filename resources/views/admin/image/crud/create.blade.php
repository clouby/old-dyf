@extends('layouts.dashboard')

@section('claseBody') is-admin is-services @endsection

@section('content')

@if ( Session::has('success') )
<div class="alert alert-success" role="alert">
  {{Session::get('success')}}
</div>
@elseif ( Session::has('errors') )
<div class="alert alert-warning" role="alert">
  {{Session::get('errors')}}
</div>
@endif

<div class="box">
  <h3>Adicionar imagen, {{ $service->service_name }}</h3>
  <a style="margin-bottom: 20px;" class="btn" href="{{ route('service.show', $service) }}"><span class="arrow left">&larr;</span> Regresar</a>
</div>

<form action="{{ route('galerySave') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="url">Seleccionar imagen, tamaño: 1280px por 800px. Formato: JPG, JPEG, PNG. De máximo 2Mb.</label><br>
    <input type="file" name="url" id="url" required>
    <input type="hidden" name="service_id" value="{{ $service->id }}">
  </div>
  <button class="btn" type="submit">Cargar Imagen</button>
</form>

@endsection
