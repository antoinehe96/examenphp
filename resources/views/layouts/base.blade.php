<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon.png')}}">
    @yield('css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtunes</title>
</head>
<body>

@include('layouts.navigation')

<div class="container">
    <div class="container-fluid">
@yield('content')

</body>
@yield('js')
</html>
