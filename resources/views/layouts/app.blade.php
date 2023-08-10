<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    @yield('content')

    @vite(['resources/js/app.js'])
</body>

</html>
