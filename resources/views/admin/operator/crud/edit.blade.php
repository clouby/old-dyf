@extends('layouts.dashboard')

@section('claseBody') is-admin is-operator-admin @endsection

@section('content')

<div class="box is-editing-operator">

 <div class="box">
  <h4 class="operator-name box">Editando, {{ $operator->operator_name }}</h4>
  <a href="{{ route('operator.index') }}" class="cancelar-option"><span class="arrow">&larr;</span>Cancelar y Regresar</a>

</div>

<div class="box">

  <form action="{{ route('operator.update', $operator) }}" method="post">
    @method('PUT')
    @csrf

    @role('superadmin')
    <div class="form-group">
      <label for="user_id">Usuario:</label>
      <select name="user_id" id="user_id" class="form-control">
        @foreach ($users as $user)
        <option 
        @if ($operator->user_id == $user->id) selected @endif
        value="{{ $user->id }}">{{ $user->nickname }}
      </option>
      @endforeach
    </select>
  </div>
  @else
  <input type="hidden" name="user_id" value="{{ $operator->user_id }}">
  @endrole

  <div class="form-group">
    <label for="operator_name">Nombre Operador:</label>
    <input type="text" name="operator_name" value="{{ $operator->operator_name }}" id="operator_name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email_corp">Correo Electrónico:</label>
    <input type="email" name="email_corp" value="{{ $operator->email_corp }}" id="email_corp" class="form-control">
  </div>
  <div class="form-group">
    <label for="phone_corp">Teléfono Corporativo:</label>
    <input type="text" name="phone_corp" value="{{ $operator->phone_corp }}" id="phone_corp" class="form-control">
  </div>
  <div class="form-group">
    <label for="address">Dirección:</label>
    <input type="text" name="address" value="{{ $operator->address }}" id="address" class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $operator->operator_name }}</textarea>
  </div>
  <div class="form-group">
    <button class="btn btn-default" type="submit">Guardar <span class="fa fa-check"></span></button>
  </div>
</form>
</div>

</div>
@endsection