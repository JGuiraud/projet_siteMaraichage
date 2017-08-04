<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/pepper_16.ico') }}">

    <title>LesJardinsDeRiton</title>

    @yield('css')
</head>
<body>

    @yield('content')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('js')
    <script src="{{ asset('js/landingPage.js') }}"></script>


</body>
</html>
