@extends('layouts.app')

@section('container')
    <div class="flex justify-between px-4 pb-4 lg:hidden">
        <div class="flex items-center">
            <div class="inline-block relative bg-orange-100 rounded-full min-w-10">
                <img class="inline-block w-full h-10" src="/assets/img/maskot.png" />
            </div>
            <div class="ms-3">
                <h3 class="text-sm font-bold text-gray-800 dark:text-white max-w-[15rem] truncate">Hai, Calon Pembeli!</h3>
                <p class="text-xs text-gray-600 dark:text-neutral-400 max-w-[15rem] truncate">Selamat Datang di Tefa Store
                </p>
            </div>
        </div>
        <div class="flex items-center">
            <a href="#"
                class="inline-flex gap-x-3 justify-center items-center px-5 py-3 w-full h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                Masuk
            </a>
        </div>
    </div>

    <!-- Carousel -->
    <section class="flex relative justify-center px-4 mb-2 w-full h-full group lg:my-4 lg:px-0">
        <button id="prevBtnCar"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -left-5 translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M7 1L1 7l6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <button id="nextBtnCar"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -right-5 -translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M1 1l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="swiper myCarousel relative overflow-hidden h-[130px] sm:h-[220px] lg:h-[300px] rounded-xl">
            <div class="w-full h-full swiper-wrapper">
                @foreach (explode(';', cache('settings')['carousel-image']['value']) as $carousel)
                    <div class="flex justify-center items-center w-full h-full swiper-slide">
                        <img src="{{ $carousel }}" alt="Slide Pertama" class="object-cover w-full h-full" />
                    </div>
                @endforeach

            </div>
            <div class="flex absolute bottom-2 justify-start px-3 swiper-pagination lg:bottom-3 lg:px-5"></div>
        </div>
    </section>

    <!-- End Carousel -->

    <!-- Card Kategori -->
    <div class="px-4 mx-auto mb-4 lg:px-0">
        <!-- Grid -->
        <div class="grid grid-cols-3 gap-2">
            <div class="h-16 lg:h-28">
                <div class="flex justify-center items-center w-full h-full">
                    <img src="/assets/kategori/kategori1.jpg" alt="Teaching Factory"
                        class="object-cover w-full h-full rounded-lg" />
                </div>
            </div>
            <div class="h-16 lg:h-28">
                <div class="flex justify-center items-center w-full h-full">
                    <img src="/assets/kategori/kategori2.jpg" alt="Software"
                        class="object-cover w-full h-full rounded-lg" />
                </div>
            </div>
            <div class="h-16 lg:h-28">
                <div class="flex justify-center items-center w-full h-full">
                    <img src="/assets/kategori/kategori3.jpg" alt="Game"
                        class="object-cover w-full h-full rounded-lg" />
                </div>
            </div>
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Kategori -->

    <!-- Menu -->
    {{-- <div class="px-4 py-2 mt-2">
  <div class="flex justify-between items-center">
    <div class="inline-block relative">
      <i class="flex justify-center items-center w-full h-12 text-3xl text-orange-400 bg-orange-100 rounded-full bx bxs-category min-w-12"></i>
      <p class="mt-1 text-xs text-center">Menu</p>
    </div>
    <div class="inline-block relative">
      <i class="flex justify-center items-center w-full h-12 text-3xl text-orange-400 bg-orange-100 rounded-full bx bxs-category min-w-12"></i>
      <p class="mt-1 text-xs text-center">Menu</p>
    </div>
    <div class="inline-block relative">
      <i class="flex justify-center items-center w-full h-12 text-3xl text-orange-400 bg-orange-100 rounded-full bx bxs-category min-w-12"></i>
      <p class="mt-1 text-xs text-center">Menu</p>
    </div>
    <div class="inline-block relative">
      <i class="flex justify-center items-center w-full h-12 text-3xl text-orange-400 bg-orange-100 rounded-full bx bxs-category min-w-12"></i>
      <p class="mt-1 text-xs text-center">Menu</p>
    </div>
    <div class="inline-block relative">
      <i class="flex justify-center items-center w-full h-12 text-3xl text-orange-400 bg-orange-100 rounded-full bx bxs-category min-w-12"></i>
      <p class="mt-1 text-xs text-center">Menu</p>
    </div>
  </div>
</div> --}}
    <!-- End Menu -->

    <!-- Produk Terlaris -->
    <div class="flex gap-1 items-center px-4 mt-8 mb-2 lg:px-0">
        <h3 class="text-base font-bold text-gray-800 lg:text-xl dark:text-white">Produk Terlaris</h3>
        <img src="/assets/icons/best.png" class="h-5 lg:h-6">
    </div>
    <section
        class="relative h-full group bg-gradient-to-tr from-orange-500 from-30% via-orange-300 via-10% to-orange-200 to-90% bg-opacity-30 lg:rounded-xl py-4">
        <button id="prevBtnPT"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -left-5 translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M7 1L1 7l6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <button id="nextBtnPT"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -right-5 -translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M1 1l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <!-- Swiper -->
        <div class="w-full h-full swiper mySwiperPT">
            <div class="swiper-wrapper">
                <!-- Card -->
                @foreach ($top_sales as $product)
                    <a href="{{ route('front.show_product', $product->slug) }}"
                        class="swiper-slide slide-tsh flex justify-center h-[265px] w-40 lg:h-[300px] lg:w-[190px]">
                        <div
                            class="flex flex-col w-full h-full bg-white rounded-md shadow-sm group lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex flex-col justify-center items-center h-[65%]">
                                <img src="{{ $product->image }}" class="h-full object-cover rounded-t-md lg:rounded-t-lg" />
                                <div
                                    class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[144px] left-0 lg:top-[174px]">
                                    <i class="text-sm text-white bx bxs-medal"></i>
                                    <p class="text-[10px] font-semibold text-white uppercase">
                                        Top
                                    </p>
                                </div>
                            </div>
                            <div class="gap-1 px-2 py-1 lg:py-2 text-start h-auto">
                                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate max-w-full">
                                    {{ $product->name }}
                                </p>
                                <p class="block text-sm font-bold text-gray-800 dark:text-white">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                <div class="flex gap-1 items-center">
                                    <span
                                        class="line-through text-[11px] text-gray-400">Rp{{ number_format($product->price, 0, ',', '.') }}</span>
                                    <span
                                        class="py-[1px] px-1 inline-flex items-centcacheer text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                        33%
                                    </span>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mb-2">
                                <i class="z-10 text-2xl text-red-500 translate-x-1 bx bxs-hot"></i>
                                <span
                                    class="flex justify-center items-center px-4 py-0.5 w-full text-xs font-semibold text-white bg-gradient-to-r from-yellow-300 to-red-500 rounded-full -translate-x-3">
                                    {{ $product->orders_count }} Terjual
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach

                <!-- End Card -->

                <!-- Open All Card -->
                <div class="swiper-slide slide-tsh flex justify-center h-[265px] w-40 lg:h-[300px] lg:w-[190px]">
                    <div
                        class="group flex flex-col justify-center items-center h-full w-full bg-[#FDB840] shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:shadow-neutral-700/70">
                        <div class="absolute bottom-5 opacity-30">
                            <svg class="size-20 lg:size-28" width="12" height="12" viewBox="0 0 56 56"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="56" height="56" rx="10" fill="none" />
                                <path
                                    d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z"
                                    fill="url(#paint0_linear_2204_541)" />
                                <path
                                    d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z"
                                    fill="#ffffff" />
                                <defs>
                                    <linearGradient id="paint0_linear_2204_541" x1="24.734" y1="29.2284"
                                        x2="16.1543" y2="44.0429" gradientUnits="userSpaceOnUse">
                                        <stop offset="0%" stop-color="#ffffff" />
                                        <stop offset="0.92" stop-color="#f5f5f5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="gap-1 px-2 py-1 text-start">
                            <p class="text-sm font-semibold text-white dark:text-neutral-300 lg:text-lg">
                                Lihat Semua
                            </p>
                            <div class="flex justify-center items-center">
                                <i
                                    class="z-10 text-3xl text-white translate-x-1 bx bxs-chevron-right-circle lg:text-4xl dark:text-neutral-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Open All Card -->
            </div>
        </div>
    </section>
    <!-- End Produk Terlaris -->

    <!-- Produk Terbaru -->
    <div class="flex gap-2 items-center px-4 mt-8 mb-4 lg:px-0">
        <h3 class="text-base font-bold text-gray-800 lg:text-xl dark:text-white">Produk Terbaru</h3>
        <img src="/assets/icons/new.png" class="h-5 lg:h-6">
    </div>
    <section class="flex gap-4 relative lg:h-[302px] mb-4 px-4 lg:px-0">
        <div class="hidden xl:block h-full w-[402px]">
            <img src="/assets/img/produkterbaru.jpg" alt="" class="w-full h-full rounded-lg">
        </div>
        <!-- Card Section -->
        <div class="w-full">
            <!-- Grid -->
            <div class="flex flex-wrap gap-3">
                <!-- Card -->
                @foreach ($newest as $product)
                    <a class="group flex flex-col h-16 lg:h-[145px] z-10 w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900"
                        href="{{ route('front.show_product', $product->slug) }}"
                        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 163, 154, 1)';"
                        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                        <div class="flex h-full">
                            <img src="{{ $product->image }}" alt="" class="rounded-l-md lg:rounded-l-lg">
                            <div class="flex justify-between items-center w-full">
                                <div class="gap-1 p-2 w-full lg:p-4 text-start">
                                    <p class="text-xs text-gray-600 dark:text-neutral-300 lg:text-base truncate-1-line">
                                        {{ $product->name }}
                                    </p>
                                    <p class="block text-sm font-bold text-gray-800 dark:text-white lg:text-lg">
                                        Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <!-- End Card -->

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->
    </section>
    <!-- End Produk Terbaru -->

    <!-- Produk Yang Akan Datang -->
    <div class="flex gap-1 items-center px-4 mt-8 mb-4 lg:px-0">
        <h3 class="text-base font-bold text-gray-800 lg:text-xl dark:text-white">Segera Hadir</h3>
        <img src="/assets/icons/soon.png" class="h-5 lg:h-6">
    </div>
    <section class="relative h-full group">
        <button id="prevBtnSH"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -left-5 translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M7 1L1 7l6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <button id="nextBtnSH"
            class="hidden lg:block bg-white border rounded-full p-3 absolute z-30 top-[45%] -right-5 -translate-x-10 group-hover:translate-x-0 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
                <path d="M1 1l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
        <div class="circlePosition w-[80%] h-[80%] bg-primary rounded-[100%] absolute z-0 top-[25%] blur-[250px]"></div>
        <!-- Swiper -->
        <div class="w-full h-full swiper mySwiperSH">
            <div class="swiper-wrapper lg:-start-4">
                <!-- Card -->
                @foreach (explode(';', cache('settings')['upcoming-product']['value']) as $product)
                    <div class="swiper-slide slide-tsh flex justify-center h-[275px] w-40 lg:h-[320px] lg:w-[190px]">
                        <div
                            class="flex flex-col w-full h-full bg-white rounded-md shadow-sm group lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="flex justify-center items-center h-full">
                                <img src="{{ $product }}" class="object-cover h-full rounded-md lg:rounded-lg" />
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Card -->

                <!-- Card -->
                <div class="swiper-slide slide-tsh flex justify-center h-[275px] w-40 lg:h-[320px] lg:w-[190px]">
                    <div
                        class="flex flex-col justify-center items-center w-full h-full rounded-md shadow-sm group bg-primary lg:rounded-lg dark:bg-neutral-900 dark:shadow-neutral-700/70">
                        <div class="absolute bottom-5 opacity-30">
                            <svg class="size-20 lg:size-28" width="12" height="12" viewBox="0 0 56 56"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="56" height="56" rx="10" fill="none" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.7326 11.968C21.9637 11.9693 20.5321 13.4049 20.5334 15.1738C20.5321 16.9427 21.965 18.3782 23.7339 18.3795H26.9345V15.1751C26.9358 13.4062 25.5029 11.9706 23.7326 11.968C23.7339 11.968 23.7339 11.968 23.7326 11.968M23.7326 20.5184H15.2005C13.4316 20.5197 11.9987 21.9553 12 23.7242C11.9974 25.4931 13.4303 26.9286 15.1992 26.9312H23.7326C25.5016 26.9299 26.9345 25.4944 26.9332 23.7255C26.9345 21.9553 25.5016 20.5197 23.7326 20.5184V20.5184Z"
                                    fill="#ffffff" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.0001 23.7242C44.0014 21.9553 42.5684 20.5197 40.7995 20.5184C39.0306 20.5197 37.5977 21.9553 37.599 23.7242V26.9312H40.7995C42.5684 26.9299 44.0014 25.4944 44.0001 23.7242ZM35.4666 23.7242V15.1738C35.4679 13.4062 34.0363 11.9706 32.2674 11.968C30.4985 11.9693 29.0656 13.4049 29.0669 15.1738V23.7242C29.0643 25.4931 30.4972 26.9286 32.2661 26.9312C34.035 26.9299 35.4679 25.4944 35.4666 23.7242Z"
                                    fill="#93c5fd" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32.2661 44.0322C34.035 44.0309 35.4679 42.5953 35.4666 40.8264C35.4679 39.0575 34.035 37.622 32.2661 37.6207H29.0656V40.8264C29.0642 42.594 30.4972 44.0295 32.2661 44.0322ZM32.2661 35.4804H40.7995C42.5684 35.4791 44.0013 34.0436 44 32.2747C44.0026 30.5058 42.5697 29.0702 40.8008 29.0676H32.2674C30.4985 29.0689 29.0656 30.5045 29.0669 32.2734C29.0656 34.0436 30.4972 35.4791 32.2661 35.4804V35.4804Z"
                                    fill="#ffffff" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 32.2746C11.9987 34.0435 13.4316 35.479 15.2005 35.4804C16.9694 35.479 18.4024 34.0435 18.401 32.2746V29.0688H15.2005C13.4316 29.0702 11.9987 30.5057 12 32.2746ZM20.5334 32.2746V40.825C20.5308 42.5939 21.9637 44.0295 23.7326 44.0321C25.5016 44.0308 26.9345 42.5952 26.9332 40.8263V32.2772C26.9358 30.5083 25.5029 29.0728 23.7339 29.0702C21.9637 29.0702 20.5321 30.5057 20.5334 32.2746C20.5334 32.2759 20.5334 32.2746 20.5334 32.2746Z"
                                    fill="#93c5fd" />
                            </svg>
                        </div>
                        <div class="gap-1 px-2 py-1 text-start">
                            <p class="text-sm font-semibold text-white dark:text-neutral-300 lg:text-lg">
                                Lihat Semua
                            </p>
                            <div class="flex justify-center items-center">
                                <i
                                    class="z-10 text-3xl text-white translate-x-1 bx bxs-chevron-right-circle lg:text-4xl dark:text-neutral-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    <!-- End Produk Yang Akan Datang -->

    <section class="">
        {{-- <div class="circlePosition w-[200px] h-[400px] bg-[#e14def] rounded-[100%] z-0 blur-[150px]"></div> --}}
    </section>

    <!-- Testimonials -->
    <div class="overflow-hidden mt-4">
        <div class="relative max-w-[85rem] px-4 py-4 sm:py-6 lg:py-10 lg:px-0 mx-auto">
            <!-- Title -->
            <div class="flex justify-around items-center mb-6 w-full">
                <span>
                    <svg class="text-gray-300 size-8 sm:size-10 lg:size-16 dark:text-neutral-500" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path
                            d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <span>
                    <h2
                        class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500 lg:text-2xl">
                        Testimoni
                    </h2>
                </span>
                <span class="hs-tooltip">
                    <a href="/testimoni">
                        <i
                            class="bx bxs-right-top-arrow-circle text-[32px] sm:text-[40px] lg:text-[48px] text-primary hover:"></i>
                    </a>
                    <span
                        class="inline-block absolute invisible z-10 px-2 py-1.5 text-xs font-medium text-white rounded shadow-sm opacity-0 transition-opacity hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible bg-primary dark:text-black"
                        role="tooltip">
                        Lihat semua
                    </span>
                </span>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:px-3">
                @foreach ($testimoni as $t)
                    <!-- Card -->
                    <a href="{{ route('front.show_product', $t->product->slug) . '#T' . $t->id }}"
                        class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                        onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                        <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                            <div class="flex-auto p-4 md:p-6">
                                <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                    " {{ $t->kutipan }} "
                                </p>
                            </div>

                            <div class="p-4 rounded-b-xl md:px-7">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                            src="{{ $t->customer->image }}" alt="{{ $t->customer->name }}">
                                    </div>

                                    <div class="flex gap-2 justify-between w-full">
                                        <div class="grow ms-3">
                                            <p
                                                class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                                {{ $t->customer->name }}
                                            </p>
                                            <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                {{ $t->instansi }}
                                            </p>
                                        </div>
                                        <!-- Rating -->
                                        <div class="flex gap-0.5 items-center">
                                            @for ($i = 0; $i <= $t->penilaian; $i++)
                                                <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            @endfor

                                        </div>
                                        <!-- End Rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                @endforeach

            </div>
            <!-- End Grid -->

            <!-- Grid -->
            <div class="grid grid-cols-2 gap-6 mt-16 sm:gap-12 lg:grid-cols-3 lg:gap-8">
                <!-- Stats -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 sm:text-xl">Produk</h4>
                    <p class="mt-2 text-4xl font-bold sm:mt-3 sm:text-6xl text-primary">{{ $count['product'] }}</p>
                    <p class="mt-1 text-gray-400">Dijamin berkualitas</p>
                </div>
                <!-- End Stats -->

                <!-- Stats -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 sm:text-xl">Lebih dari</h4>
                    <p class="mt-2 text-4xl font-bold sm:mt-3 sm:text-6xl text-primary">{{ $count['order'] > 1 ? $count['order'] - 1 : $count['order'] }}+</p>
                    <p class="mt-1 text-gray-400">Melayani pesanan</p>
                </div>
                <!-- End Stats -->

                <!-- Stats -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 sm:text-xl">Pelanggan puas</h4>
                    <p class="mt-2 text-4xl font-bold sm:mt-3 sm:text-6xl text-primary">99%</p>
                    <p class="mt-1 text-gray-400">Happy customer</p>
                </div>
                <!-- End Stats -->
            </div>
            <!-- End Grid -->

            <!-- SVG Element -->
            <div class="absolute bottom-0 transform end-0 lg:translate-x-32" aria-hidden="true">
                <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z"
                        fill="currentColor" class="fill-[#FDB840]" />
                    <path
                        d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z"
                        fill="currentColor" class="fill-[#00a39a]" />
                    <path
                        d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z"
                        fill="currentColor" class="fill-[#014993]" />
                </svg>
            </div>
            <!-- End SVG Element -->
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- End Footer -->

    <!-- Bottom Navbar -->
    @include('partials.bottom_nav')
    <!-- End Bottom Navbar -->
@endsection
