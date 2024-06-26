@extends('layouts.app')

@section('container')

<div class="circlePosition w-[200px] h-[400px] bg-[#e14def] rounded-[100%] absolute z-0 blur-[150px]"></div>
<div class="circlePosition w-[200px] h-[400px] bg-primary rounded-[100%] absolute z-0 bottom-24 end-72 blur-[150px]"></div>
<section class="relative max-w-7xl mx-auto px-4 focus:outline-none sm:px-3 md:px-5 my-4 mb-8">
    <!-- Title -->
    <div class="mb-8 w-full">
        <div class="flex justify-center">
            <h2
                class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500 lg:text-2xl">
                Testimoni
            </h2>
            <span class="absolute right-4">
                <button type="button" class="inline-flex gap-x-2 justify-center items-center py-3 px-4 h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:bg-gradient-to-l" data-hs-overlay="#hs-modal-tambah-testimoni">
                    <i class="bx bx-chat text-xl"></i>
                    Berikan Testimoni
                </button>
            </span>
        </div>
    </div>
    <!-- End Title -->
    <div class="grid grid-cols-1 gap-6 lg:gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <ul class="mb-8">
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati explicabo facere dolorem eius velit doloremque hic dolor veniam natus. Cumque? "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, reprehenderit! "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
        </ul>
        <ul class="mb-8 hidden sm:block">
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, reprehenderit! "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, reprehenderit! "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
        </ul>
        <ul class="mb-8 hidden lg:block">
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, aliquid nobis magni voluptatibus repudiandae deserunt dolorum quaerat dolorem eius mollitia illum dolore repellat hic alias impedit, magnam illo id dolor! "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
            <li class="mb-8">
                <!-- Card -->
                <a href="#" class="flex h-auto min-h-40 rounded-xl duration-300 cursor-pointer hover:-translate-y-1"
                    style="box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.boxShadow='0 0 16px rgba(167, 139, 255, 1)';"
                    onmouseout="this.style.boxShadow='0 0 4px rgba(0, 0, 0, 0.1)';">
                    <div class="flex flex-col w-full bg-white rounded-xl dark:bg-neutral-900">
                        <div class="flex-auto p-4 md:p-6">
                            <p class="text-base italic text-gray-800 md:text-lg dark:text-neutral-200">
                                " Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, reprehenderit! "
                            </p>
                        </div>

                        <div class="p-4 rounded-b-xl md:px-7">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full"
                                        src="{{ asset('assets/team/hafiz.jpg') }}" alt="Hafiz Haekal">
                                </div>

                                <div class="flex gap-2 justify-between w-full">
                                    <div class="grow ms-3">
                                        <p
                                            class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                            Hafiz Haekal
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-neutral-400">
                                            Frontend Developer
                                        </p>
                                    </div>
                                    <!-- Rating -->
                                    <div class="flex gap-0.5 items-center">
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                        <svg class="flex-shrink-0 text-yellow-400 size-5 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>

                                    </div>
                                    <!-- End Rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </li>
        </ul>
    </div>
</section>

{{-- Modal Beri Nilai --}}
<div id="hs-modal-tambah-testimoni" class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                  Testimoni
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-modal-tambah-testimoni">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
            </div>
            <div class="flex flex-col gap-4 p-4">
                <div>
                    <p class="text-sm text-gray-800">
                        Berikan testimoni sebagai <span class="font-semibold">Hafiz Haekal</span>
                    </p>
                </div>
                <!-- Rating -->
                <div class="flex flex-row-reverse justify-end items-center gap-0.5">
                    <input id="hs-ratings-readonly-1" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="1">
                    <label for="hs-ratings-readonly-1" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                        <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                    </label>
                    <input id="hs-ratings-readonly-2" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="2">
                    <label for="hs-ratings-readonly-2" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                        <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                    </label>
                    <input id="hs-ratings-readonly-3" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="3">
                    <label for="hs-ratings-readonly-3" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                        <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                    </label>
                    <input id="hs-ratings-readonly-4" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="4">
                    <label for="hs-ratings-readonly-4" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                        <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                    </label>
                    <input id="hs-ratings-readonly-5" type="radio" class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0" name="hs-ratings-readonly" value="5">
                    <label for="hs-ratings-readonly-5" class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                        <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                    </label>
                </div>
                <!-- End Rating -->
                <!-- Form Group -->
                <div>
                    <div>
                        <textarea id="hs-icon-alamat" name="hs-icon-alamat" rows="4"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                    </div>
                </div>
                <!-- End Form Group -->
                <div class="flex justify-end gap-x-3">
                    <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-modal-tambah-testimoni">
                        <div class="py-2 px-8 text-xl text-primary border-[1.5px] border-primary bg-transparent hover:bg-green-50 rounded-full duration-300">
                            <p class="text-sm">Batal</p>
                        </div>
                    </button>
                    <button type="button" class="flex-shrink-0">
                        <div class="py-2 px-8 text-xl text-white border-[1.5px] border-primary bg-primary hover:text-primary hover:bg-transparent rounded-full duration-300">
                            <p class="text-sm">Kirim</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Beri Nilai --}}

@include('partials.footer')

@endsection
