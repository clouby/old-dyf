<form action="{{ route('shopping.transfer.traslados') }}" method="post">
    @csrf
    <input type="hidden" name="service_id" value="{{ $service->id }}">

    <div class="form-group">
        <label for="traslados">Traslados</label>
        <select name="traslados" id="traslados" class="form-control">
                <option value="">Escoja una opción de traslado</option>
            @forelse ($transfers as $item)
                <option value="{{ $item->traslados }}">{{ $item->traslados }}</option>
            @empty
                <option value="">Aun sin opciones de traslado en la base de datos.</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="reserv_start">Fecha de reserva</label>
        <input type="date" name="reserv_start" id="reserv_start" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="hour_out">Hora de Salida</label>
        <input type="time" name="hour_out" id="hour_out" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="n_personas">N° de personas</label>
        <input type="number" name="n_personas" id="n_personas" min="1" class="form-control">
    </div>

    <div class="form-group">
        <label for="n_maletas">N° de maletas</label>
        <input type="number" name="n_maletas" id="n_maletas" min="0" class="form-control">
    </div>
    
    <button class="btn btn-info-operador-booking" type="submit">¡Solicitar ahora! <span class="arrow">&rarr;</span></button>
</form>