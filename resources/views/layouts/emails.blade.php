<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136157823-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136157823-1');
</script>

    <meta charset="UTF-8"/>
</head>
<body style="margin:0;padding:0;font-family:Helvetica Neue, Helvetica, Arial,sans-serif;background:#fafafa;font-size:15px;color:#333333;">
    <div style="max-width:480px;margin-bottom:30px;margin-top:30px;margin-left:auto;margin-right:auto;background:#ffffff;border: 0;box-shadow: 0 5px 20px -4px #e0e0e0;border-radius:3px;">
        
        <div style="background-image: url({{ URL::route('home')  }}/dist/images/hero-background.jpg );"></div>


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
            @yield('content')
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



            
