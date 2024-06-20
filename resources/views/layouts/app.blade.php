<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @include('layouts.css')
    <title>TEFA STORE</title>
    
    @vite('resources/js/app.js')
</head>

<body class="dark:bg-black">

    @if (Request::is('dashboard'))
        @include('partials.header')
        @include('partials.sidebar')
    @else
        @include('partials.navbar')
    @endif

    <div class="sm:container sm:px-[5vw] mb-14 sm:mb-0">
        @yield('container')
    </div>
    @include('layouts.js')

</body>

</html>
