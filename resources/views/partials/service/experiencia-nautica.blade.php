<form action="{{ route('shopping.nautica') }}" method="post">
    @csrf
    <input type="hidden" name="service_id" value="{{ $service->id }}">
    <div class="form-group">
        <label for="reserv_start">Fecha</label>
        <input type="text" name="reserv_start" id="reserv_start" class="form-control" required>
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
                @if ($service->boy_active)
                    Adultos
                @else
                    N° de pasajeros
                @endif
            </label>
            <input type="number" name="adults" id="adults" min="1" max="14" class="form-control" required>
        </div>
        @if ($service->boy_active)
        <div class="form-group">
            <label for="boys">Niños (4 - 11 años)</label>
            <input type="number" name="boys" id="boys" min="0" max="5" class="form-control">
        </div>
        @endif
    @endif

    <button class="btn btn-info-operador-booking" type="submit">¡Solicitar ahora! <span class="arrow">&rarr;</span></button>
</form>
