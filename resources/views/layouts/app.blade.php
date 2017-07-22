<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FichaRápidaBR - Sua Segurança na Hora de ALUGAR, CONTRATAR ou VENDER!</title>

    <meta name="author" content="jonathan iqueda, jonathaniqueda@me.com">

    <meta name="description"
          content="A FichaRápidaBR é uma Assessoria para Administradores de Imóveis e Corretores Imobiliários focada em entregar soluções em um prazo diferenciado do mercado com análises em menos de 24 horas!">

    <meta name="og:title" content="FichaRápidaBR - Sua Segurança na Hora de ALUGAR, CONTRATAR ou VENDER!">
    <meta name="og:description"
          content="A FichaRápidaBR é uma Assessoria para Administradores de Imóveis e Corretores Imobiliários focada em entregar soluções em um prazo diferenciado do mercado com análises em menos de 24 horas!">
    <meta name="og:image" content="{{asset('img/seuguru-banner.jpg')}}">
    <meta name="og:url" content="https://ficharapidabr.com.br"/>
    <meta name="og:site_name" content="FichaRápidaBR"/>

    <!-- Styles -->
    <link href="{{ mix('/css/vendor.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/fav.png')}}">
    <link rel="icon" href="{{asset('img/fav.png')}}">

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token()
            ]) !!}
    </script>
</head>
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="https://maps.googleapis.com/maps/api/js?key={{getenv('GOOGLE_API_KEY')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
