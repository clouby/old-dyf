@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Nueva Servicio</div>
                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                      <input type="hidden" name="active" value="0">
                      
                      @role('operador')
                      <input required type="hidden" name="operator_id" value="{{ Auth::user()->operator->id }}">
                      @endrole

                      <div class="row">
                        <div class="col-12 col-sm-4">
                          <div class="form-group">
                            <label for="service_name">Nombre del servicio:</label>
                            <input type="text" name="service_name" id="service_name" class="form-control" placeholder="">
                          </div>
                        </div>

                        <div class="col-12 col-sm-4">
                          @role('superadmin')
                          <div class="form-group">
                            <label for="operator_id">Operador:</label>
                            <select name="operator_id" id="operator_id" class="form-control">
                              @foreach ($operators as $operator)
                                <option value="{{ $operator->id }}">{{ $operator->operator_name }}</option>
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
                                  <option value="{{ $category->id  }}">{{ $category->category }}</option>
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
                              <option value="1">Activar Combos</option>
                            </select>
                          </div>
                        </div>
                    
                        <div class="col-12 col-sm-4">    
                          <div class="form-group">
                            <label for="kid_active">Incluir niños</label>
                            <select name="kid_active" id="kid_active" class="form-control">
                              <option value="0">No Permitir niños</option>
                              <option value="1">Permitir niños</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12 col-sm-4">
                          <div class="form-group">
                            <label for="price_adult">Precio Adultos (12+ años)</label>
                            <input type="text" name="price_adult" id="price_adult" class="form-control">
                          </div>
                        </div>

                        <div class="col-12 col-sm-4">
                          <div class="form-group">
                            <label for="price_kid">Precio Niños (4 - 11 años)</label>
                            <input type="text" name="price_kid" id="price_kid" class="form-control">
                          </div>
                        </div>

                        <div class="col-12 col-sm-4">
                          <div class="form-group">
                            <label for="price_baby">Precio Infantes (0 - 3 años)</label>
                            <input type="text" name="price_baby" id="price_baby" class="form-control">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" class="summernote form-control" cols="30" rows="10"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="what_to_expect">¿Que esperar?</label>
                        <textarea name="what_to_expect" id="what_to_expect" class="summernote form-control" cols="30" rows="10"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="important_info">Información Importante</label>
                        <textarea name="important_inf" id="important_inf" class="summernote form-control" cols="30" rows="10"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="additional_info">Información Adicional</label>
                        <textarea name="additional_inf" id="additional_inf" class="summernote form-control" cols="30" rows="10"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="principal">Imagen Banner Principal:</label>
                        <input type="file" name="principal" id="principal">
                      </div>

                      <div class="form-group">
                        <label for="image">Seleccione una imagen para su service:</label>
                        <input type="file" name="image" id="image">
                      </div>

                      <div class="form-group">
                        <button class="btn btn-success" type="submit">Crear Servicio</button>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('.summernote').summernote();
  });
</script>
@endsection