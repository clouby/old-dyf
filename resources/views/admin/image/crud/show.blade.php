@extends('layouts.dashboard')

@section('claseBody') is-admin is-services @endsection

@section('content')

<div class="box">
	<h3>Galería de imágenes, {{ $service->service_name }}</h3>
	<a style="margin-bottom: 20px;" class="btn" href="{{ route('service.show', $service) }}"><span class="arrow left">&larr;</span> Regresar</a>
	<a style="margin-bottom: 20px;" class="btn" href="{{ route('formGalery', $service) }}">Subir imagen a la Galería <span class="fa fa-plus"></span></a>
</div>
<div class="box">
	<div class="row">
		@foreach ($service->images as $image)
		<div style="margin-bottom: 20px;" class="col-6 col-sm-3">
			<img style="width: 100%;" class="img-fluid" width="500" height="300" src="{{ $image->url }}" />
			<button id="{{ $image->id }}" class="btn btn-danger btn-block" 
				onclick="event.preventDefault();
				if(confirm('¿Desea Borrar esta categoria?')){
					document.getElementById('galery-delete-{{$image->id}}').submit();
				}">Borrar imagen</button>
			<form id="galery-delete-{{$image->id}}" action="{{ route('galeryDestroy', $image) }}" method="POST" style="display:none;">
				@method('DELETE')
				@csrf
			</form>
		</div>
		@endforeach
	</div>
</div>

@endsection