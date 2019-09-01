<h1 style="
font-size: 22px;
text-align: center;
color: #ED1846;
margin-left: 0;
margin-right: 0;
margin-top: 0;
margin-bottom: 20px;
font-weight: bolder;
padding: 20px 0 0;
">
Se ha realizado una compra exitosa.
</h1>
<p style="text-align: justify;">
  Hola administrador, se ha relizado una compra exitosa y se han registrado los siguientes datos:
</p>   <ul style="text-align: left; font-size: 14px;">
  <li>ID Reserva o Compra: {{ $factura }}</li>
  <li>Establecimiento o comercio: {{ $operator }}</li>
  <li>Nombre del comprador: {{ $fullname }}</li>
  <li>Teléfono: {{ $phone }}</li>
  <li>Correo electrónico: {{ $email }}</li>
  <li>Servicio: {{ $service }}</li>
  <li>Fecha Inicio: {{ $reserv_start }}</li>
  <li>Fecha Fin: {{ $reserv_start }}</li>
  <li>Cantidad / Número de personas: {{ $quantity }}</li>
  <li>Valor de la Compra: ${{ $total }} COP</li>
</ul>

<hr style="
border: 0;
border-top: 1px #ddd solid;
height: 0px;
float: left;
width: 100%;
margin-bottom: 15px;
margin-top: 25px;
">

<div style="text-align: justify;">
  <h4 style="margin-bottom: 5px; float: left; width: 100%;">Este servicio, será prestado por:</h4>
  <ul style="text-align: left; font-size: 14px;">
    <li>Establecimiento o comercio: {{ $operator }}</li>
    <li>Representante: {{ $representante }}</li>
    <li>Dirección: {{ $operator_address }}</li>
    <li>Teléfono: {{ $operator_phone }}</li>
    <li>Correo electrónico: {{ $operator_email }}</li>
  </ul>
</div>