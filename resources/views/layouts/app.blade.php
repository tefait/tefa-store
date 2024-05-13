<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <title>TEFA STORE</title>
    @vite('resources/js/app.js')
</head>
<body class="h-screen">

    @include('partials.navbar')
    <div class="flex justify-center p-4 lg:py-8 lg:px-12">
        @yield('container')
    </div>

</body>
</html>
