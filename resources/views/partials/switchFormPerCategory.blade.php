@switch($service->category->id)
    @case(1)
        @include('partials.service.gastronomia')
        @break
    @case(2)
        @include('partials.service.experiencia-nautica')
        @break
    @case(3)
        @include('partials.service.isla-playa')
        @break
    @case(4)
        @include('partials.service.tour-aventura')
        @break
    @case(5)
        @if ($service->id == 36)
            @include('partials.service.transfer-traslado')
        @endif

        @if ($service->id == 37)
            @include('partials.service.transfer-disposicion')
        @endif
        @break
@endswitch

<script>
        const adultRange = document.querySelector('#adults');
        const boysRange = document.querySelector('#boys');

        function RangeHandler(input) {
            let { min, max } = input;

            max = Number(max)

            input.addEventListener('input', function({ target }) {;
                let current = Number(target.value);

                if (Number.isNaN(current)) return;

                if (current > max) target.value = max;
            })
        };


        RangeHandler(adultRange);
        RangeHandler(boysRange);
</script>
