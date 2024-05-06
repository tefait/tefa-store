<x-app-layout>
    <div x-data="{produk: {}}">

    <div class="container">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($produks as $produk)
                <a class="" {{-- href="{{ route('produk.show', $produk->id) }}" --}}
                    data-hs-overlay="#hs-vertically-centered-modal" x-on:click="produk = {{$produk}};window.history.replaceState({}, '', '/produk/' + produk.id);">
                    <div
                        class="flex
                    flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700
                    dark:shadow-neutral-700/70">
                    <img class="w-full h-auto rounded-t-xl" src="{{ $produk->foto }}" alt="Image Description">
                    <div class="p-4 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            {{ $produk->nama }}
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400">
                            {{ $produk->harga }}
                        </p>
                        <p class="mt-1 text-gray-500 dark:text-neutral-400">
                            {{ $produk->deskripsi }}
                        </p>
                    </div>
        </div>
        </a>
        @endforeach

    </div>
    </div>

    <div id="hs-vertically-centered-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white" x-text="produk.nama">
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                        data-hs-overlay="#hs-vertically-centered-modal">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <img class="w-full h-auto rounded-xl" x-bind:src="produk.foto" x-bind:alt="produk.nama">

                    <p class="text-gray-800 dark:text-neutral-400" x-text="produk.deskripsi">

                    </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                        data-hs-overlay="#hs-vertically-centered-modal">
                        Close
                    </button>
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
