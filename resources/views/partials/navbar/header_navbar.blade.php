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
                        alt="Logo Tefa PPLG">
                </a>

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
                            onclick="HSComboBox.getInstance('#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger [data-hs-combo-box]', true).element.setCurrent();"
                            class="block py-3 ps-10 pe-4 w-[100%] h-[34px] lg:h-10 border-gray-300 rounded-full text-sm cursor-pointer disabled:opacity-50 disabled:pointer-events-none dark:bg-black dark:border-white dark:text-white dark:placeholder-gray-300 dark:focus:ring-neutral-600"
                            type="text" placeholder="Cari di Tefa Store" value="{{ request()->q }}"
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
                        data-hs-overlay="#hs-overlay-right" id="ocbtn">
                        <i
                            class="px-2 py-1 text-2xl text-gray-800 rounded-full duration-300 bx bx-cart dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-neutral-700"></i>
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

                {{-- Tombol Dekstop --}}
                @auth('customer')
                    <div class="hs-dropdown [--placement:bottom-right] hidden relative lg:inline-flex ms-2">
                        <button id="hs-dropdown-with-header" type="button"
                            class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                            <img class="inline-block size-full rounded-full ring-2 ring-white dark:ring-neutral-800"
                                src="{{ auth('customer')->user()->image }}" alt="Profile Image">
                            <span
                                class="block absolute bottom-0 bg-green-500 rounded-full ring-2 ring-white end-0 size-3 dark:ring-neutral-900"></span>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-50 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700"
                            aria-labelledby="hs-dropdown-with-header">
                            <div class="px-5 py-3 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
                                <h3 class="text-base font-bold text-gray-800 dark:text-white">
                                    {{ auth('customer')->user()->name }}</h3>
                                <p class="text-sm text-gray-600 dark:text-neutral-400"></p>
                            </div>
                            <div class="py-2 mt-2 first:pt-0 last:pb-0">
                                <a href="{{ route('customer.settings_form') }}"
                                    class="flex  gap-x-2 items-center px-3 py-1.5 text-sm text-gray-800 rounded-lg duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-800">
                                    <i class="text-xl bx bx-user"></i>
                                    Akun Saya
                                </a>
                                <a href="{{ route('customer.orders') }}"
                                    class="flex gap-x-2 items-center px-3 py-1.5 text-sm text-gray-800 rounded-lg duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-neutral-800">
                                    <i class="text-xl bx bx-shopping-bag"></i>
                                    Pembelian
                                </a>
                                <hr class="my-2">
                                <a href="{{ route('customer.logout') }}"
                                    class="flex gap-x-2 items-center px-3 py-1.5 text-sm text-red-600 rounded-lg duration-300 dark:font-bold hover:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-800">
                                    <i class="text-xl bx bx-log-out-circle"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="">
                        <div id="navbar-collapse-with-animation"
                            class="hidden overflow-hidden w-full transition-all duration-300 lg:flex hs-collapse">
                            <div class="flex gap-2 justify-center">
                                <a href="{{ route('customer.login') }}"
                                    class="relative w-full px-[26px] py-2 rounded-full font-medium text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700">
                                    Masuk
                                </a>
                                <a href="{{ route('customer.register') }}"
                                    class="inline-flex justify-center items-center px-7 py-2 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </header>
</nav>
