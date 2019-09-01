@extends('layouts.dashboard')

@section('claseBody') is-admin is-role @endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th>Role</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($roles as $role)
    <tr>
      <td>{{ $role->name }}</td>
      <td>
        <a class="btn btn-warning" href="{{ route('role.edit', $role) }}"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-danger" href="{{ route('role.destroy', $role) }}"><i class="fa fa-close"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection