@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Reservacion</div>
                <div class="card-body">
                    <form action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        
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