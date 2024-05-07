<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error({{ $error }});
            </script>
        @endforeach
    @endif
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


    </div>

    <footer class="bg-gray-100 dark:bg-gray-800">
        <div class="container grid grid-cols-1 p-4 mx-auto">
            <div class="col-span-1 space-y-4">
                <x-application-logo alt="logo" class="text-lg w-60"/>
                <div class="mr-2">
                    <p class="text-gray-500">
                        Kami memberikan solusi terdepan untuk kebutuhan part komputer Anda! Dengan Kualitas yang tak
                        diragukan lagi disertai dengan garansi. Temuka SSD, HDD, Flash Drive dan Part Lainnya hanya di
                        PixelPulse
                    </p>
                </div>
            </div>

            <div class=" mt-2 col-span-2 grid grid-cols-2 gap-4">
                <div class="grid grid-cols-1 gap-4 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Navigations</h3>
                        <div class="mt-4 space-y-4">
                            <a href="{{ route('product.index') }}"
                                class="text-base text-gray-500 hover:text-gray-900 block">Products Catalog</a>
                            <a href="{{ route('cart.index') }}"
                                class="text-base text-gray-500 hover:text-gray-900 block">Cart</a>
                            <a href="{{ route('order.index') }}"
                                class="text-base text-gray-500 hover:text-gray-900 block">Order</a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Contacts</h3>
                    <div class="mt-4 space-y-4">
                        <a href="https://wa.me/6285156105763"
                            class="text-base text-gray-500 hover:text-gray-900 block">WhatsApp</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Instagram</a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Facebook</a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Credits</h3>
                        <div class="mt-4 space-y-4">
                            <a href="https://www.smkn2sumedang.sch.id"
                                class="text-base text-gray-500 hover:text-gray-900 block">SMKN 2 Sumedang</a>
                            <a href="https://github.com/Rodeobazaar124"
                                class="text-base text-gray-500 hover:text-gray-900 block">Rodeobazaar124</a>
                            <a href="https://github.com/HafizHaekall"
                                class="text-base text-gray-500 hover:text-gray-900 block">HafizHaekall</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
