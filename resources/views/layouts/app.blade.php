<!DOCTYPE html>
<html lang="en" class="!scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if (config('env') === 'production')
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
    @yield('head')
    @include('layouts.css')
    <title>TEFA STORE</title>

    @vite('resources/js/app.js')
</head>

<body class="dark:bg-blacks">
    @include('layouts.error_handler')

    @if (Request::is('dashboard'))
        @include('partials.header')
        @include('partials.sidebar')
    @else
        @include('partials.navbar')
    @endif

    <div class="sm:container sm:px-[5vw] mb-14 sm:mb-0 hidden sm:block">
        @yield('container')
    </div>

    @include('layouts.js')
    <div
        class="absolute top-0 z-[999] bg-white flex sm:hidden justify-center items-center w-full h-[100dvh] text-lg text-center font-semibold">
        <i class="bx bx-warn"></i>
        <div class="p-4 sm:p-6 text-center overflow-y-auto">
            <!-- Icon -->
            <span
                class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
            </span>
            <!-- End Icon -->

            <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                Dalam pengembangan
            </h3>
            <p class="text-gray-500 dark:text-neutral-500">
                Tampilan untuk perangkat seluler belum didukung untuk saat ini
            </p>
        </div>

    </div>
</body>

</html>
