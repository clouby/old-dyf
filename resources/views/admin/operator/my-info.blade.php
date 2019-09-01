@extends('layouts.dashboard')

@section('claseBody') is-admin is-operador @endsection

@section('content')


<div class="box">
	<h3>Bienvenido, {{ $operador->operator_name }}</h3>
	<p>{{ $operador->operator_name }}</p>
</div>

<div class="box">
	<table class="table">
		<thead>
			<tr>
				<th>
					ID Operador
				</th>
				<th>
					Correo electrónico
				</th>
				<th>
					Dirección
				</th>
				<th>
					Teléfono
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					{{ $operador->user_id }} 
				</td>
				<td>
					{{ $operador->email_corp }}
				</td>
				<td>
					{{ $operador->address }}
				</td>
				<td>
					 {{ $operador->phone_corp }}
				</td>
			</tr>
		</tbody>
	</table>
</div>


@endsection