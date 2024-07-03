<!-- SearchBox Modal -->
<div id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"
    class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 lg:-start-24 z-[200] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
    <div
        class="m-3 opacity-0 transition-all hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto">
        <div
            class="flex flex-col lg:w-[45rem] bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-black dark:border-neutral-800 dark:shadow-neutral-700/70">

            <div class="relative"
                data-hs-combo-box='{
                    "preventVisibility": true,
                    "groupingType": "tabs",
                    "isOpenOnFocus": true,
                    "apiUrl": "{{ route('product.api') }}",
                    {{-- "apiUrl": "https://fakestoreapi.com/products", --}}
                    "apiGroupField": "category",
                    "outputItemTemplate": "<div class=\"cursor-pointer p-2 space-y-0.5 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-full focus:outline-none focus:bg-gray-100 dark:bg-black dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\" data-hs-combo-box-output-item onclick=\"alert(slug)\"><div class=\"flex justify-between items-center w-full\"><div data-hs-combo-box-output-item-field=\"name\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-primary dark:text-blue-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></img></div>",
                    "groupingTitleTemplate": "<button type=\"button\" class=\"capitalize py-1 px-4 inline-flex items-center gap-x-2 text-sm text-nowrap rounded-full border border-gray-200 bg-white text-gray-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-100 hs-combo-box-tab-active:bg-primary hs-combo-box-tab-active:border-primary hs-combo-box-tab-active:focus:border-primary hs-combo-box-tab-active:text-white disabled:opacity-50 disabled:pointer-events-none dark:hs-combo-box-tab-active:bg-blue-500 dark:hs-combo-box-tab-active:text-white dark:hs-combo-box-tab-active:border-blue-500 dark:hs-combo-box-tab-active:focus:border-blue-500 dark:bg-black dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700\"></button>",
                    "tabsWrapperTemplate": "<div class=\"overflow-x-auto py-2 px-4 rounded-t-xl border-b border-gray-200 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-black dark:border-neutral-800\"></div>"
                }'>
                <div class="relative p-4 border-b border-gray-200 dark:border-neutral-800">
                    <div class="relative">
                        <form method="GET" action="{{ route('front.product') }}">
                            <div class="flex absolute inset-y-0 z-20 items-center pointer-events-none start-0 ps-3.5">
                                <i class="text-xl text-gray-500 bx bx-search dark:text-gray-300"></i>
                            </div>
                            <input name="q" autocomplete="off"
                                class="block py-3 w-full h-10 text-sm rounded-full border-gray-300 ps-10 pe-4 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-black dark:border-white dark:text-white dark:placeholder-gray-300 dark:focus:ring-neutral-600"
                                type="text" placeholder="Cari di Tefa Store" value="{{ request()->q }}"
                                autofocus="" data-hs-combo-box-input="">
                            <button class="flex absolute inset-y-0 z-20 items-center end-0" type="submit">
                                <p class="m-2 py-1 px-4 bg-primary text-white text-sm rounded-full">Cari</p>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- SearchBox Modal Body -->
                <div class="!mt-0" data-hs-combo-box-output="">
                    <div class="h-72 p-2 overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
                        data-hs-combo-box-output-items-wrapper=""></div>
                </div>
                <!-- SearchBox Modal Body -->
            </div>
        </div>
    </div>
</div>
<!-- End SearchBox -->