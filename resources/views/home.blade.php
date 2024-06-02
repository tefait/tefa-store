@extends('layouts.app')

@section('container')

<div class="lg:hidden flex justify-between pb-4 px-4">
    <div class="flex items-center">
        <div class="relative inline-block min-w-10 bg-orange-100 rounded-full">
            <img class="inline-block h-10 w-full" src="{{ asset('assets/img/maskot.png') }}" />
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
<div class="flex items-center gap-1 mt-8 px-4 mb-2 lg:px-0">
    <h3 class="text-base lg:text-xl font-bold text-gray-800 dark:text-white">Produk Terlaris</h3>
    <img src="{{ asset('assets/icons/best.png') }}" class="h-5 lg:h-6">
</div>
<section class="relative h-full bg-gradient-to-tr from-orange-500 from-30% via-orange-300 via-10% to-orange-200 to-90% bg-opacity-30 lg:rounded-xl py-4">
  <div class="bg-white rounded-full p-4 absolute z-30 top-[50%] right-0">
    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 14">
      <path d="M1 1l6 6-6 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </div>
    <!-- Swiper -->
    <div class="swiper mySwiper h-full w-full">
        <div class="swiper-wrapper">
            <!-- Card -->
            <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
              <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-t-md lg:rounded-t-lg" />
                  <div class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
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
                  <div class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
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
                  <div class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
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
                  <div class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
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
                  <div class="flex items-center justify-center h-4 w-12 bg-[#FDB840] rounded-tr-md p-1 ps-0 absolute top-[128px] left-0 lg:top-[192px]">
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
              <div class="group flex flex-col justify-center items-center h-full w-full bg-[#FDB840] shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:shadow-neutral-700/70">
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
<div class="flex items-center gap-2 mt-8 px-4 mb-4 lg:px-0">
    <h3 class="text-base lg:text-xl font-bold text-gray-800 dark:text-white">Produk Terbaru</h3>
    <img src="{{ asset('assets/icons/new.png') }}" class="h-5 lg:h-6">
</div>
<section class="flex gap-4 relative lg:h-[302px] mb-4 px-4 lg:px-0">
    <div class="hidden xl:block h-full w-[402px]">
        <img src="{{ asset('assets/img/produkterbaru.jpg') }}" alt="" class="h-full w-full rounded-lg">
    </div>
    <!-- Card Section -->
    <div class="w-full">
        <!-- Grid -->
        <div class="flex flex-wrap gap-3">
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] z-10 w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 163, 154, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
          <div class="flex h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg">
              <div class="flex justify-between items-center w-full">
                <div class="p-2 lg:p-4 gap-1 text-start w-full">
                  <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base truncate-1-line">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                </div>
              </div>
          </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] z-10 w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 163, 154, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
          <div class="flex h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg">
              <div class="flex justify-between items-center w-full">
                <div class="p-2 lg:p-4 gap-1 text-start w-full">
                  <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base truncate-1-line">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                </div>
              </div>
          </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] z-10 w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 163, 154, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
          <div class="flex h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg">
              <div class="flex justify-between items-center w-full">
                <div class="p-2 lg:p-4 gap-1 text-start w-full">
                  <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base truncate-1-line">
                    Kaos pendek cotton combed 30s
                  </p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm lg:text-lg">Rp50.000</p>
                </div>
              </div>
          </div>
        </a>
        <!-- End Card -->
        <!-- Card -->
        <a class="group flex flex-col h-16 lg:h-[145px] z-10 w-[calc(50%-6px)] bg-white rounded-md lg:rounded-xl transition dark:bg-neutral-900" href="#"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 8px rgba(0, 163, 154, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
          <div class="flex h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="rounded-l-md lg:rounded-l-lg">
              <div class="flex justify-between items-center w-full">
                <div class="p-2 lg:p-4 gap-1 text-start w-full">
                  <p class="text-gray-600 dark:text-neutral-300 text-xs lg:text-base truncate-1-line">
                    Kaos pendek cotton combed 30s
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

<!-- Produk Yang Akan Datang -->
<div class="flex items-center gap-1 mt-8 mb-4 px-4 lg:px-0">
  <h3 class="text-base lg:text-xl font-bold text-gray-800 dark:text-white">Segera Hadir</h3>
  <img src="{{ asset('assets/icons/soon.png') }}" class="h-5 lg:h-6">
</div>
<section class="relative h-full">
  <div class="circlePosition w-[80%] h-[80%] bg-primary rounded-[100%] absolute z-0 top-[25%] blur-[250px]"></div>
  <!-- Swiper -->
  <div class="swiper mySwiper h-full w-full">
    <div class="swiper-wrapper lg:-start-4">
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="flex justify-center items-center h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="h-full object-cover rounded-md lg:rounded-lg" />
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="flex justify-center items-center h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="h-full object-cover rounded-md lg:rounded-lg" />
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="flex justify-center items-center h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="h-full object-cover rounded-md lg:rounded-lg" />
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="flex justify-center items-center h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="h-full object-cover rounded-md lg:rounded-lg" />
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col h-full w-full bg-white shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="flex justify-center items-center h-full">
            <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="h-full object-cover rounded-md lg:rounded-lg" />
          </div>
        </div>
      </div>
      <!-- End Card -->
      <!-- Card -->
      <div class="flex justify-center swiper-slide h-[245px] w-36 lg:h-[310px] lg:w-52">
        <div class="group flex flex-col justify-center items-center h-full w-full bg-primary shadow-sm rounded-md lg:rounded-lg dark:bg-neutral-900 dark:shadow-neutral-700/70">
          <div class="absolute bottom-5 opacity-30">
            <svg class="size-20 lg:size-28" width="12" height="12" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="56" height="56" rx="10" fill="none"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7326 11.968C21.9637 11.9693 20.5321 13.4049 20.5334 15.1738C20.5321 16.9427 21.965 18.3782 23.7339 18.3795H26.9345V15.1751C26.9358 13.4062 25.5029 11.9706 23.7326 11.968C23.7339 11.968 23.7339 11.968 23.7326 11.968M23.7326 20.5184H15.2005C13.4316 20.5197 11.9987 21.9553 12 23.7242C11.9974 25.4931 13.4303 26.9286 15.1992 26.9312H23.7326C25.5016 26.9299 26.9345 25.4944 26.9332 23.7255C26.9345 21.9553 25.5016 20.5197 23.7326 20.5184V20.5184Z" fill="#ffffff"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M44.0001 23.7242C44.0014 21.9553 42.5684 20.5197 40.7995 20.5184C39.0306 20.5197 37.5977 21.9553 37.599 23.7242V26.9312H40.7995C42.5684 26.9299 44.0014 25.4944 44.0001 23.7242ZM35.4666 23.7242V15.1738C35.4679 13.4062 34.0363 11.9706 32.2674 11.968C30.4985 11.9693 29.0656 13.4049 29.0669 15.1738V23.7242C29.0643 25.4931 30.4972 26.9286 32.2661 26.9312C34.035 26.9299 35.4679 25.4944 35.4666 23.7242Z" fill="#93c5fd"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M32.2661 44.0322C34.035 44.0309 35.4679 42.5953 35.4666 40.8264C35.4679 39.0575 34.035 37.622 32.2661 37.6207H29.0656V40.8264C29.0642 42.594 30.4972 44.0295 32.2661 44.0322ZM32.2661 35.4804H40.7995C42.5684 35.4791 44.0013 34.0436 44 32.2747C44.0026 30.5058 42.5697 29.0702 40.8008 29.0676H32.2674C30.4985 29.0689 29.0656 30.5045 29.0669 32.2734C29.0656 34.0436 30.4972 35.4791 32.2661 35.4804V35.4804Z" fill="#ffffff"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 32.2746C11.9987 34.0435 13.4316 35.479 15.2005 35.4804C16.9694 35.479 18.4024 34.0435 18.401 32.2746V29.0688H15.2005C13.4316 29.0702 11.9987 30.5057 12 32.2746ZM20.5334 32.2746V40.825C20.5308 42.5939 21.9637 44.0295 23.7326 44.0321C25.5016 44.0308 26.9345 42.5952 26.9332 40.8263V32.2772C26.9358 30.5083 25.5029 29.0728 23.7339 29.0702C21.9637 29.0702 20.5321 30.5057 20.5334 32.2746C20.5334 32.2759 20.5334 32.2746 20.5334 32.2746Z" fill="#93c5fd"/>
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
<!-- End Produk Yang Akan Datang -->

<section class="">
  {{-- <div class="circlePosition w-[200px] h-[400px] bg-[#e14def] rounded-[100%] z-0 blur-[150px]"></div> --}}
</section>

<!-- Testimonials -->
<div class="overflow-hidden mt-4">
  <div class="relative max-w-[85rem] px-4 py-4 sm:py-6 lg:py-10 lg:px-0 mx-auto">
    <!-- Title -->
    <div class="flex justify-around items-center w-full mb-6">
      <span>
        <svg class="size-8 sm:size-10 lg:size-16 text-gray-300 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z" fill="currentColor"/>
        </svg>
      </span>
      <span>
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 text-xl lg:text-2xl font-bold">
          Testimoni
        </h2>
      </span>
      <span class="hs-tooltip">
        <a href="#"><i class="bx bxs-right-top-arrow-circle text-[32px] sm:text-[40px] lg:text-[48px] text-primary hover:"></i></a>
        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1.5 px-2 bg-primary text-xs font-medium text-white dark:text-black rounded shadow-sm" role="tooltip">
          Lihat semua
        </span>
      </span>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card -->
      <div class="flex h-auto cursor-pointer rounded-xl hover:scale-[101%] duration-300"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
        <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
          <div class="flex-auto p-4 md:p-6">
            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
              " Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ab est ex, esse neque molestias nobis nisi, expedita dolorum beatae, dignissimos odit recusandae amet adipisci! "
            </p>
          </div>

          <div class="p-4 rounded-b-xl md:px-7">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="{{ asset('assets/team/pak-asep.jpg') }}" alt="Image Testimonials">
              </div>

              <div class="flex justify-between gap-2 w-full">
                <div class="grow ms-3">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Asep Wayhudin
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Ketua Program Keahlian PPLG
                  </p>
                </div>
                <!-- Rating -->
                <div class="flex items-center gap-0.5">
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                </div>
                <!-- End Rating -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex h-auto cursor-pointer rounded-xl hover:scale-[101%] duration-300"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
        <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
          <div class="flex-auto p-4 md:p-6">
            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
              " Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ab est ex, esse neque molestias nobis nisi, expedita dolorum beatae, dignissimos odit recusandae amet adipisci! "
            </p>
          </div>

          <div class="p-4 rounded-b-xl md:px-7">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="{{ asset('assets/team/hafiz.jpg') }}" alt="Image Testimonials">
              </div>

              <div class="flex justify-between gap-2 w-full">
                <div class="grow ms-3">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Hafiz Haekal
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Frontend Developer
                  </p>
                </div>
                <!-- Rating -->
                <div class="flex items-center gap-0.5">
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                </div>
                <!-- End Rating -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex h-auto cursor-pointer rounded-xl hover:scale-[101%] duration-300"
        style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
        onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
        <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
          <div class="flex-auto p-4 md:p-6">
            <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
              " Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ab est ex, esse neque molestias nobis nisi, expedita dolorum beatae, dignissimos odit recusandae amet adipisci! "
            </p>
          </div>

          <div class="p-4 rounded-b-xl md:px-7">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full" src="{{ asset('assets/team/azfa.jpg') }}" alt="Image Testimonials">
              </div>

              <div class="flex justify-between gap-2 w-full">
                <div class="grow ms-3">
                  <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                    Muhammad Azfa
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Backend Developer
                  </p>
                </div>
                <!-- Rating -->
                <div class="flex items-center gap-0.5">
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                </div>
                <!-- End Rating -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->

    <!-- Grid -->
    <div class="mt-16 grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
      <!-- Stats -->
      <div>
        <h4 class="text-lg sm:text-xl font-semibold text-gray-800">Produk</h4>
        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-primary">32</p>
        <p class="mt-1 text-gray-400">Dijamin berkualitas</p>
      </div>
      <!-- End Stats -->

      <!-- Stats -->
      <div>
        <h4 class="text-lg sm:text-xl font-semibold text-gray-800">Lebih dari</h4>
        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-primary">500k</p>
        <p class="mt-1 text-gray-400">Melayani pesanan</p>
      </div>
      <!-- End Stats -->

      <!-- Stats -->
      <div>
        <h4 class="text-lg sm:text-xl font-semibold text-gray-800">Pelanggan puas</h4>
        <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-primary">99%</p>
        <p class="mt-1 text-gray-400">Happy customer</p>
      </div>
      <!-- End Stats -->
    </div>
    <!-- End Grid -->

    <!-- SVG Element -->
    <div class="absolute bottom-0 end-0 transform lg:translate-x-32" aria-hidden="true">
      <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z" fill="currentColor" class="fill-[#FDB840]"/>
        <path d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z" fill="currentColor" class="fill-[#00a39a]"/>
        <path d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z" fill="currentColor" class="fill-[#014993]"/>
      </svg>
    </div>
    <!-- End SVG Element -->
  </div>
</div>
<!-- End Testimonials -->

<!-- Footer -->
@include('partials.footer')
<!-- End Footer -->

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
