@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body m-auto">
                    @if ( $categories->count() > 0 )
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('category.edit', $category) }}">Edit</a>

                                    <form class="category-delete-{{$category->id}}" action="{{ route('category.destroy', $category) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="col-md-12 text-center">
                            <p>No tiene categoria creada</p>
                            <a class="btn btn-primary" href="{{ route('category.create') }}">create</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection