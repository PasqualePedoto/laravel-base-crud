<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/ddb740f05b.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- HEADER --}}
    @include('includes.header')

    {{-- JUMBOTRON --}}
    @include('includes.jumbotron')

    {{-- MAIN --}}
    @yield('main-content')

    {{-- FOOTER --}}
    @include('includes.footer')
</body>
</html>