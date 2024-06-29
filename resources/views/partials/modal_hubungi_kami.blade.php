{{-- Modal Hubungi Kami --}}
<div id="hs-hubungi-kami" class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="relative w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="absolute top-4 end-4">
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700" data-hs-overlay="#hs-hubungi-kami">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>
            <div class="p-4 sm:p-6 text-center overflow-y-auto">
                <!-- Icon -->
                <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-green-50 bg-green-100 text-green-500 dark:bg-green-700 dark:border-green-600 dark:text-green-100">
                    <i class="bx bxs-phone-call text-2xl"></i>
                </span>
                <!-- End Icon -->
        
                <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                  Hubungi kami
                </h3>
                <p class="text-gray-500 dark:text-neutral-500">
                  (+62) 878-9481-8815
                </p>
        
                <div class="mt-6 flex justify-center">
                    <a href="https://wa.me/62{{ ltrim(str_replace('-', '', cache('settings')['whatsapp']['value']), '0') }}" target="blank" class="flex-shrink-0">
                        <div class="py-1.5 px-8 text-xl text-white border-[1.5px] border-green-500 bg-green-500 hover:text-green-500 hover:bg-transparent rounded-full duration-300">
                            <p class="flex items-center gap-1 text-sm">
                                Lanjutkan ke WhatsApp
                                <i class="bx bx-right-arrow-alt text-xl"></i>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Hubungi Kami --}}