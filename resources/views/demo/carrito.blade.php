@extends('layouts.main')

@section('titulopagina') Carrito | Deal your Fun @endsection

@section('content')
    <div class="shopping">
        <div class="header__hero" style="background-image: url('{{ asset('dist/images/shopping/shop_background.png') }}');">
            <div class="container center">
                <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                    <a class="navbar-brand" href="#">
                        <img class="classic__logo" src="{{ asset('dist/images/DYF_Logo.png') }}" alt="" class="img-fluid"/>
                        <img class="resp__logo" src="{{ asset('dist/images/DYF_Logo_min.png') }}" alt="" class="img-fluid"/>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav reduce">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="#"><img src="{{ asset('dist/images/platform/user_avatar_icon.png') }}" class="img-fluid" style="border-radius: 50px;"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle hero__drop" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cartagena
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Cartagena</span>
                                            <span class="dropdown-item" >Turbaco</span>
                                            <span class="dropdown-item" >Mompox</span>
                                            <span class="dropdown-item" >Palenque</span>
                                            <span class="dropdown-item" >San Jacinto</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="{{ asset('dist/images/platform/shop_icon.png') }}" class="img-fluid" >
                                </a>
                            </li>
                            <li class="nav-item">
                                <button class="btn my-2 my-sm-0 text-light btn__redirect btn__sec">
                                    <img src="{{ asset('dist/images/platform/car_icon.png') }}" />
                                    <span class="text__button">
                            Transfers
                        </span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <span class="navbar-toggler-icon"></span>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>

        <div class="intro-home box">
            <div class="container">
                <div class="row row-vh row-title text-center">
                    <div class="col-12 col-md-7">
                        <h2 style="font-size: 36px;">Dale una mirada</h2>
                        <h4 style="font-size: 18px;">Descubrir más</h4>
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
                                <table class="table table-responsive w-100 d-block d-md-table">
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
                                        $total = $total + $item->shop->price;
                                    @endphp
                                    <tr>
                                        <td>
                                            <img src="{{ $item->service->image }}" width="60" height="60" style="border-radius: 50px;" />
                                            <a onclick="event.preventDefault();
                                                document.getElementById('shopping-{{ $item->shop->id }}').submit();
                                                " href="{{ route('shopping.destroy', $item->shop) }}">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </a>
                                            <form id="shopping-{{ $item->shop->id }}" action="{{ route('shopping.destroy', $item->shop) }}" method="POST" style="display:none;">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->shop}}">
                                            </form>
                                        </td>
                                        <td><img class="" src="" alt=""></td>
                                        <td class="service-name">{{ $item->shop->service_name }}</td>
                                        <td>{{ $item->shop->reserv_start }}</td>
                                        <td>{{ $item->shop->reserv_end }}</td>
                                        <td>{{ $item->shop->quantity }}</td>
                                        <td>{{ money($item->shop->price, 'COP', true) }}</td>
                                    </tr>
                                    @php
                                        array_push($services, $item->shop->service_name);
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
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Carrito</title>--}}

{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{ asset('dist/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">--}}

{{--</head>--}}
{{--<body class="carrito reduced-hero">--}}

{{--    @include('partials.toolbar')--}}

{{--    @include('demo.formregistro')--}}

{{--    <div id="main" class="box">--}}
{{--        <div id="hero" class="hero hero-profile box">--}}
{{--            <div class="hero-information hero-content">--}}
{{--                <div class="hero-information-viewport">--}}

{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-sm-10">--}}
{{--                                @if ($myCart->count() == 0)--}}
{{--                                    <span class="hero-sup-title">¡Sigue explorando!</span>--}}
{{--                                    <h1 class="hero-title">Aquí aparecerá tu próxima gran aventura.</h1>--}}
{{--                                @else--}}

{{--                                <span class="hero-sup-title">¡Hey! ¡Ya casi!</span>--}}
{{--                                <h1 class="hero-title">Estás a punto de vivir una gran experiencia.</h1>--}}

{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="contenidos-carrito page-section box">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                       <div class="box">--}}
{{--                        @if ($myCart->count() > 0)--}}
{{--                        <table class="table table-responsive w-100 d-block d-md-table"">--}}
{{--                            <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>--}}
{{--                                        <form id="shopping-delete-all" action="{{ route('shopping.vaciarCarro') }}" method="POST" style="display:none;">--}}
{{--                                            @method('DELETE')--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </th>--}}
{{--                                    <th></th>--}}
{{--                                    <th>Experiencia Seleccionada</th>--}}
{{--                                    <th>Fecha Inicio</th>--}}
{{--                                    <th>Fecha Final</th>--}}
{{--                                    <th>Reservado para</th>--}}
{{--                                    <th>Total</th>--}}
{{--                                </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                                @php--}}
{{--                                $total = 0;--}}
{{--                                $services = array();--}}
{{--                                @endphp--}}
{{--                                @foreach ($myCart as $item)--}}
{{--                                @php--}}
{{--                                $total = $total + $item->price;--}}
{{--                                @endphp--}}
{{--                                <tr>--}}
{{--                                  <td>--}}
{{--                                    <a onclick="event.preventDefault();--}}
{{--                                    document.getElementById('shopping-{{ $item->id }}').submit();--}}
{{--                                    " href="{{ route('shopping.destroy', $item) }}">--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                      <span aria-hidden="true">&times;</span>--}}
{{--                                  </button>--}}
{{--                              </a>--}}
{{--                              <form id="shopping-{{ $item->id }}" action="{{ route('shopping.destroy', $item) }}" method="POST" style="display:none;">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="id" value="{{ $item }}">--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                        <td><img class="" src="" alt=""></td>--}}
{{--                        <td class="service-name">{{ $item->service_name }}</td>--}}
{{--                        <td>{{ $item->reserv_start }}</td>--}}
{{--                        <td>{{ $item->reserv_end }}</td>--}}
{{--                        <td>{{ $item->quantity }}</td>--}}
{{--                        <td>{{ money($item->price, 'COP', true) }}</td>--}}
{{--                    </tr>--}}
{{--                    @php--}}
{{--                    array_push($services, $item->service_name);--}}
{{--                    $result = implode(", ", $services);--}}
{{--                    @endphp--}}
{{--                    @endforeach--}}
{{--                    <tr>--}}
{{--                        <td colspan="6">Total neto</td>--}}
{{--                        <td>{{ money($total, 'COP', true) }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td style="text-align:right;" colspan="8">--}}

{{--                            <a onclick="event.preventDefault();--}}
{{--                            document.getElementById('shopping-delete-all').submit();"--}}
{{--                            class="" href="{{ route('shopping.vaciarCarro') }}">Vaciar Carrito</a>--}}

{{--                            <a class="btn" href="{{ route('home') }}"> <span class="arrow left">&larr;</span> Seguir explorando</a>--}}

{{--                            @if (Auth::check())--}}
{{--                            <button id="checkout" class="btn btn-end-carrito">Finalizar Compra</button>--}}
{{--                            @else--}}
{{--                            <button id="activeModal" class="btn btn-end-carrito" data-toggle="modal" data-target="#modal-login-no-cart">Finalizar Compra</button>--}}
{{--                            @endif--}}

{{--                            <form id="formCheckout" method="POST">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" id="name" name="name" value="{{ $result }}">--}}
{{--                                <input type="hidden" id="description" name="description" value="{{ $result }}">--}}
{{--                                <input type="hidden" id="amount" name="amount" value="{{ $total }}">--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--            @else--}}
{{--            <div id="empty" class="box text-center">--}}
{{--                <p class="lead">--}}
{{--                    No tienes ningún elemento en el carrito, todavía.--}}
{{--                </p>--}}
{{--                <a class="btn btn-back-main.btn" href="{{ route('home') }}"><span class="arrow left">&larr;</span> Regresar al Inicio</a>--}}
{{--            </div>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@include('partials.footer')--}}
{{--<script src="https://checkout.epayco.co/checkout.js"></script>--}}
{{--<script>--}}
{{--    $( document ).ready(function() {--}}

{{--        $('#activeModal').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            $('#messages').hide();--}}
{{--            $('#modal-login-no-cart').modal('show');--}}
{{--        });--}}

{{--        function handlePayment() {--}}

{{--            var handler = ePayco.checkout.configure({--}}
{{--                key: 'f6049ec8b151c0733889a43b2bcc819b',--}}
{{--                test: true--}}
{{--            });--}}

{{--            var data = {--}}
{{--                //Parametros compra (obligatorio)--}}
{{--                name: $("#name").val(),--}}
{{--                description: $("#description").val(),--}}
{{--                invoice: Math.floor(Math.random()*100000)+10000,--}}
{{--                currency: "cop",--}}
{{--                amount: $("#amount").val(),--}}
{{--                tax_base: 0,--}}
{{--                tax: 0,--}}
{{--                country: "co",--}}
{{--                lang: "es",--}}

{{--                //Onpage="false" - Standard="true"--}}
{{--                external: false,--}}

{{--                //Atributos opcionales--}}
{{--                confirmation: 'http://dealyourfun.com/prueba/confirmation.php',--}}
{{--                response: 'http://dealyourfun.com/prueba/response.php',--}}
{{--            }--}}

{{--            handler.open( data );--}}
{{--        }--}}

{{--        // FIXME: Temporaly Disabled--}}
{{--        $("#checkout").click(handlePayment);--}}
{{--    });--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
