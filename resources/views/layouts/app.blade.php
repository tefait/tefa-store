<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEFA STORE</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.navbar')
    <div class="p-4 lg:py-8 lg:px-12">
        @yield('container')
    </div>

</body>
</html>
