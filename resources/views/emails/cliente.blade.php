<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
</head>
<body style="margin:0;padding:0;font-family:Helvetica Neue, Helvetica, Arial,sans-serif;background:#fafafa;font-size:15px;color:#333333;">
  <div style="max-width:480px;margin-bottom:30px;margin-top:30px;margin-left:auto;margin-right:auto;background:#ffffff;border: 0;box-shadow: 0 5px 20px -4px #e0e0e0;border-radius:3px;">

    <div style="background-image: url({{ URL::route('home') }}/dist/images/hero-background.jpg );"></div>

    <div style="padding-top:20px;padding-right:20px;padding-bottom:15px;padding-left:20px;border-bottom:#eeeeee 1px solid;">
      <a href="{{ URL::route('home')}}" style="font-size:14px;font-weight:700;text-decoration:none;color:#333333;">
        <img style="width:180px;height:54px;" src="{{ URL::route('home') }}/dist/images/DYF_Logo_large.svg" alt="Deal your Fun">
      </a>
    </div>

    <div style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;">
      <div style="
      font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
      font-size: 15px;
      color: #565656;
      text-align: center;
      ">

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
      ¡Su compra ha sido exitosa!
    </h1>
    <p>
      ¡Hola {{ $fullname }}!
    </p>
    <p style="text-align: justify;">
     Queremos informarte que la compra que realizaste en {{ $operator }} fue realizada exitosamente, por aquí te dejamos la información de la transacción.
   </p>
   <ul style="text-align: left; font-size: 14px;">
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
    <h4 style="margin-bottom: 5px;">Este servicio, será prestado por:</h4>
    <ul style="text-align: left; font-size: 14px;">
      <li>Establecimiento o comercio: {{ $operator }}</li>
      <li>Representante: {{ $representante }}</li>
      <li>Dirección: {{ $operator_address }}</li>
      <li>Teléfono: {{ $operator_phone }}</li>
      <li>Correo electrónico: {{ $operator_email }}</li>
    </ul>  
  </div>

  <hr style="
  border: 0;
  border-top: 1px #ddd solid;
  height: 0px;
  float: left;
  width: 100%;
  margin-bottom: 15px;
  margin-top: 25px;
  ">

  <p style="text-align: justify; font-size: 14px;">
    <strong>¿Alguna pregunta?</strong><br><br>
    Cualquier duda o comentario acerca de tu esta compra puedes hacerla llegar a nuestro equipo rápidamente comunicándote al +57 300 8619081 o al correo electrónico <a href="mailto:hola@dealyourfun.com">hola@dealyourfun.com</a>
  </p>
  <p style="text-align: justify; font-size: 14px;">
    <strong>Políticas de Cancelación</strong><br><br>
    Conoce nuestras políticas de cancelación de servicios en el siguiente enlace: <a href="{{ URL::route('home')}}/terminos-condiciones#cancelacion">Políticas de Cancelación.</a>
  </p>

</div>
</div>
</div>
<div style="
font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
font-size: 14px;
color: #565656;
text-align: center;
">
<p>
 <strong style="font-size: 18px;">&copy; 2019. Deal your Fun. </strong><br>
 Todos los derechos reservados. <br><br>
 <a target="_blank" href="{{ URL::route('home')}}/terminos-condiciones">Términos y condiciones</a> - <a target="_blank" href="{{ URL::route('home')}}/politicas-privacidad">Política de Privacidad</a>
</p>
</div>
</body>
</html>





