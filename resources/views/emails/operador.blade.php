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
Se le ha registrado una nueva compra.
</h1>
<p style="text-align: justify;">
  Hola estimado operador, un nuevo cliente ha registrado una compra en su establecimiento; estos son los datos:
</p>
<ul style="text-align: left; font-size: 14px;">

  <li>ID Reserva o Compra: {{ $factura }}</li>
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

<p style="text-align: justify; font-size: 14px;">
  <strong>¿Alguna pregunta?</strong><br><br>
  Cualquier duda o comentario acerca de tu esta compra puedes hacerla llegar a nuestro equipo rápidamente comunicándote al +57 300 8619081 o al correo electrónico <a href="mailto:hola@dealyourfun.com">hola@dealyourfun.com</a>
</p>