<!-- Sidebar -->
<div id="application-sidebar"
    class="sm:mt-20 lg:mt-28 rounded-t-lg hs-overlay [--auto-close:sm] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[240px] lg:w-[260px] hidden fixed inset-y-0 z-[60] bg-white border border-neutral-100 sm:block sm:translate-x-0 lg:end-auto sm:bottom-0 dark:bg-neutral-800 dark:border-neutral-700">

    <div class="flex items-center justify-center h-12 px-2 rounded-t-lg bg-neutral-100">
        <div class="flex-grow border-t border-gray-400"></div>
        <p class="uppercase font-semibold mx-4 text-sm text-gray-800">Semua Favorit</p>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <nav class="hs-accordion-group p-4 w-full flex flex-col
        overflow-x-hidden overflow-y-auto
        max-h-[calc(100vh-161px)] [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:rounded-full
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:rounded-full
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
        data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li class="hs-accordion active" id="account-accordion">
                <button type="button"
                    class="hs-accordion-toggle group w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent font-semibold text-sm text-neutral-800 rounded-lg dark:bg-neutral-800 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    Urutkan
                    <svg class="hs-accordion-active:block ms-auto hidden size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="account-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 block">
                    <ul class="py-2 flex flex-col">
                        <li>
                            <label for="hs-vertical-radio-in-form-u-1" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-1" checked="">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Semua</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-u-2" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-2">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Terbaru disimpan</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-u-3" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-3">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Terlama disimpan</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-u-4" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-4">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Harga tertinggi</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-u-5" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-5">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Harga terendah</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-u-6" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-u" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-u-6">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Pembelian terbanyak</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="hs-accordion active" id="account-accordion">
                <button type="button"
                    class="hs-accordion-toggle group w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent font-semibold text-sm text-neutral-800 rounded-lg dark:bg-neutral-800 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    Status
                    <svg class="hs-accordion-active:block ms-auto hidden size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="account-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 block">
                    <ul class="py-2 flex flex-col">
                        <li>
                            <label for="hs-vertical-radio-in-form-s-1" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-s" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-s-1" checked="">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Semua</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-s-2" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-s" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-s-2">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Pre-order</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-s-3" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-s" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-s-3">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Tersedia</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-s-4" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-s" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-s-4">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Tidak tersedia</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="space-y-1.5">            
            <li class="hs-accordion active" id="account-accordion">
                <button type="button"
                    class="hs-accordion-toggle group w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent font-semibold text-sm text-neutral-800 rounded-lg dark:bg-neutral-800 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    Kategori
                    <svg class="hs-accordion-active:block ms-auto hidden size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="account-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 block">
                    <ul class="py-2 flex flex-col">
                        <li>
                            <label for="hs-vertical-radio-in-form-k-1" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-k" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-1" checked="">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Semua</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-k-2" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-k" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-2">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Design & Printing</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-k-3" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-k" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-3">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Software</span>
                            </label>
                        </li>
                        <li>
                            <label for="hs-vertical-radio-in-form-k-4" class="flex py-1.5 ps-6 rounded-full hover:bg-gray-100 cursor-pointer">
                                <input type="radio" name="hs-vertical-radio-in-form-k" class="shrink-0 mt-0.5 cursor-pointer border-blue-600 rounded-full text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500" id="hs-vertical-radio-in-form-k-4">
                                <span class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Game</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->
