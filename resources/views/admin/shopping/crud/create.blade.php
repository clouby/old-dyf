@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Categoria</div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="category">Categoria</label>
                          <input type="text" name="category" id="category" class="form-control" placeholder="">
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