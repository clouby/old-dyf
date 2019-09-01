@extends('layouts.dashboard')

@section('claseBody') is-admin is-category @endsection

@section('content')

<div class="box">
  <h4>Editando, {{ $category->category }}</h4>
  <a href="{{ route('category.index') }}" class="cancelar-option"><span class="arrow">&larr;</span>Cancelar y Regresar</a>
</div>


<div class="box is-editing-category">

  @if ($errors->any())
  @foreach ($errors->all() as $error)    
  <div class="alert alert-danger"> 
    <p>{{ $error }}</p>
  </div>
  @endforeach
  @endif
  <form action="{{ route('category.update', $category) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="category">Nombre de la Categoría:</label>
      <input type="text" value="{{ $category->category }}" name="category" id="category" class="form-control">
    </div>
    <div class="form-group">
      <label for="image">Imagen:</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>
    <div class="form-group">
      <button class="btn btn-default" type="submit">Guardar <span class="fa fa-check"></span></button>
    </div>
  </form>
</div>



@endsection