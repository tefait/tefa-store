@extends('layouts.app')

@section('container')

<div class="lg:hidden flex justify-between pb-4 px-4">
    <div class="flex items-center">
        <div class="relative inline-block min-w-10 bg-orange-100 rounded-full">
            <img class="inline-block h-10 w-full" src="{{ asset('assets/maskot.png') }}" />
        </div>
        <div class="ms-3">
            <h3 class="text-sm font-bold text-gray-800 dark:text-white max-w-[15rem] truncate">Hai, Calon Pembeli!</h3>
            <p class="text-xs text-gray-600 dark:text-neutral-400 max-w-[15rem] truncate">Selamat Datang di Tefa Store</p>
        </div>
    </div>
    <div class="flex items-center">
      <a href="#" class="inline-flex justify-center items-center h-9 w-full gap-x-3 text-center bg-gradient-to-r from-secondary to-primary hover:from-primary hover:to-secondary duration-300 text-white text-sm font-medium rounded-3xl py-3 px-5">
        Masuk
      </a>
    </div>
</div>

<!-- Carousel -->
<div class="flex justify-center px-4 mb-2 lg:mb-4 lg:px-0">
  <div class="w-full rounded-xl">
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "isAutoPlay": true,
        "isInfiniteLoop": true,
        "speed": 4999
      }' class="relative">
      <div class="hs-carousel relative overflow-hidden h-[120px] sm:h-[220px] lg:h-[300px] rounded-xl">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel1.jpg') }}" alt="First slide" class="h-full w-full object-cover" />
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel2.jpg') }}" alt="Second slide" class="h-full w-full object-cover" />
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel3.jpg') }}" alt="Third slide" class="h-full w-full object-cover" />
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 hidden lg:inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 duration-300">
        <span class="text-2xl" aria-hidden="true">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 hidden lg:inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 duration-300">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </span>
      </button>

      <div class="hs-carousel-pagination flex justify-start absolute bottom-2 lg:bottom-3 start-5 space-x-1">
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
      </div>
    </div>
  </div>
</div>
<!-- End Carousel -->

<!-- Card Kategori -->
<div class="px-4 lg:px-0 mb-4 mx-auto">
  <!-- Grid -->
  <div class="grid grid-cols-3 gap-2">
    <div class="h-16 lg:h-28">
      <div class="flex justify-center items-center h-full w-full">
        <img src="{{ asset('assets/kategori/kategori1.jpg') }}" alt="Teaching Factory" class="h-full w-full object-cover rounded-lg" />
      </div>
    </div>
    <div class="h-16 lg:h-28">
      <div class="flex justify-center items-center h-full w-full">
        <img src="{{ asset('assets/kategori/kategori2.jpg') }}" alt="Software" class="h-full w-full object-cover rounded-lg" />
      </div>
    </div>
    <div class="h-16 lg:h-28">
      <div class="flex justify-center items-center h-full w-full">
        <img src="{{ asset('assets/kategori/kategori3.jpg') }}" alt="Game" class="h-full w-full object-cover rounded-lg" />
      </div>
    </div>
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Kategori -->

<!-- Menu -->
{{-- <div class="py-2 px-4 mt-2">
  <div class="flex justify-between items-center">
    <div class="relative inline-block">
      <i class="bx bxs-category text-3xl min-w-12 bg-orange-100 rounded-full text-orange-400 flex justify-center items-center h-12 w-full"></i>
      <p class="text-xs text-center mt-1">Menu</p>
    </div>
    <div class="relative inline-block">
      <i class="bx bxs-category text-3xl min-w-12 bg-orange-100 rounded-full text-orange-400 flex justify-center items-center h-12 w-full"></i>
      <p class="text-xs text-center mt-1">Menu</p>
    </div>
    <div class="relative inline-block">
      <i class="bx bxs-category text-3xl min-w-12 bg-orange-100 rounded-full text-orange-400 flex justify-center items-center h-12 w-full"></i>
      <p class="text-xs text-center mt-1">Menu</p>
    </div>
    <div class="relative inline-block">
      <i class="bx bxs-category text-3xl min-w-12 bg-orange-100 rounded-full text-orange-400 flex justify-center items-center h-12 w-full"></i>
      <p class="text-xs text-center mt-1">Menu</p>
    </div>
    <div class="relative inline-block">
      <i class="bx bxs-category text-3xl min-w-12 bg-orange-100 rounded-full text-orange-400 flex justify-center items-center h-12 w-full"></i>
      <p class="text-xs text-center mt-1">Menu</p>
    </div>
  </div>
</div> --}}
<!-- End Menu -->

<!-- Produk Terlaris -->
<div class="flex items-center gap-1 mt-4 px-4 mb-2 lg:mt-8 lg:px-0">
    <h3 class="text-base lg:text-xl font-bold text-gray-800 dark:text-white">Produk Terlaris</h3>
    <i class="bx bxs-hot text-xl lg:text-2xl text-red-500"></i>
</div>
<section class="relative h-full bg-orange-100 lg:rounded-xl py-4">
    <!-- Swiper -->
    <div class="swiper mySwiper h-full w-full">
        <div class="swiper-wrapper">
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-10 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
                    <i class="bx bxs-medal text-sm text-white"></i>
                    <p class="text-[10px] font-semibold text-white uppercase">
                      Top
                    </p>
                  </div>
                </div>
                <div class="py-1 lg:py-2 px-2 gap-1 text-start">
                  <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-hot text-2xl text-red-500 z-10 translate-x-1"></i>
                    <span class="flex justify-center items-center py-0.5 px-4 w-full text-xs font-semibold -translate-x-3 bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                      2160 Terjual
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-10 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
                    <i class="bx bxs-medal text-sm text-white"></i>
                    <p class="text-[10px] font-semibold text-white uppercase">
                      Top
                    </p>
                  </div>
                </div>
                <div class="py-1 lg:py-2 px-2 gap-1 text-start">
                  <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-hot text-2xl text-red-500 z-10 translate-x-1"></i>
                    <span class="flex justify-center items-center py-0.5 px-4 w-full text-xs font-semibold -translate-x-3 bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                      2160 Terjual
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-10 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
                    <i class="bx bxs-medal text-sm text-white"></i>
                    <p class="text-[10px] font-semibold text-white uppercase">
                      Top
                    </p>
                  </div>
                </div>
                <div class="py-1 lg:py-2 px-2 gap-1 text-start">
                  <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-hot text-2xl text-red-500 z-10 translate-x-1"></i>
                    <span class="flex justify-center items-center py-0.5 px-4 w-full text-xs font-semibold -translate-x-3 bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                      2160 Terjual
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-10 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
                    <i class="bx bxs-medal text-sm text-white"></i>
                    <p class="text-[10px] font-semibold text-white uppercase">
                      Top
                    </p>
                  </div>
                </div>
                <div class="py-1 lg:py-2 px-2 gap-1 text-start">
                  <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-hot text-2xl text-red-500 z-10 translate-x-1"></i>
                    <span class="flex justify-center items-center py-0.5 px-4 w-full text-xs font-semibold -translate-x-3 bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                      2160 Terjual
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-10 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
                    <i class="bx bxs-medal text-sm text-white"></i>
                    <p class="text-[10px] font-semibold text-white uppercase">
                      Top
                    </p>
                  </div>
                </div>
                <div class="py-1 lg:py-2 px-2 gap-1 text-start">
                  <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-hot text-2xl text-red-500 z-10 translate-x-1"></i>
                    <span class="flex justify-center items-center py-0.5 px-4 w-full text-xs font-semibold -translate-x-3 bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                      2160 Terjual
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col justify-center items-center h-full w-full bg-[#FDB840] border border-gray-200 shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="absolute bottom-5 opacity-30">
                  <svg class="size-20 lg:size-28" width="12" height="12" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="56" height="56" rx="10" fill="none"/>
                      <path d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z" fill="url(#paint0_linear_2204_541)"/>
                      <path d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z" fill="#ffffff"/>
                    <defs>
                      <linearGradient id="paint0_linear_2204_541" x1="24.734" y1="29.2284" x2="16.1543" y2="44.0429" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#ffffff"/>
                        <stop offset="0.92" stop-color="#f5f5f5"/>
                      </linearGradient>
                    </defs>
                  </svg>
                </div>
                <div class="py-1 px-2 gap-1 text-start">
                  <p class="text-white dark:text-neutral-300 text-sm lg:text-lg font-semibold">
                    Lihat Semua
                  </p>
                  <div class="flex justify-center items-center">
                    <i class="bx bxs-chevron-right-circle text-3xl lg:text-4xl text-white dark:text-neutral-300 z-10 translate-x-1"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
</section>
<!-- End Produk Terlaris -->

<!-- Produk Terbaru -->
<div class="flex items-center mt-4 px-4 mb-2 lg:mt-8 lg:px-0">
    <h3 class="text-base lg:text-xl font-bold text-gray-800 dark:text-white">Produk Terbaru</h3>
</div>
<section class="flex gap-4 relative h-full mb-4 px-4 lg:px-0">
    <div class="hidden xl:block h-full w-[calc(50%-180px)]">
        <img src="{{ asset('assets/produkterbaru.jpg') }}" alt="" class="h-full w-full rounded-lg">
    </div>
    <!-- Card Section -->
    <div class="w-full">
        <!-- Grid -->
        <div class="flex flex-wrap gap-3">
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 0, 0, 0.2)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
            <div class="flex h-full">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg mr-3">
                <div class="flex justify-between items-center w-full">
                    <div class="py-1 lg:py-2 px-2 gap-1 text-start w-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base">
                        Kaos
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 0, 0, 0.2)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
            <div class="flex h-full">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg mr-3">
                <div class="flex justify-between items-center w-full">
                    <div class="py-1 lg:py-2 px-2 gap-1 text-start w-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base">
                        Kaos
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 0, 0, 0.2)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
            <div class="flex h-full">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg mr-3">
                <div class="flex justify-between items-center w-full">
                    <div class="py-1 lg:py-2 px-2 gap-1 text-start w-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base">
                        Kaos
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 0, 0, 0.2)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
            <div class="flex h-full">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg mr-3">
                <div class="flex justify-between items-center w-full">
                    <div class="py-1 lg:py-2 px-2 gap-1 text-start w-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base">
                        Kaos
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                    </div>
                </div>
            </div>
        </a>
        <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

</section>
<!-- End Produk Terbaru -->

<!-- Kategori -->
{{-- <div class="lg:hidden py-2 px-4 mt-2">
  <div class="flex flex-wrap">
    <div class="w-1/3 p-1 border-r border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/kaos.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Kaos
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/totebag.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Totebag
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/tumbler.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Tumbler
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/mug.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Mug
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/ganci.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Ganci
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/pin.png') }}" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Pin
          </h3>
        </div>
      </a>
    </div>
  </div>
</div> --}}
<!-- End Kategori -->

@endsection
