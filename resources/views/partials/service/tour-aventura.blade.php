<form action="{{ route('shopping.tour') }}" method="post">
    @csrf
    <input type="hidden" name="service_id" value="{{ $service->id }}">

    <div class="form-group">
        <label for="reserv_start">Fecha</label>
        <input type="text" name="reserv_start" id="reserv_start" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="reserv_hour">Hora</label>
        @if ($service->availabilities->count()>0)
            <select name="reserv_hour" id="reserv_hour" class="form-control">
                @foreach ($service->availabilities as $item)
                    <option value="{{ $item->hour }}">{{ date('g:i A', strtotime($item->hour)) }}</option>
                @endforeach
            </select>
        @else
            <input type="text" name="reserv_hour" id="reserv_hour" class="form-control">
        @endif
        
    </div>

    @if ($service->combo)
        <div class="form-group">
            <label for="combo">N° de pasajeros</label>
            <select name="combo" id="combo" class="form-control">
                @foreach ($service->combos as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    @else
        <div class="form-group">
            <label for="adults">
                @if ($service->kids_active)
                    Adultos
                @else
                    N° de pasajeros
                @endif
            </label>
            <input type="number" name="adults" id="adults" min="1" class="form-control" required>
        </div>
        @if ($service->kids_active)
        <div class="form-group">
            <label for="kids">Niños (4 - 11 años)</label>
            <input type="number" name="kids" id="kids" min="0" class="form-control">
        </div>
        @endif
    @endif
    
    <button class="btn btn-info-operador-booking" type="submit">¡Solicitar ahora! <span class="arrow">&rarr;</span></button>
</form>