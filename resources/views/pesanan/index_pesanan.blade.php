@extends('layouts.app')

@section('container')

    <!-- Card -->
    <div class="flex gap-y-6 p-4 transition-all group size-full dark:bg-black">
        <img src="{{ asset('storage/products/kaos_sm.jpg') }}" alt="" class="mr-3 h-24 rounded-lg">
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

    @include('partials.bottom_nav')

@endsection