<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Ecommerce | @yield('title', '')</title>
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/stylesheet.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/styles.css') }}">--}}

    <script type="text/javascript" src="{{ asset('js/common.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.min.js')}}"></script>

    <script src="{{ asset('js/new_custom.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/apps.js')}}" type="text/javascript"></script>

    @yield('extra-css')

    <style type="text/css">
        body {
            background-image: url({{ asset('img/background.png') }});
        }

        #header .header-row {
            padding: 20px 0px;
        }

        #header #logo {
            padding-top: 20px;
        }

        @media screen and (max-width: 800px) {
        }
    </style>

</head>

<section class="wrapper-box">
    <body class="@yield('body-class', '')">
    @include('partials.nav')

    <div id="container">
        <div class="container">
            <div class="row">
                @yield('sidebar')
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer')


    @yield('extra-js')

    </body>
</section>

</html>
