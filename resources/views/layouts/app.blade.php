<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Apexcharts -->
    <link rel="stylesheet" href="{{ asset('apexcharts/dist/apexcharts.css') }}">

    <title>TEFA STORE</title>
    @vite('resources/js/app.js')
</head>
<body class="h-screen dark:bg-black">

    @if (Request::is('dashboard'))
        @include('partials.header')
        @include('partials.sidebar')
    @else
        @include('partials.navbar')
    @endif

    <div class="xl:px-[320px]">
        @yield('container')
    </div>

    <div class="">
        @yield('dashboard')
    </div>

    <script src="{{ asset('lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('apexcharts/dist/apexcharts.min.js') }}"></script>

</body>
</html>
