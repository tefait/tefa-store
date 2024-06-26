@extends('layouts.app')

@section('container')

    @include('partials.sidebar_favorit')

    <!-- Mobile Version -->
    <nav class="flex justify-between gap-1 sm:hidden sticky top-[56px] z-[199] px-4 pb-2 mb-4 w-full bg-white" aria-label="Tabs" role="tablist">
        <!-- Tombol Urutkan -->
        <button type="button" class="inline-flex items-center justify-between gap-x-1.5 py-1.5 px-4 w-[32%] rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white" data-hs-overlay="#hs-overlay-bottom-u">
            Urutkan
            <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>
        <!-- End Tombol Urutkan -->
        <!-- Tombol Status -->
        <button type="button" class="inline-flex items-center justify-between gap-x-1.5 py-1.5 px-4 w-[30%] rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white" data-hs-overlay="#hs-overlay-bottom-s">
            Status
            <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>
        <!-- End Tombol Status -->
        <!-- Tombol Kategori -->
        <button type="button" class="inline-flex items-center justify-between gap-x-1.5 py-1.5 px-4 w-[32%] rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white" data-hs-overlay="#hs-overlay-bottom-k">
            Kategori
            <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m6 9 6 6 6-6" />
            </svg>
        </button>
        <!-- End Tombol Kategori -->
    </nav>
    <!-- Offcanvas Tombol Urutkan -->
    <div id="hs-overlay-bottom-u" class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform h-auto size-full z-[300] rounded-t-2xl bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hidden" tabindex="-1">
        <div class="flex justify-between items-center pt-4 pb-2 px-4">
          <h3 class="font-bold text-base text-gray-800 dark:text-white">
            Urutkan
          </h3>
          <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-bottom-u">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="">
            <ul class="divide-y">
                <li>
                    <label for="hs-vertical-radio-in-form-um-1" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Semua</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-1" checked="">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-um-2" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Terbaru disimpan</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-2">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-um-3" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Terlama disimpan</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-3">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-um-4" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Harga tertinggi</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-4">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-um-5" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Harga terendah</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-5">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-um-6" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Pembelian terbanyak</span>
                      <input type="radio" name="hs-vertical-radio-in-form-um" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-um-6">
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Offcanvas Tombol Urutkan -->

    <!-- Offcanvas Tombol Status -->
    <div id="hs-overlay-bottom-s" class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform h-auto size-full z-[300] rounded-t-2xl bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hidden" tabindex="-1">
        <div class="flex justify-between items-center pt-4 pb-2 px-4">
          <h3 class="font-bold text-base text-gray-800 dark:text-white">
            Status
          </h3>
          <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-bottom-s">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="">
            <ul class="divide-y">
                <li>
                    <label for="hs-vertical-radio-in-form-sm-1" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Semua</span>
                      <input type="radio" name="hs-vertical-radio-in-form-sm" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-sm-1" checked="">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-sm-2" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Pre-order</span>
                      <input type="radio" name="hs-vertical-radio-in-form-sm" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-sm-2">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-sm-3" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Tersedia</span>
                      <input type="radio" name="hs-vertical-radio-in-form-sm" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-sm-3">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-sm-4" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Tidak tersedia</span>
                      <input type="radio" name="hs-vertical-radio-in-form-sm" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-sm-4">
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Offcanvas Tombol Status -->

    <!-- Offcanvas Tombol Kategori -->
    <div id="hs-overlay-bottom-k" class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform h-auto size-full z-[300] rounded-t-2xl bg-white border-b dark:bg-neutral-800 dark:border-neutral-700 hidden" tabindex="-1">
        <div class="flex justify-between items-center pt-4 pb-2 px-4">
          <h3 class="font-bold text-base text-gray-800 dark:text-white">
            Kategori
          </h3>
          <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-bottom-k">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="">
            <ul class="divide-y">
                <li>
                    <label for="hs-vertical-radio-in-form-k-1" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Semua</span>
                      <input type="radio" name="hs-vertical-radio-in-form" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-1" checked="">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-k-2" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Design & Printing</span>
                      <input type="radio" name="hs-vertical-radio-in-form" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-2">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-k-3" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Software</span>
                      <input type="radio" name="hs-vertical-radio-in-form" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-3">
                    </label>
                </li>
                <li>
                    <label for="hs-vertical-radio-in-form-k-4" class="flex justify-between items-center py-4 ps-4 pe-5 w-full bg-white hover:bg-gray-100 text-sm dark:bg-neutral-900 dark:text-neutral-400 duration-150">
                      <span class="text-sm font-semibold text-gray-800 dark:text-neutral-400">Game</span>
                      <input type="radio" name="hs-vertical-radio-in-form" class="shrink-0 size-5 border-gray-200 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-4">
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Offcanvas Tombol Kategori -->

    <!-- End Mobile Version -->

    <section class="sm:ms-[270px] lg:ms-72 lg:mt-4 px-4 mb-8">
        <nav class="hidden sm:flex lg:hidden justify-end gap-1 mt-4 pb-2 mb-4 w-full bg-white border-b border-gray-100" aria-label="Tabs" role="tablist">
            <button type="button" class="inline-flex items-center justify-center gap-x-1.5 py-2 px-4 w-[32%] rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
                Urutkan
                <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>
        </nav>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-2 lg:gap-4">
            <!-- Card -->
            <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                        <div class="block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2">
                            <i class="bx bxs-heart text-xl text-red-500"></i>
                        </div>
                    </div>
                    <div class="pt-1 px-1.5 gap-1 text-start h-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                        Kaos pendek cotton combed 30s
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm mt-1">Rp50.000</p>
                        <div class="flex items-center gap-1">
                            <span class="line-through text-[11px] text-gray-400">Rp75.000</span>
                            <span class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            33%
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-3.5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                        <div class="mt-1">
                            <button type="button" class="w-full py-[3px] px-auto inline-flex items-center justify-center gap-x-2 text-xs font-bold rounded-full border-[1.5px] border-primary text-primary hover:bg-primary hover:text-white disabled:opacity-50 disabled:pointer-events-none duration-300">
                                <i class="bx bx-cart text-base"></i>
                                Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                        <div class="block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2">
                            <i class="bx bxs-heart text-xl text-red-500"></i>
                        </div>
                    </div>
                    <div class="pt-1 px-1.5 gap-1 text-start h-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                        Kaos pendek cotton combed 30s
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm mt-1">Rp50.000</p>
                        <div class="flex items-center gap-1">
                            <span class="line-through text-[11px] text-gray-400">Rp75.000</span>
                            <span class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            33%
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-3.5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                        <div class="mt-1">
                            <button type="button" class="w-full py-[3px] px-auto inline-flex items-center justify-center gap-x-2 text-xs font-bold rounded-full border-[1.5px] border-primary text-primary hover:bg-primary hover:text-white disabled:opacity-50 disabled:pointer-events-none duration-300">
                                <i class="bx bx-cart text-base"></i>
                                Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                        <div class="block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2">
                            <i class="bx bxs-heart text-xl text-red-500"></i>
                        </div>
                    </div>
                    <div class="pt-1 px-1.5 gap-1 text-start h-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                        Kaos pendek cotton combed 30s
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm mt-1">Rp50.000</p>
                        <div class="flex items-center gap-1">
                            <span class="line-through text-[11px] text-gray-400">Rp75.000</span>
                            <span class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            33%
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-3.5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                        <div class="mt-1">
                            <button type="button" class="w-full py-[3px] px-auto inline-flex items-center justify-center gap-x-2 text-xs font-bold rounded-full border-[1.5px] border-primary text-primary hover:bg-primary hover:text-white disabled:opacity-50 disabled:pointer-events-none duration-300">
                                <i class="bx bx-cart text-base"></i>
                                Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
            <!-- Card -->
            <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                        <div class="block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2">
                            <i class="bx bxs-heart text-xl text-red-500"></i>
                        </div>
                    </div>
                    <div class="pt-1 px-1.5 gap-1 text-start h-full">
                        <p class="text-gray-600 dark:text-neutral-300 text-sm truncate-20-chars" style="max-width: 100%;">
                        Kaos pendek cotton combed 30s
                        </p>
                        <p class="block font-bold text-gray-800 dark:text-white text-sm mt-1">Rp50.000</p>
                        <div class="flex items-center gap-1">
                            <span class="line-through text-[11px] text-gray-400">Rp75.000</span>
                            <span class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            33%
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-3.5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                        <div class="mt-1">
                            <button type="button" class="w-full py-[3px] px-auto inline-flex items-center justify-center gap-x-2 text-xs font-bold rounded-full border-[1.5px] border-primary text-primary hover:bg-primary hover:text-white disabled:opacity-50 disabled:pointer-events-none duration-300">
                                <i class="bx bx-cart text-base"></i>
                                Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    </section>

<!-- ========== FOOTER ========== -->
<footer class="sm:[270px] lg:ms-72 max-w-[85rem] border-t mt-4 px-4 pt-4 lg:px-0 lg:py-10">
    <div class="flex justify-between">
      <div class="col-span-full hidden lg:col-span-1 lg:block w-1/4">
        <a class="flex-none text-xl font-semibold dark:text-white hidden lg:block" href="#" aria-label="Logo"><img src="{{ asset('assets/img/logo2.png') }}" class="lg:h-12" alt="Logo Tefa PPLG"></a>
        <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
      </div>
      <!-- End Col -->

      <!-- Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

        <div>
          <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Tefa PPLG</h4>

          <div class="mt-3 grid space-y-2 lg:space-y-3 text-sm">
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Tentang Kami</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Desain & Printing</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Software</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Game</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Blog</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Syarat & Ketentuan</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Kebijakan Privasi</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Members</a></p>
          </div>
        </div>
        <!-- End Col -->

        <div>
          <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Bantuan</h4>
          <div class="mt-3 grid space-y-2 lg:space-y-3 text-sm">
            <span class="space-y-0.5">
              <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">WhatsApp</p>
              <h4><a href="#" class="text-sm font-semibold text-gray-900 hover:text-primary dark:text-neutral-100 dark:hover:text-primary duration-300">0878-9481-8815</a></h4>
            </span>
            <span class="space-y-0.5">
              <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">Email</p>
              <h4><a href="#" class="text-sm font-semibold text-gray-900 hover:text-primary dark:text-neutral-100 dark:hover:text-primary duration-300">tefaitrpl@gmail.com</h4>
            </span>
          </div>

          <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100 mt-3">Panduan</h4>
          <div class="grid space-y-2 lg:space-y-3 text-sm">
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Cara Order</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Pembayaran</a></p>
            <p><a href="#" class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">FAQ (Tanya Jawab)</a></p>
          </div>
        </div>
        <!-- End Col -->

        <div>
          <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Metode Pembayaran</h4>

          <div class="mt-3 flex items-center space-x-3 text-sm">
            <img src="{{ asset('assets/img/BJB.png') }}" alt="BJB" class="h-7">
            <img src="{{ asset('assets/img/DANA.png') }}" alt="DANA" class="h-5">
            <img src="{{ asset('assets/img/OVO.svg') }}" alt="OVO" class="h-5">
          </div>

          <h4 class="mt-7 text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Jasa Pengiriman</h4>

          <div class="mt-3 grid space-y-3 text-sm">
            <img src="{{ asset('assets/img/JNE.png') }}" alt="JNE" class="h-5">
          </div>

          <h4 class="mt-7 text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Ikuti Kami</h4>

            <div class="flex mt-3 space-x-2 items-center font-medium text-3xl whitespace-nowrap">
              <a href="#" class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i class="bx bxl-facebook-circle"></i></a>
              <a href="#" class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i class="bx bxl-youtube"></i></a>
              <a href="#" class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </div>

    <div class="lg:hidden flex items-center justify-center sm:justify-start mt-3 border-t border-gray-200">
      <div class="flex flex-col py-2">
        <a class="flex justify-center sm:justify-start" href="#" aria-label="Logo"><img src="{{ asset('assets/img/logo2.png') }}" class="h-12" alt="Logo Tefa PPLG"></a>
        <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
      </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

    <!-- Bottom Navbar -->
    @include('partials.bottom_nav')
    <!-- End Bottom Navbar -->

@endsection
