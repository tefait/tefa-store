@extends('layouts.app')

@section('container')

<div class="circlePosition w-[200px] h-[400px] bg-[#e14def] rounded-[100%] absolute z-0 blur-[150px]"></div>
<div class="circlePosition w-[200px] h-[400px] bg-primary rounded-[100%] absolute z-0 bottom-0 end-1 blur-[150px]"></div>
<section class="relative max-w-7xl mx-auto px-4 focus:outline-none sm:px-3 md:px-5 my-4 mb-8">
    <!-- Title -->
    <div class="flex justify-center items-center mb-8 w-full">
        <span>
            <h2
                class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500 lg:text-2xl">
                Testimoni
            </h2>
        </span>
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

@include('partials.footer')

@endsection
