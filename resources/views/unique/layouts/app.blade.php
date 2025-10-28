<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>Unique</title>
        <link rel="icon" href="{{ asset('unique/img/favicon.png') }}" type="image/png'">
        <link href="{{ asset('unique/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('unique/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('unique/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('unique/css/animate.css') }}" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="{{ asset('unique/js/respond-1.1.0.min.js') }}"></script>
            <script src="{{ asset('unique/js/html5shiv.js') }}"></script>
            <script src="{{ asset('unique/js/html5element.js') }}"></script>
        <![endif]-->
    </head>
    <body>
        <header id="header_wrapper">
            @yield('header')
        </header>
        @yield('content')
        <footer class="footer_wrapper" id="contact">
          @yield('footer')
        </footer>


<script type="text/javascript" src="{{ asset('unique/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/wow.js') }}"></script>
<script type="text/javascript" src="{{ asset('unique/js/custom.js') }}"></script>

</body>
</html>
