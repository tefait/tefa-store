<!-- ========== HEADER ========== -->
<!-- SearchBox Modal -->
<div id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 lg:-start-24 z-[200] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
    <div
        class="m-3 opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto">
        <div
            class="flex flex-col lg:w-[45rem] bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-black dark:border-neutral-800 dark:shadow-neutral-700/70">
            <div class="relative"
                data-hs-combo-box='{
                    "preventVisibility": true,
                    "groupingType": "tabs",
                    "isOpenOnFocus": true,
                    {{-- "apiUrl": "{{route('product.api')}}", --}}
                    "apiUrl": "https://fakestoreapi.com/products",
                    "apiGroupField": "category",
                    "outputItemTemplate": "<div class=\"cursor-pointer p-2 space-y-0.5 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-black dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\" data-hs-combo-box-output-item><div class=\"flex justify-between items-center w-full\"><div data-hs-combo-box-output-item-field=\"title\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></img></div>",
                    "groupingTitleTemplate": "<button type=\"button\" class=\"capitalize py-1 px-2 inline-flex items-center gap-x-2 text-sm text-nowrap rounded-md border border-gray-200 bg-white text-gray-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-100 hs-combo-box-tab-active:bg-blue-600 hs-combo-box-tab-active:border-blue-600 hs-combo-box-tab-active:focus:border-blue-600 hs-combo-box-tab-active:text-white disabled:opacity-50 disabled:pointer-events-none dark:hs-combo-box-tab-active:bg-blue-500 dark:hs-combo-box-tab-active:text-white dark:hs-combo-box-tab-active:border-blue-500 dark:hs-combo-box-tab-active:focus:border-blue-500 dark:bg-black dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700\"></button>",
                    "tabsWrapperTemplate": "<div class=\"overflow-x-auto py-2 px-4 rounded-t-xl border-b border-gray-200 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-black dark:border-neutral-800\"></div>"
                }'>
                <div class="relative p-4 border-b border-gray-200 dark:border-neutral-800">
                    <div class="relative">
                        <div class="flex absolute inset-y-0 z-20 items-center pointer-events-none start-0 ps-3.5">
                            <i class="text-xl text-gray-500 bx bx-search dark:text-gray-300"></i>
                        </div>
                        <input
                            class="block py-3 w-full h-10 text-sm rounded-full border-gray-300 ps-10 pe-4 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-black dark:border-white dark:text-white dark:placeholder-gray-300 dark:focus:ring-neutral-600"
                            type="text" placeholder="Cari di Tefa Store" value="" autofocus=""
                            data-hs-combo-box-input="">
                    </div>
                </div>

                <!-- SearchBox Modal Body -->
                <div class="!mt-0" data-hs-combo-box-output="">
                    <div class="h-72 p-2 overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
                        data-hs-combo-box-output-items-wrapper=""></div>
                </div>
                <!-- SearchBox Modal Body -->
            </div>
        </div>
    </div>
</div>
<!-- End SearchBox -->

<!-- Navbar -->
<nav class="sticky top-0 z-[199] w-full">
    <div
        class="hidden justify-between items-center px-6 w-full h-7 lg:flex sm:px-8 lg:px-10 bg-primary dark:bg-secondary">
        <div class="flex flex-row gap-y-0 gap-x-2 py-2 sm:justify-end sm:py-0">
            <a class="text-xs text-white text-opacity-80 duration-300 hover:text-white" href="#">Hubungi Kami</a>
            <span class="text-xs text-white text-opacity-80">|</span>
            <a class="text-xs text-white text-opacity-80 duration-300 hover:text-white" href="#">Cara Order</a>
            <span class="text-xs text-white text-opacity-80">|</span>
            <a class="text-xs text-white text-opacity-80 duration-300 hover:text-white" href="#">FAQ</a>
        </div>

        <div class="flex justify-center items-center text-xs font-medium text-white text-opacity-80 whitespace-nowrap">
            <span>Ikuti Kami</span>
            <div class="flex gap-1 items-center ml-2 text-base font-medium whitespace-nowrap">
                <a href="#" class="text-white text-opacity-80  hover:text-opacity-100"><i
                        class="bx bxl-facebook-circle"></i></a>
                <a href="#" class="text-white text-opacity-80  hover:text-opacity-100"><i
                        class="bx bxl-youtube"></i></a>
                <a href="#" class="text-white text-opacity-80  hover:text-opacity-100"><i
                        class="bx bxl-instagram"></i></a>
            </div>
        </div>

        <div>
            <div class="inline-flex gap-x-1 items-center px-3 text-xs text-white text-opacity-80">
                <i class="mr-1 bx bx-globe"></i>
                <button class="text-white text-opacity-80 hover:text-opacity-100">ID</button>
                <span>|</span>
                <button class="text-white text-opacity-80 hover:text-opacity-100">EN</button>
            </div>

            <button type="button"
                class="inline-flex gap-x-2 items-center px-3 text-xs text-white text-opacity-80 hs-dark-mode hs-dark-mode-active:hidden hover:text-opacity-100"
                data-hs-theme-click-value="dark">
                <i class="bx bx-moon"></i>
                Dark
            </button>
            <button type="button"
                class="hidden gap-x-2 items-center px-3 text-xs text-white text-opacity-80 hs-dark-mode hs-dark-mode-active:inline-flex hover:text-opacity-100"
                data-hs-theme-click-value="light">
                <i class="bx bx-sun"></i>
                Light
            </button>
        </div>
    </div>

    <header
        class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-2 px-4 sm:px-[5vw] lg:py-0 dark:bg-black">
        <div class="relative w-full sm:flex sm:items-center sm:justify-between sm:px-4 lg:px-0" aria-label="Global">
            <div class="flex justify-between items-center w-full">
                <a href="/" class="hidden flex-none text-xl font-semibold dark:text-white sm:block"
                    aria-label="Logo"><img src="{{ cache('settings')['site-logo']['value'] }}" class="sm:h-12"
                        alt="Logo Tefa PPLG"></a>

                <div class="hidden py-3 ml-5 lg:flex">
                    <!-- Tombol Toko -->
                    <a href="{{ route('front.product') }}"
                        class="flex justify-center items-center px-2 py-1.5 w-24 text-sm font-medium text-gray-600 rounded-full duration-300 hover:text-black hover:bg-gray-100 dark:text-white">
                        <i class="text-2xl bx bxs-store me-1"></i>
                        Toko
                    </a>
                    <!-- End Tombol Toko  -->
                </div>

                <div
                    class="flex flex-col gap-x-0 gap-y-4 mr-3 w-full sm:flex-row sm:items-center sm:justify-between sm:gap-y-0 sm:gap-x-5 sm:mx-5">
                    <!-- SearchBox -->
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 z-20 items-center pointer-events-none start-0 ps-3.5">
                            <i class="text-xl text-gray-500 bx bx-search dark:text-gray-300"></i>
                        </div>
                        <input
                            class="block py-3 ps-10 pe-4 w-[100%] h-[34px] lg:h-10 border-gray-300 rounded-full text-sm cursor-pointer disabled:opacity-50 disabled:pointer-events-none dark:bg-black dark:border-white dark:text-white dark:placeholder-gray-300 dark:focus:ring-neutral-600"
                            type="text" placeholder="Cari di Tefa Store" value=""
                            data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
                            readonly>
                    </div>
                </div>

                <div class="flex gap-1 items-center">
                    <!-- Notification -->
                    <button type="button" class="inline-flex relative items-center text-sm font-medium"
                        data-hs-overlay="#hs-scroll-inside-body-modal">
                        <i
                            class="px-2 py-1 text-2xl text-gray-800 rounded-full duration-300 bx bx-bell dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-neutral-700"></i>
                        <span class="flex absolute top-0 end-0 mt-0.5 me-[5px]">
                            <span
                                class="inline-flex absolute bg-red-400 rounded-full opacity-75 animate-ping size-full dark:bg-red-600"></span>
                            <span class="relative inline-flex bg-red-500 text-white rounded-full py-[1px] px-[5px]"
                                style="font-size: 10px; line-height:14px;">
                                2
                            </span>
                        </span>
                    </button>
                    <!-- Cart -->
                    <button type="button" class="inline-flex relative items-center text-sm font-medium"
                        data-hs-overlay="#hs-overlay-right">
                        <i
                            class="px-2 py-1 text-2xl text-gray-800 rounded-full duration-300 bx bx-cart dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-neutral-700"></i>
                        <span class="flex absolute top-0 end-0 mt-0.5 me-[5px]">
                            <span class="relative inline-flex bg-red-500 text-white rounded-full py-[1px] px-[5px]"
                                style="font-size: 10px; line-height:14px;">
                                5
                            </span>
                        </span>
                    </button>
                    <!-- Hamburger -->
                    <button type="button" class="inline-flex relative items-center text-sm font-medium lg:hidden"
                        data-hs-overlay="#hs-overlay-bottom" aria-label="Toggle Menu">
                        <i
                            class="px-2 py-1 text-2xl text-gray-800 rounded-full duration-300 bx bx-menu-alt-right dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-neutral-700"></i>
                    </button>
                </div>

                <div class="hidden justify-center mx-4 lg:flex">
                    <span class="h-8 border border-gray-100 dark:border-gray-800"></span>
                </div>

                <div class="">
                    <div id="navbar-collapse-with-animation"
                        class="hidden overflow-hidden w-full transition-all duration-300 lg:flex hs-collapse">
                        <div class="flex gap-2 justify-center">
                            <a class="inline-flex gap-x-3 justify-center items-center px-4 py-3 h-9 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-neutral-10 border-secondary text-secondary"
                                href="{{ route('customer.login') }}">
                                Masuk
                            </a>
                            <a class="inline-flex gap-x-3 justify-center items-center px-5 py-3 h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary"
                                href="{{ route('register') }}">
                                Daftar
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="hs-dropdown [--placement:bottom-right] hidden relative lg:inline-flex ms-2">
                    <button id="hs-dropdown-with-header" type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-neutral-800" src="{{ asset('assets/team/hafiz.jpg') }}" alt="Profile Image">
                        <span class="block absolute bottom-0 bg-green-500 rounded-full ring-2 ring-white end-0 size-3 dark:ring-neutral-900"></span>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-50 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700" aria-labelledby="hs-dropdown-with-header">
                        <div class="px-5 py-3 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
                            <h3 class="text-base font-bold text-gray-800 dark:text-white">Prof. H. Hafiz Haekal</h3>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">hafizhaekal03@gmail.com</p>
                        </div>
                        <div class="py-2 mt-2 first:pt-0 last:pb-0">
                            <a href="#" class="flex gap-x-2 items-center px-3 py-1.5 text-sm text-gray-800 rounded-lg duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-800">
                                <i class="text-xl bx bx-user"></i>
                                Akun Saya
                            </a>
                            <a href="#" class="flex gap-x-2 items-center px-3 py-1.5 text-sm text-gray-800 rounded-lg duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-800">
                                <i class="text-xl bx bx-shopping-bag"></i>
                                Pembelian
                            </a>
                            <hr class="my-2">
                            <a href="#" class="flex gap-x-2 items-center px-3 py-1.5 text-sm text-red-600 rounded-lg duration-300 dark:font-bold hover:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-800">
                                <i class="text-xl bx bx-log-out-circle"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </header>
</nav>

<!-- Off canvas Notification -->
<div id="hs-scroll-inside-body-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
        <div
            class="flex overflow-hidden flex-col max-h-full bg-white rounded-xl border shadow-sm pointer-events-auto dark:bg-black dark:border-neutral-800 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center px-4 py-3 border-b dark:border-neutral-800">
                <h3 class="text-base font-bold text-gray-800 dark:text-white">
                    Notifikasi
                </h3>
                <button type="button"
                    class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-scroll-inside-body-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="overflow-y-auto p-0 divide-y dark:divide-neutral-800">
                <!-- Card -->
                <a href="#"
                    class="flex gap-x-4 gap-y-6 items-center px-4 py-3 transition-all duration-300 group size-full hover:bg-gray-100 dark:bg-black dark:hover:bg-neutral-900">
                    <div
                        class="inline-flex justify-center items-center px-2 py-1 bg-blue-100 rounded-full border-4 border-blue-50 dark:border-blue-700 dark:bg-blue-600">
                        <i class="flex-shrink-0 text-2xl text-gray-800 bx bx-envelope dark:text-neutral-200"></i>
                    </div>
                    <div class="w-full">
                        <p
                            class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">
                            Judul notifikasi</p>
                        <p
                            class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">
                            Ini adalah pesan dari notifikasi</p>
                    </div>
                    <div class="flex relative justify-center items-center me-2">
                        <span
                            class="inline-flex absolute bg-red-400 rounded-full opacity-75 animate-ping size-full dark:bg-red-600"></span>
                        <span class="inline-flex relative bg-red-500 rounded-full size-3"></span>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a href="#"
                    class="flex gap-x-4 gap-y-6 items-center px-4 py-3 transition-all duration-300 group size-full hover:bg-gray-100 dark:bg-black dark:hover:bg-neutral-900">
                    <div
                        class="inline-flex justify-center items-center px-2 py-1 bg-blue-100 rounded-full border-4 border-blue-50 dark:border-blue-700 dark:bg-blue-600">
                        <i class="flex-shrink-0 text-2xl text-gray-800 bx bx-envelope dark:text-neutral-200"></i>
                    </div>
                    <div class="w-full">
                        <p
                            class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">
                            UTBK/SNBT</p>
                        <p
                            class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">
                            Selamat anda dinyatakan lulus!</p>
                    </div>
                    <span class="w-20 text-xs text-gray-500 text-end dark:text-white">13 Jun</span>
                </a>
                <!-- End Card -->
            </div>
            <div class="flex justify-end items-center px-4 py-1.5 border-t dark:border-neutral-800">
                <a href="#"
                    class="inline-flex items-center text-xs font-medium text-gray-800 duration-300 hover:text-opacity-70 dark:text-white dark:hover:text-opacity-70">
                    Lihat semua
                    <i class="text-lg bx bx-right-arrow-alt ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Off canvas Notification -->

<!-- Off canvas Cart -->
<div id="hs-overlay-right"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-[400ms] transform h-full max-w-full sm:max-w-sm 2xl:max-w-md w-full z-[200] bg-white dark:bg-black dark:border-neutral-700"
    tabindex="-1">
    <div class="flex justify-between items-center px-4 py-3 shadow-md dark:border dark:border-neutral-800">
        <h3 class="text-base font-bold text-gray-800 dark:text-white">
            Keranjang
        </h3>
        <button type="button"
            class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            data-hs-overlay="#hs-overlay-right">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex justify-between items-center px-4 mb-4 max-w-full h-9 border-b dark:border-neutral-800">
        <p class="inline-flex gap-x-2 items-center text-xs text-gray-600 dark:text-gray-300">
            2 produk
        </p>
        <button type="submit"
            class="inline-flex gap-x-2 items-center text-xs font-semibold text-red-600 duration-300 dark:text-red-500 hover:text-opacity-60 dark:hover:text-opacity-60">
            Hapus semua
        </button>
    </div>

    <!-- Stepper -->
    @include('components.navbar.stepper')
    <!-- End Stepper -->

    <div class="divide-y-8 divide-gray-100 dark:divide-neutral-900
        max-h-[calc(100vh-300px)] sm:max-h-[calc(100vh-250px)] overflow-y-auto
        overflow-x-hidden [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:rounded-full
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:rounded-full
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
        data-hs-accordion-always-open>
        <!-- Card -->
        <div class="flex gap-y-6 p-4 transition-all group size-full dark:bg-black">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="mr-3 h-20 rounded-lg">
            <div class="w-full">
                <div>
                    <p class="text-gray-600 dark:text-neutral-300 max-w-[16rem] truncate text-[14px]">Kaos pendek
                        cotton combed 30s</p>
                    <p class="block text-sm font-bold text-gray-800 dark:text-white">Rp50.000</p>
                </div>

                <div class="flex justify-between">
                    <!-- Input Number -->
                    <div class="inline-block px-1 py-1 mt-2 bg-white rounded-3xl border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700"
                        data-hs-input-number="">
                        <div class="flex gap-x-1.5 items-center">
                            <button type="button"
                                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                data-hs-input-number-decrement="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <input
                                class="p-0 w-8 text-sm text-center text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white"
                                type="text" value="1" data-hs-input-number-input="">
                            <button type="button"
                                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                data-hs-input-number-increment="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- End Input Number -->
                    <button class="flex items-center mt-2">
                        <i
                            class="text-xl text-red-600 duration-300 bx bx-trash dark:text-red-500 hover:text-opacity-60 dark:hover:text-opacity-60"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Card -->
        <!-- Card -->
        <div class="flex gap-y-6 p-4 transition-all group size-full dark:bg-black">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="mr-3 h-20 rounded-lg">
            <div class="w-full">
                <div>
                    <p class="text-gray-600 dark:text-neutral-300 max-w-[16rem] truncate text-[14px]">Kaos pendek
                        cotton combed 30s</p>
                    <p class="block text-sm font-bold text-gray-800 dark:text-white">Rp50.000</p>
                </div>

                <div class="flex justify-between">
                    <!-- Input Number -->
                    <div class="inline-block px-1 py-1 mt-2 bg-white rounded-3xl border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700"
                        data-hs-input-number="">
                        <div class="flex gap-x-1.5 items-center">
                            <button type="button"
                                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                data-hs-input-number-decrement="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <input
                                class="p-0 w-8 text-sm text-center text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white"
                                type="text" value="1" data-hs-input-number-input="">
                            <button type="button"
                                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                data-hs-input-number-increment="">
                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- End Input Number -->
                    <button class="flex items-center mt-2">
                        <i
                            class="text-xl text-red-600 duration-300 bx bx-trash dark:text-red-500 hover:text-opacity-60 dark:hover:text-opacity-60"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <nav class="fixed bottom-0 z-20 w-full border-gray-200 start-0">
        <div
            class="flex justify-between items-center px-4 max-w-full h-10 bg-purple-100 rounded-t-lg border border-purple-600">
            <span class="inline-flex gap-x-2 items-center text-sm text-purple-700">
                <i class="text-2xl bx bxs-package"></i>
                <p>Ayo checkout belanjaanmu sekarang!</p>
            </span>
        </div>
        <div class="flex justify-between items-center px-4 py-2 bg-white dark:bg-black">
            <h4 class="text-sm text-gray-800 dark:text-white">Total <span class="text-base font-bold">Rp100.000</span>
            </h4>
            <form action="#" method="">
                @csrf
                <button type="submit"
                    class="inline-flex gap-x-3 justify-center items-center px-7 py-5 h-9 text-sm font-semibold text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                    Beli (2)
                </button>
            </form>
        </div>
    </nav>
</div>
<!-- End Off canvas Cart -->
<div id="hs-overlay-bottom"
    class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-[400ms] transform size-full z-[200] bg-white border-b dark:bg-black dark:border-neutral-800 hidden">
    <div
        class="mt-10 max-w-full h-full max-h-full opacity-0 transition-all hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
        <div class="flex flex-col max-w-full h-full max-h-full bg-white pointer-events-auto dark:bg-black">
            <div class="flex justify-between items-center px-4 py-3 border-b dark:border-neutral-800">
                <h3 class="text-base font-bold text-gray-800 dark:text-white">
                    Menu Utama
                </h3>
                <button type="button"
                    class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-overlay-bottom">
                    <span class="sr-only">Close modal</span>
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="overflow-y-auto divide-y-8 divide-gray-100 dark:divide-neutral-900">

                <div class="flex gap-2 justify-center px-4 pt-4">
                    <a href="#"
                        class="inline-flex gap-x-3 justify-center items-center px-4 py-3 w-full h-9 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-purple-100 border-secondary text-secondary">
                        Masuk
                    </a>
                    <a href="#"
                        class="inline-flex gap-x-3 justify-center items-center px-5 py-3 w-full h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                        Daftar
                    </a>
                </div>

                {{-- <div class="flex justify-between px-4 pt-4">
                    <div class="flex items-center">
                        <div class="inline-block relative min-w-14">
                            <img class="inline-block w-full h-14 rounded-full" src="{{ asset('assets/team/hafiz.jpg') }}" alt="Profile Image">
                            <span class="block absolute bottom-0 bg-green-500 rounded-full ring-2 ring-white end-0 size-3 dark:ring-neutral-900"></span>
                        </div>
                        <div class="ms-3">
                            <h3 class="text-base font-bold text-gray-800 dark:text-white max-w-[15rem] truncate">Prof. H. Hafiz Haekal</h3>
                            <p class="text-sm text-gray-600 dark:text-neutral-500 max-w-[15rem] truncate">hafizhaekal03@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <i class="text-2xl text-gray-800 bx bx-pencil dark:text-white"></i>
                    </div>
                </div> --}}

                <div class="mt-4 text-sm">
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mt-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-notepad"></i>
                            <p class="text-sm">
                                Pesanan Saya
                            </p>
                        </span>
                        <span class="flex items-center">
                            <span
                                class="inline-flex items-center py-[1px] px-[5px] rounded-full text-[11.2px] font-medium bg-red-500 text-white"
                                style="font-size: 10px; line-height:14px;">
                                2
                            </span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-history"></i>
                            <p class="text-sm">
                                Riwayat Transaksi
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-star"></i>
                            <p class="text-sm">
                                Penilaian
                            </p>
                        </span>
                        <span class="flex items-center">
                            <p class="text-xs text-gray-500 dark:text-neutral-300 me-1">Beri Penilaian</p>
                            <span class="inline-block bg-red-500 rounded-full size-2"></span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-heart"></i>
                            <p class="text-sm">
                                Favorit
                            </p>
                        </span>
                        <span class="flex items-center">
                            <span
                                class="inline-flex items-center py-[1px] px-[5px] rounded-full text-[11.2px] font-medium bg-red-500 text-white"
                                style="font-size: 10px; line-height:14px;">
                                5
                            </span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mb-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-cog"></i>
                            <p class="text-sm">
                                Pengaturan
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                </div>
                <div class="text-sm">
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mt-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-phone-call"></i>
                            <p class="text-sm">
                                Hubungi Kami
                            </p>
                        </span>
                        <span class="flex items-center text-xs text-green-500 dark:text-green-400">WhatsApp<i
                                class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i></span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-package"></i>
                            <p class="text-sm">
                                Cara Order
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mb-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-message-rounded"></i>
                            <p class="text-sm">
                                FAQ
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========== END HEADER ========== -->
