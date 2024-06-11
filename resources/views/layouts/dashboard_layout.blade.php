<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    @include('layouts.css')
    <title>TEFA STORE</title>
    @vite('resources/js/app.js')
</head>

<body class="dark:bg-black">

    @include('partials.header')
    @include('partials.sidebar')
    <section id="content">
        @yield('dashboard')
    </section>
    @include('layouts.js')
</body>

</html>
