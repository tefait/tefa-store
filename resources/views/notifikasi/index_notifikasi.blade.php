@extends('layouts.app')

@section('container')

    @include('partials.sidebar_pengguna')

    <section class="flex gap-4 sm:ms-[270px] lg:ms-72 my-4 mb-8">
        <div class="w-full p-4 bg-white shadow-lg rounded-xl">
            <div class="flex items-center pb-4 mb-4 border-b">
                <p class="font-semibold text-lg text-gray-800">Notifikasi</p>
            </div>

            <div class="flex flex-col gap-4">
                {{-- Notifikasi --}}
                <div class="flex justify-between bg-blue-50 border-t-2 border-primary rounded-lg py-6 px-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Icon -->
                            <i class="bx bxs-envelope py-1 px-2 text-xl text-primary border-4 border-blue-100 bg-blue-200 rounded-full"></i>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <div class="flex justify-between items-center gap-2 text-gray-800 dark:text-white">
                                <h3 class="font-semibold">
                                    Judul Notifikasi
                                </h3>
                            </div>
                            <p class="max-w-[40rem] truncate text-sm text-gray-700 dark:text-neutral-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam aliquid veniam. Maxime numquam sunt est perspiciatis sint id adipisci.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-end gap-2">
                        <p class="text-sm text-gray-500">
                            2 jam yang lalu
                        </p>
                        <div class="flex justify-end">
                            <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-scroll-detail-notifikasi">
                                <i class="bx bxs-show py-1 px-2 text-xl text-primary border-[1.5px] border-primary bg-transparent hover:text-white hover:bg-primary rounded-full duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- End Notifikasi --}}
                {{-- Notifikasi --}}
                <div class="flex justify-between bg-gray-50 border-t-2 border-gray-400 rounded-lg py-6 px-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Icon -->
                            <i class="bx bxs-envelope py-1 px-2 text-xl text-gray-400 border-4 border-gray-100 bg-gray-200 rounded-full"></i>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <div class="flex justify-between items-center gap-2 text-gray-800 dark:text-white">
                                <h3 class="font-semibold">
                                    Judul Notifikasi
                                </h3>
                            </div>
                            <p class="max-w-[40rem] truncate text-sm text-gray-700 dark:text-neutral-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam aliquid veniam. Maxime numquam sunt est perspiciatis sint id adipisci.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-end gap-2">
                        <p class="text-sm text-gray-500">
                            5 hari yang lalu
                        </p>
                        <div class="flex justify-end">
                            <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-scroll-detail-notifikasi">
                                <i class="bx bxs-show py-1 px-2 text-xl text-gray-400 border-[1.5px] border-gray-400 bg-transparent hover:text-white hover:bg-gray-400 rounded-full duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- End Notifikasi --}}
                {{-- Notifikasi --}}
                <div class="flex justify-between bg-gray-50 border-t-2 border-gray-400 rounded-lg py-6 px-4">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Icon -->
                            <i class="bx bxs-envelope py-1 px-2 text-xl text-gray-400 border-4 border-gray-100 bg-gray-200 rounded-full"></i>
                            <!-- End Icon -->
                        </div>
                        <div class="ms-3">
                            <div class="flex justify-between items-center gap-2 text-gray-800 dark:text-white">
                                <h3 class="font-semibold">
                                    Judul Notifikasi
                                </h3>
                            </div>
                            <p class="max-w-[40rem] truncate text-sm text-gray-700 dark:text-neutral-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam aliquid veniam. Maxime numquam sunt est perspiciatis sint id adipisci.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-end gap-2">
                        <p class="text-sm text-gray-500">
                            7 hari yang lalu
                        </p>
                        <div class="flex justify-end">
                            <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-scroll-detail-notifikasi">
                                <i class="bx bxs-show py-1 px-2 text-xl text-gray-400 border-[1.5px] border-gray-400 bg-transparent hover:text-white hover:bg-gray-400 rounded-full duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- End Notifikasi --}}
            </div>
        </div>
    </section>

    {{-- Modal Detail Notifikasi --}}
    <div id="hs-scroll-detail-notifikasi" class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div class="max-h-full pb-4 overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Detail Notifikasi
                    </h3>
                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-scroll-detail-notifikasi">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto overflow-x-hidden
                    max-h-[calc(100vh-161px)] [&::-webkit-scrollbar]:w-2
                    [&::-webkit-scrollbar-track]:rounded-full
                    [&::-webkit-scrollbar-track]:bg-gray-100
                    [&::-webkit-scrollbar-thumb]:rounded-full
                    [&::-webkit-scrollbar-thumb]:bg-gray-300
                    dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                    dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
                    data-hs-accordion-always-open>
                    <div class="flex flex-col gap-4">
                        <div class="flex justify-between">
                            <h3 class="font-semibold">
                                Judul Notifikasi
                            </h3>
                            <p class="text-sm text-gray-500">
                                2 jam yang lalu
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700 dark:text-neutral-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quisquam aliquid veniam. Maxime numquam sunt est perspiciatis sint id adipisci.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Detail Notifikasi --}}

@endsection
