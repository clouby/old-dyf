@extends('layouts.prueba')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
          <h1>Categoria</h1>
          <h4>{{ $category->category }}</h4>
      </div>
  </div>
@endsection