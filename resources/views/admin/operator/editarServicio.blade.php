@extends('layouts.dashboard')

@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Servicio</div>
                <div class="card-body">
                    <form action="{{ route('actualizarSericio', $service) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label for="category_id">Categoria:</label>
                          <select name="category_id" id="category_id" class="form-control">
                                <option value="">-- Seleccione Categoria --</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                          </select>
                        </div>

                        <input required type="hidden" name="operator_id" value="{{ Auth::user()->operator->id }}">

                        <div class="form-group">
                          <label for="service_name">Nombre del servicio:</label>
                          <input required type="text" name="service_name" id="service_name" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="description">Descripción:</label>
                          <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="what_to_expect">¿Qué esperar?</label>
                          <textarea name="what_to_expect" id="what_to_expect" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="important_info">Información Importante:</label>
                          <textarea name="important_inf" id="important_inf" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="additional_info">Información Adicional:</label>
                          <textarea name="additional_inf" id="additional_inf" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="image">Seleccione una imagen para su service:</label>
                          <input type="file" name="image" id="image">
                        </div>

                        <div class="form-group">
                          <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection