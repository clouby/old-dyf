@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="category">Categoria</label>
                          <input type="text" value="{{ $category->category }}" name="category" id="category" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection