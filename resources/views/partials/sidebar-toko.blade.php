<!-- Sidebar -->
<div id="application-sidebar"
    class="sm:mt-20 lg:mt-[110px] rounded-t-lg hs-overlay [--auto-close:sm] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[240px] lg:w-[260px] hidden fixed inset-y-0 z-[60] bg-white border border-neutral-100 sm:block sm:translate-x-0 lg:end-auto sm:bottom-0 dark:bg-neutral-800 dark:border-neutral-700">

    <div class="flex items-center justify-center h-12 px-2 rounded-t-lg bg-neutral-100">
        <div class="flex-grow border-t border-gray-400"></div>
        <p class="uppercase font-semibold mx-4 text-sm text-gray-500">Kategori</p>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <nav class="hs-accordion-group p-4 w-full flex flex-col flex-wrap
        overflow-x-hidden overflow-y-auto
        max-h-full lg:max-h-[calc(100vh-80px)] [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:rounded-full
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:rounded-full
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
        data-hs-accordion-always-open>
        <ul class="space-y-1.5">            
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white duration-300"
                    href="#">
                    <i class="bx bxs-category text-2xl text-neutral-700 dark:text-white"></i>
                    Semua
                </a>
            </li>

            <li class="hs-accordion" id="account-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    <i class="bx bxs-palette text-2xl text-neutral-700 dark:text-white"></i>
                    Design & Printing
                    <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="account-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Produk
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Kategori
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="hs-accordion" id="projects-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    <i class="bx bx-code-block text-2xl text-neutral-700 dark:text-white"></i>
                    Software
                    <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="projects-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Penjualan
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Pembelian
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="hs-accordion" id="projects-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    <i class="bx bxs-joystick text-2xl text-neutral-700 dark:text-white"></i>
                    Game
                    <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="projects-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Lap. Keuangan
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Lap. Penjualan
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Lap. Pembelian
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="#">
                                <i class="bx bx-subdirectory-right text-lg"></i>
                                Lap. Stok Produk
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->
