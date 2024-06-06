@extends('layouts.app')

@section('container')

    @include('partials.sidebar-toko')

    <!-- Mobile Version -->
    <nav class="flex justify-center sm:hidden sticky top-[56px] z-[199] mb-4 w-full bg-white border-b border-gray-100" aria-label="Tabs" role="tablist">
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary w-full py-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="horizontal-scroll-tab-item-1" data-hs-tab="#horizontal-scroll-tab-preview" aria-controls="horizontal-scroll-tab-preview" role="tab">
            Semua
        </button>
        <span class="border my-4"></span>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary w-full py-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-scroll-tab-item-2" data-hs-tab="#horizontal-scroll-tab-2" aria-controls="horizontal-scroll-tab-2" role="tab">
            DNP
        </button>
        <span class="border my-4"></span>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary w-full py-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-scroll-tab-item-3" data-hs-tab="#horizontal-scroll-tab-3" aria-controls="horizontal-scroll-tab-3" role="tab">
            Software
        </button>
        <span class="border my-4"></span>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary w-full py-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-scroll-tab-item-4" data-hs-tab="#horizontal-scroll-tab-4" aria-controls="horizontal-scroll-tab-4" role="tab">
            Game
        </button>
        <span class="border my-4"></span>
        <button type="button" class="w-[50%] p-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-primary focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <i class="bx bx-sort text-xl"></i>
        </button>
    </nav>
    <!-- End Mobile Version -->

    <section class="sm:ms-[270px] lg:ms-72 px-4 mb-8">
        <nav class="hidden sm:flex justify-end py-2 gap-2 mb-4">
            <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-primary text-primary bg-blue-50 dark:border-neutral-200 dark:text-white active">
                Semua
            </button>
            <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-neutral-300 text-gray-500 dark:border-neutral-200 dark:text-white">
                Terbaru
            </button>
            <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-neutral-300 text-gray-500 dark:border-neutral-200 dark:text-white">
                Terlaris
            </button>
            <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-neutral-300 text-gray-500 dark:border-neutral-200 dark:text-white">
                Harga Tertinggi
            </button>
            <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-neutral-300 text-gray-500 dark:border-neutral-200 dark:text-white">
                Harga Terendah
            </button>
        </nav>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="swiper-slide flex justify-center h-[100%] w-[100%] mb-2">
                <div class="group flex flex-col h-full w-full shadow-sm sm:shadow-md rounded-md lg:rounded-lg">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
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
                        <div class="mt-1">
                            <span class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                                <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                  <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                Stok tersedia
                            </span>
                        </div>
                        <div class="flex items-center mt-1 gap-1 text-xs text-gray-500">
                            <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                            </svg>
                            <p>5.0</p>
                            <span class="border border-gray-500 h-[0.1px]"></span>
                            <p>2rb+ terjual</p>
                        </div>
                    </div>
                </div>
            </div>
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
            <img src="{{ asset('assets/img/BRI.svg') }}" alt="BRI" class="h-5">
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
  
    <div class="lg:hidden flex items-center justify-center sm:justify-start mt-3 border-t border-gray-200 dark:border-neutral-700">
      <div class="flex flex-col py-2">
        <a class="flex justify-center sm:justify-start" href="#" aria-label="Logo"><img src="{{ asset('assets/img/logo2.png') }}" class="h-12" alt="Logo Tefa PPLG"></a>
        <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
      </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

    <!-- Bottom Navbar -->
    @include('partials.bottom-nav')
    <!-- End Bottom Navbar -->

@endsection
