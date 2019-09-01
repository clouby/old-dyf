@extends('layouts.dashboard')

@section('claseBody') is-admin is-services @endsection

@section('content')

<div class="box is-editing-service">
  <h4 class="service-name box">Editando Servicio {{ $service->service_name }}</h4>
  <a href="{{ route('service.index') }}" class="cancelar-option"><span class="arrow">&larr;</span>Cancelar y Regresar</a>


  <form action="{{ route('service.update', $service) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

  <div class="row">
    <div class="col-12">
      <h5 class="titulo-importante-seccion box"><span class="fa fa-info-circle"></span> Información Especial</h5>
    </div>
  </div>

  <input type="hidden" name="active" value="{{ $service->active }}">

  @role('operador')
  <input type="hidden" name="operator_id" value="{{ Auth::user()->operator->id }}">
  @endrole
  
  <div class="row">
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="service_name">Nombre del servicio:</label>
        <input value="{{ $service->service_name }}" type="text" name="service_name" id="service_name" class="form-control" placeholder="{{ $service->service_name }}">
      </div>
    </div>

    <div class="col-12 col-sm-4">
      @role('superadmin')
      <div class="form-group">
        <label for="operator_id">Operador:</label>
        <select name="operator_id" id="operator_id" class="form-control">
          @foreach ($operators as $operator)
          <option 
            @if ($operator->id == $service->operator_id) selected @endif
            value="{{ $operator->id }}">{{ $operator->operator_name }}
          </option>
        @endforeach
        </select>
      </div>
      @endrole
    </div>

    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="category_id">Categoría:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
              <option 
                @if ($service->category->id == $category->id) selected @endif
                value="{{ $category->id  }}">{{ $category->category }}
              </option>
            @endforeach
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4">    
      <div class="form-group">
        <label for="combo">Combo por personas</label>
        <select name="combo" id="combo" class="form-control">
          <option value="0">Desactivar Combos</option>
          <option @if($service->combo) selected @endif value="1">Activar Combos</option>
        </select>
      </div>
    </div>

    <div class="col-12 col-sm-4">    
      <div class="form-group">
        <label for="boy_active">Incluir niños</label>
        <select name="boy_active" id="boy_active" class="form-control">
          <option value="0">No Permitir niños</option>
          <option @if($service->boy_active) selected @endif value="1">Permitir niños</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="price_adult">Precio Adultos (12+ años)</label>
        <input value="{{ $service->price_adult }}" type="text" name="price_adult" id="price_adult" class="form-control">
      </div>
    </div>
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="price_boy">Precio Niños (4 - 11 años)</label>
        <input value="{{ $service->price_boy }}" type="text" name="price_boy" id="price_boy" class="form-control">
      </div>
    </div>
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="price_baby">Precio Infantes (0 - 3 años)</label>
        <input value="{{ $service->price_baby }}" type="text" name="price_baby" id="price_baby" class="form-control">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-12">
      <h5 class="titulo-importante-seccion box"><span class="fa fa-info-circle"></span> Información del Servicio</h5>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="form-group">
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" class="summernote form-control" cols="30" rows="10">{{ $service->description }}</textarea>
      </div>

      <div class="form-group">
        <label for="what_to_expect">¿Que esperar?</label>
        <textarea name="what_to_expect" id="what_to_expect" class="summernote form-control" cols="30" rows="10">{{ $service->what_to_expect }}</textarea>
      </div>

      <div class="form-group">
        <label for="important_info">Información Importante:</label>
        <textarea name="important_inf" id="important_inf" class="summernote form-control" cols="30" rows="10">{{ $service->important_inf }}</textarea>
      </div>

      <div class="form-group">
        <label for="additional_info">Información Adicional:</label>
        <textarea name="additional_inf" id="additional_inf" class="summernote form-control" cols="30" rows="10">{{ $service->additional_inf }}</textarea>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="principal">Imagen Banner Principal:</label>
        <input type="file" name="principal" id="principal">
      </div>
    </div>
    
    <div class="col-12 col-sm-8">
      <div class="form-group">
        <img src="{{ $service->principal }}" alt="" class="img-thumbnail">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-4">
      <div class="form-group">
        <label for="image">Seleccione una imagen para su categoria:</label>
        <input type="file" name="image" id="image">
      </div>
    </div>

    <div class="col-12 col-sm-8">
      <div class="form-group">
        <img src="{{ $service->image }}" alt="" class="img-thumbnail">
      </div>
    </div>
  </div>

  <div class="form-group">
    <button class="btn btn-success" type="submit">Actualizar <span class="fa fa-check"></span></button>
  </div>

</form>

@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('.summernote').summernote();
  });
</script>
@endsection