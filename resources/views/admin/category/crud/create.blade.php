@extends('layouts.prueba')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
      <h1>Nueva Categoria</h1>
      @if ($errors->any())
        @foreach ($errors->all() as $error)    
          <div class="alert alert-danger"> 
            <p>{{ $error }}</p>
          </div>
        @endforeach
      @endif
      <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="category">Categoria:</label>
            <input type="text" name="category" id="category" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="image">Imagen:</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-success" type="submit">Guardar</button>
          </div>
      </form>
    </div>
</div>
@endsection