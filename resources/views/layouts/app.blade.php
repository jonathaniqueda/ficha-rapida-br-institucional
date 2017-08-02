<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ficha Rápida BR - Sua Segurança na Hora de ALUGAR, CONTRATAR ou VENDER!</title>

    <meta name="google-site-verification" content="aCkUhs7qJlYZsv8La4j3lBFOtjueyXCkdpanyRU8iFk"/>

    <meta name="author" content="jonathan iqueda, jonathaniqueda@me.com">

    <meta name="description"
          content="A Ficha Rápida BR é uma Assessoria para Administradores de Imóveis e Corretores Imobiliários focada em entregar soluções em um prazo diferenciado do mercado com análises em menos de 24 horas!">

    <meta name="og:title" content="Ficha Rápida BR - Sua Segurança na Hora de ALUGAR, CONTRATAR ou VENDER!">
    <meta name="og:description"
          content="A Ficha Rápida BR é uma Assessoria para Administradores de Imóveis e Corretores Imobiliários focada em entregar soluções em um prazo diferenciado do mercado com análises em menos de 24 horas!">
    <meta name="og:image" content="{{asset('img/seuguru-banner.jpg')}}">
    <meta name="og:url" content="https://ficharapidabr.com.br"/>
    <meta name="og:site_name" content="FichaRápidaBR"/>

    <!-- Styles -->
    <link href="{{ asset('/css/vendor.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('img/fav.png')}}">
    <link rel="icon" href="{{asset('img/fav.png')}}">

    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token()
            ]) !!}
    </script>

    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader">
        <div id="cssload-loader">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
<!-- /.end preloader -->

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<script src="https://maps.googleapis.com/maps/api/js?key={{getenv('GOOGLE_API_KEY')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ elixir('/js/app.js') }}"></script>
</body>
</html>
