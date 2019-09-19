<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">

</head>
<body class="carrito reduced-hero">

    @include('partials.toolbar')

    @include('demo.formregistro')

    <div id="main" class="box">
        <div id="hero" class="hero hero-profile box">
            <div class="hero-information hero-content">
                <div class="hero-information-viewport">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-10">
                                @if ($myCart->count() == 0)
                                    <span class="hero-sup-title">¡Sigue explorando!</span>
                                    <h1 class="hero-title">Aquí aparecerá tu próxima gran aventura.</h1>
                                @else

                                <span class="hero-sup-title">¡Hey! ¡Ya casi!</span>
                                <h1 class="hero-title">Estás a punto de vivir una gran experiencia.</h1>

                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="contenidos-carrito page-section box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <div class="box">
                        @if ($myCart->count() > 0)
                        <table class="table table-responsive w-100 d-block d-md-table"">
                            <thead>
                                <tr>
                                    <th>
                                        <form id="shopping-delete-all" action="{{ route('shopping.vaciarCarro') }}" method="POST" style="display:none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </th>
                                    <th></th>
                                    <th>Experiencia Seleccionada</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Final</th>
                                    <th>Reservado para</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                $services = array();
                                @endphp
                                @foreach ($myCart as $item)
                                @php
                                $total = $total + $item->price;
                                @endphp
                                <tr>
                                  <td>
                                    <a onclick="event.preventDefault();
                                    document.getElementById('shopping-{{ $item->id }}').submit();
                                    " href="{{ route('shopping.destroy', $item) }}">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </a>
                              <form id="shopping-{{ $item->id }}" action="{{ route('shopping.destroy', $item) }}" method="POST" style="display:none;">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{ $item }}">
                            </form>
                        </td>
                        <td><img class="" src="" alt=""></td>
                        <td class="service-name">{{ $item->service_name }}</td>
                        <td>{{ $item->reserv_start }}</td>
                        <td>{{ $item->reserv_end }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ money($item->price, 'COP', true) }}</td>
                    </tr>
                    @php
                    array_push($services, $item->service_name);
                    $result = implode(", ", $services);
                    @endphp
                    @endforeach
                    <tr>
                        <td colspan="6">Total neto</td>
                        <td>{{ money($total, 'COP', true) }}</td>
                    </tr>
                    <tr>
                        <td style="text-align:right;" colspan="8">

                            <a onclick="event.preventDefault();
                            document.getElementById('shopping-delete-all').submit();"
                            class="" href="{{ route('shopping.vaciarCarro') }}">Vaciar Carrito</a>

                            <a class="btn" href="{{ route('home') }}"> <span class="arrow left">&larr;</span> Seguir explorando</a>

                            @if (Auth::check())
                            <button id="checkout" class="btn btn-end-carrito">Finalizar Compra</button>
                            @else
                            <button id="activeModal" class="btn btn-end-carrito" data-toggle="modal" data-target="#modal-login-no-cart">Finalizar Compra</button>
                            @endif

                            <form id="formCheckout" method="POST">
                                @csrf
                                <input type="hidden" id="name" name="name" value="{{ $result }}">
                                <input type="hidden" id="description" name="description" value="{{ $result }}">
                                <input type="hidden" id="amount" name="amount" value="{{ $total }}">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            @else
            <div id="empty" class="box text-center">
                <p class="lead">
                    No tienes ningún elemento en el carrito, todavía.
                </p>
                <a class="btn btn-back-main.btn" href="{{ route('home') }}"><span class="arrow left">&larr;</span> Regresar al Inicio</a>
            </div>
            @endif
        </div>

    </div>
</div>
</div>
</div>
</div>

@include('partials.footer')
<script src="https://checkout.epayco.co/checkout.js"></script>
<script>
    $( document ).ready(function() {

        $('#activeModal').click(function (e) {
            e.preventDefault();
            $('#messages').hide();
            $('#modal-login-no-cart').modal('show');
        });

        function handlePayment() {

            var handler = ePayco.checkout.configure({
                key: 'f6049ec8b151c0733889a43b2bcc819b',
                test: true
            });

            var data = {
                //Parametros compra (obligatorio)
                name: $("#name").val(),
                description: $("#description").val(),
                invoice: Math.floor(Math.random()*100000)+10000,
                currency: "cop",
                amount: $("#amount").val(),
                tax_base: 0,
                tax: 0,
                country: "co",
                lang: "es",

                //Onpage="false" - Standard="true"
                external: false,

                //Atributos opcionales
                confirmation: 'http://dealyourfun.com/prueba/confirmation.php',
                response: 'http://dealyourfun.com/prueba/response.php',
            }

            handler.open( data );
        }

        // FIXME: Temporarily Disabled
        // $("#checkout").click(handlePayment);
    });
</script>

</body>
</html>
