@extends('layouts.dashboard')

@section('claseBody') is-admin @endsection

@section('content')

<header class="main-content-header box">
    <h1>Bienvenido {{ Auth::user()->first_name }}</h1>
</header>



@endsection


