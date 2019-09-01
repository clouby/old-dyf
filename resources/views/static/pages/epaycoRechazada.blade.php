@extends('layouts.app')

@section('titulopagina') Respuesta transacción | Deal your Fun @endsection

@section('claseBody') page about-dyf @endsection

@section ('herocontent')
<div class="hero-information hero-content">
  <div class="hero-information-viewport">

    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8">

          <span class="hero-sup-title">Respuesta de la transacción.</span>
          <h1 class="hero-title">Transacción {{ $data->x_response }}</h1>
          <a class="btn btn-back-main " href="{{ route('home') }}">Volver</a>

        </div>
      </div>
    </div>

  </div>
</div>

@endsection


@section('content')
<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-lg-8 col-lg-offset-2 ">
      <div class="card box">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Referencia</td>
                <td id="referencia">{{ $data->x_id_invoice }}</td>
              </tr>
              <tr>
                <td class="bold">Fecha</td>
                <td id="fecha">{{ $data->x_transaction_date }}</td>
              </tr>
              <tr>
                <td>Respuesta</td>
                <td id="respuesta">{{ $data->x_response }}</td>
              </tr>
              <tr>
                <td>Motivo</td>
                <td id="motivo">{{ $data->x_response_reason_text }}</td>
              </tr>
              <tr>
                <td class="bold">Banco</td>
                <td id="banco">{{ $data->x_bank_name }}</td>
              </tr>
              <tr>
                <td class="bold">Recibo</td>
                <td id="recibo">{{ $data->x_transaction_id }}</td>
              </tr>
              <tr>
                <td class="bold">Total</td>
                <td id="total">{{ $data->x_amount }} {{ $data->x_currency_code }}</td>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<footer>
  <div class="row">
    <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
        <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/pagos_procesados_por_epayco_260px.png" style="margin-top:10px; float:left"> <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/credibancologo.png"
        height="40px" style="margin-top:10px; float:right">
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection