<!-- Off Canvas Menu Mobile -->
<div id="hs-overlay-bottom"
    class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-[400ms] transform size-full z-[200] bg-white border-b dark:bg-black dark:border-neutral-800 hidden">
    <div
        class="mt-10 max-w-full h-full max-h-full opacity-0 transition-all hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500">
        <div class="flex flex-col max-w-full h-full max-h-full bg-white pointer-events-auto dark:bg-black">
            <div class="flex justify-between items-center px-4 py-3 border-b dark:border-neutral-800">
                <h3 class="text-base font-bold text-gray-800 dark:text-white">
                    Menu Utama
                </h3>
                <button type="button"
                    class="flex justify-center items-center text-sm font-semibold text-gray-800 rounded-full border border-transparent size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                    data-hs-overlay="#hs-overlay-bottom">
                    <span class="sr-only">Close modal</span>
                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="overflow-y-auto divide-y-8 divide-gray-100 dark:divide-neutral-900">
                @auth('customer')
                    <div class="flex justify-between px-4 pt-4">
                        <div class="flex items-center">
                            <div class="inline-block relative min-w-14">
                                <img class="inline-block w-full h-14 rounded-full"
                                    src="{{ asset('assets/team/hafiz.jpg') }}" alt="Profile Image">
                                <span
                                    class="block absolute bottom-0 bg-green-500 rounded-full ring-2 ring-white end-0 size-3 dark:ring-neutral-900"></span>
                            </div>
                            <div class="ms-3">
                                <h3 class="text-base font-bold text-gray-800 dark:text-white max-w-[15rem] truncate">
                                    {{ auth('customer')->user()->name }}</h3>
                                <p class="text-sm text-gray-600 dark:text-neutral-500 max-w-[15rem] truncate">
                                    {{ auth('customer')->user()->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="text-2xl text-gray-800 bx bx-pencil dark:text-white"></i>
                        </div>
                    </div>
                @else
                    <div class="flex gap-2 justify-center px-4 pt-4">
                        <a href="#"
                            class="relative w-full px-5 py-2 px-auto rounded-full font-semibold text-center text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700">
                            Masuk
                        </a>
                        <a href="#"
                            class="inline-flex gap-x-3 justify-center items-center px-5 py-2 w-full  text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                            Daftar
                        </a>
                    </div>
                @endauth

                <div class="mt-4 text-sm">
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mt-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-notepad"></i>
                            <p class="text-sm">
                                Pesanan Saya
                            </p>
                        </span>
                        <span class="flex items-center">
                            <span
                                class="inline-flex items-center py-[1px] px-[5px] rounded-full text-[11.2px] font-medium bg-red-500 text-white"
                                style="font-size: 10px; line-height:14px;">
                                2
                            </span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-history"></i>
                            <p class="text-sm">
                                Riwayat Transaksi
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-star"></i>
                            <p class="text-sm">
                                Penilaian
                            </p>
                        </span>
                        <span class="flex items-center">
                            <p class="text-xs text-gray-500 dark:text-neutral-300 me-1">Beri Penilaian</p>
                            <span class="inline-block bg-red-500 rounded-full size-2"></span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-heart"></i>
                            <p class="text-sm">
                                Favorit
                            </p>
                        </span>
                        <span class="flex items-center">
                            <span
                                class="inline-flex items-center py-[1px] px-[5px] rounded-full text-[11.2px] font-medium bg-red-500 text-white"
                                style="font-size: 10px; line-height:14px;">
                                5
                            </span>
                            <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                        </span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-bell"></i>
                            <p class="text-sm">
                                Notifikasi
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mb-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-cog"></i>
                            <p class="text-sm">
                                Pengaturan
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                </div>
                <div class="text-sm">
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mt-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-phone-call"></i>
                            <p class="text-sm">
                                Hubungi Kami
                            </p>
                        </span>
                        <span class="flex items-center text-xs text-green-500 dark:text-green-400">WhatsApp<i
                                class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i></span>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-package"></i>
                            <p class="text-sm">
                                Cara Order
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                    <a href="#"
                        class="flex justify-between items-center px-4 py-2 mb-2 duration-300 hover:bg-gray-100 dark:hover:bg-neutral-900">
                        <span class="flex gap-3 items-center text-gray-800 dark:text-white">
                            <i class="text-2xl bx bx-message-rounded"></i>
                            <p class="text-sm">
                                FAQ
                            </p>
                        </span>
                        <i class="text-2xl text-gray-400 bx bx-chevron-right dark:text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Off Canvas Menu Mobile -->
