<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo | {{ $title }}</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div class="d-flex align-items-center" style="min-height: 100vh">
        @yield('content')
    </div>

    @vite(['resources/js/app.js'])
    @include('sweetalert::alert') {{-- javascript library of sweetalert2 --}}
</body>

</html>
