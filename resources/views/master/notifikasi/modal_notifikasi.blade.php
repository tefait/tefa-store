<!-- Modal Notifikasi -->
<div id="hs-scroll-inside-body-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
        <div
            class="flex overflow-hidden flex-col max-h-full bg-white rounded-xl border shadow-sm pointer-events-auto dark:bg-black dark:border-neutral-800 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center px-4 py-3 border-b dark:border-neutral-800">
                <h3 class="text-base font-bold text-gray-800 dark:text-white">
                    Notifikasi
                </h3>
                <button type="button"
                    class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-scroll-inside-body-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="overflow-y-auto p-0 divide-y dark:divide-neutral-800">
                <!-- Card -->
                <a href="#"
                    class="flex gap-x-4 gap-y-6 items-center px-4 py-3 transition-all duration-300 group size-full hover:bg-gray-100 dark:bg-black dark:hover:bg-neutral-900">
                    <div
                        class="inline-flex justify-center items-center px-2 py-1 bg-blue-100 rounded-full border-4 border-blue-50 dark:border-blue-700 dark:bg-blue-600">
                        <i class="flex-shrink-0 text-2xl text-gray-800 bx bx-envelope dark:text-neutral-200"></i>
                    </div>
                    <div class="w-full">
                        <p
                            class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">
                            Judul notifikasi</p>
                        <p
                            class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">
                            Ini adalah pesan dari notifikasi</p>
                    </div>
                    <div class="flex relative justify-center items-center me-2">
                        <span
                            class="inline-flex absolute bg-red-400 rounded-full opacity-75 animate-ping size-full dark:bg-red-600"></span>
                        <span class="inline-flex relative bg-red-500 rounded-full size-3"></span>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a href="#"
                    class="flex gap-x-4 gap-y-6 items-center px-4 py-3 transition-all duration-300 group size-full hover:bg-gray-100 dark:bg-black dark:hover:bg-neutral-900">
                    <div
                        class="inline-flex justify-center items-center px-2 py-1 bg-blue-100 rounded-full border-4 border-blue-50 dark:border-blue-700 dark:bg-blue-600">
                        <i class="flex-shrink-0 text-2xl text-gray-800 bx bx-envelope dark:text-neutral-200"></i>
                    </div>
                    <div class="w-full">
                        <p
                            class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">
                            UTBK/SNBT
                        </p>
                        <p
                            class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">
                            Selamat anda dinyatakan lulus!
                        </p>
                    </div>
                    <span class="w-20 text-xs text-gray-500 text-end dark:text-white">13 Jun</span>
                </a>
                <!-- End Card -->
            </div>
            <div class="flex justify-end items-center px-4 py-1.5 border-t dark:border-neutral-800">
                <a href="#"
                    class="inline-flex items-center text-xs font-medium text-gray-800 duration-300 hover:text-opacity-70 dark:text-white dark:hover:text-opacity-70">
                    Lihat semua
                    <i class="text-lg bx bx-right-arrow-alt ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Notifikasi -->