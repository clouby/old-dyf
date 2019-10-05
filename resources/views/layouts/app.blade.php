<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136157823-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136157823-1');
</script>

    <meta charset="UTF-8">
    <title>@yield('titulopagina')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include(app_path().'/Includes/versionado.php'); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dist/images/favicon/apple-icon-57x57.png') }} ">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dist/images/favicon/apple-icon-60x60.png') }} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dist/images/favicon/apple-icon-72x72.png') }} ">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/images/favicon/apple-icon-76x76.png') }} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dist/images/favicon/apple-icon-114x114.png') }} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dist/images/favicon/apple-icon-120x120.png') }} ">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('dist/images/favicon/apple-icon-144x144.png') }} ">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('dist/images/favicon/apple-icon-152x152.png') }} ">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/images/favicon/apple-icon-180x180.png') }} ">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('dist/images/favicon/android-icon-192x192.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/images/favicon/favicon-32x32.png') }} ">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/images/favicon/favicon-96x96.png') }} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/images/favicon/favicon-16x16.png') }} ">


    <link rel="manifest" href="{{ asset('dist/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('dist/images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Le Facebook OG -->
    <meta property="og:description" content="Somos Deal your Fun. Transformamos la forma como se hace el turismo en Colombia."/>
    <meta property="og:title" content="@yield('titulopagina')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$actual_URL?>"/>
    <meta property="og:site_name" content="Deal your Fun"/>
    <meta property="og:image" content="{{ asset('dist/images/pages/og-dyf.jpg') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/libs/bootstrap-datepicker-1.6.1-dist/css/bootstrap-datepicker.standalone.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}<?=$ver;?>">

</head>
<body class="reduced-hero @yield('claseBody')">
    @include('partials.toolbar')

    <div id="main" class="box">
        <div id="hero" class="hero hero-profile box">
            @yield('herocontent')
        </div>
        <div class="page-content box">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

</body>
</html>
