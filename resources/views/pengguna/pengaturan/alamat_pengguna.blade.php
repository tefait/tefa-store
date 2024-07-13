@extends('layouts.app')

@section('container')
    @include('partials.sidebar_pengguna')

    <section class="flex gap-4 sm:ms-[270px] lg:ms-72 my-4 mb-8">
        <div class="w-full p-4 bg-white shadow-lg rounded-xl">
            <div class="flex justify-between items-center pb-4 mb-4 border-b">
                <p class="font-semibold text-lg text-gray-800">Alamat Saya</p>
                <button type="button"
                    class="inline-flex gap-x-1 justify-center items-center py-3 px-4 h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:bg-gradient-to-l"
                    data-hs-overlay="#hs-scroll-modal-tambah-alamat">
                    <i class="bx bx-plus text-xl"></i>
                    Tambah Alamat Baru
                </button>
            </div>

            <div class="flex flex-col gap-6">
                {{-- Alamat --}}
                @forelse (auth('customer')->user()->rel_address as $address)
                    <div class="flex justify-between items-center bg-blue-50 border-t-2 border-primary rounded-lg py-6 px-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Icon -->
                                <i
                                    class="bx bxs-map py-1 px-2 text-xl text-primary border-4 border-blue-100 bg-blue-200 rounded-full"></i>
                                <!-- End Icon -->
                            </div>
                            <div class="ms-3 max-w-[28rem]">
                                <div class="flex items-center gap-2 text-gray-800 dark:text-white">
                                    <h3 class="font-semibold">
                                        Hafiz Haekal
                                    </h3>
                                    <span>|</span>
                                    <p class="text-sm">
                                        (+62)
                                        87894818815
                                    </p>
                                </div>
                                <p class="text-sm text-gray-700 dark:text-neutral-400">
                                    {{ ucwords(strtolower("{$address->address} {$address->village->name}, KECAMATAN {$address->district->name}, KABUPATEN {$address->regency->name}, {$address->province->name}")) }}
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-end gap-1.5">
                            <div class="hs-tooltip">
                                <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-scroll-modal-ubah-alamat">
                                    <!-- Icon -->
                                    <i
                                        class="bx bxs-pencil py-1 px-2 text-xl text-primary border-[1.5px] border-primary bg-transparent hover:text-white hover:bg-primary rounded-full duration-300"></i>
                                    <!-- End Icon -->
                                    <span
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-primary text-xs font-medium text-white rounded shadow-sm"
                                        role="tooltip">
                                        Ubah alamat
                                    </span>
                                </button>
                            </div>
                            <div class="hs-tooltip">
                                <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-modal-hapus-alamat">
                                    <!-- Icon -->
                                    <i
                                        class="bx bxs-trash py-1 px-2 text-xl text-red-500 border-[1.5px] border-red-500 bg-transparent hover:text-white hover:bg-red-500 rounded-full duration-300"></i>
                                    <!-- End Icon -->
                                    <span
                                        class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-red-500 text-xs font-medium text-white rounded shadow-sm"
                                        role="tooltip">
                                        Hapus alamat
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                {{-- End Alamat --}}
            </div>
        </div>
    </section>

    {{-- Modal Tambah Alamat --}}
    <div id="hs-scroll-modal-tambah-alamat"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Tambah Alamat Baru
                    </h3>
                    <button type="button"
                        class="flex  justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                        data-hs-overlay="#hs-scroll-modal-tambah-alamat">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
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
                    <div class="space-y-4">
                        <div class="grid grid-cols-12 gap-2">
                            <!-- Form Group -->
                            <div class="col-span-7">
                                <label for="hs-icon-name" class="block text-sm font-medium mb-2 dark:text-white">
                                    Nama Penerima
                                </label>
                                <div class="relative">
                                    <input type="text" id="hs-icon-name" name="recipient"
                                        class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                        placeholder="Masukkan nama penerima" required
                                        value="{{ auth('customer')->user()->name }}">
                                </div>
                            </div>
                            <!-- End Form Group -->
                            <!-- Form Group -->
                            <div class="col-span-5">
                                <label for="hs-icon-nomor" class="block text-sm font-medium mb-2 dark:text-white">
                                    Nomor HP
                                </label>
                                <div class="relative">
                                    <input type="text" id="hs-icon-nomor" name="phone_number"
                                        class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                        placeholder="Masukkan nomor HP" required
                                        value="{{ auth('customer')->user()->phone_number }}">
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-provinsi" class="block text-sm font-medium mb-2 dark:text-white">
                                Provinsi
                            </label>
                            <div class="relative">
                                <select id="hs-icon-provinsi" name="provinsi"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option>Pilih provinsi</option>
                                    @foreach ($provinces as $prov)
                                        <option>
                                            Pilih provinsi</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-kabkot" class="block text-sm font-medium mb-2 dark:text-white">
                                Kabupaten / Kota
                            </label>
                            <div class="relative">
                                <select id="hs-icon-kabkot" name="kabkot"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih kabupaten / kota</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-kecamatan" class="block text-sm font-medium mb-2 dark:text-white">
                                Kecamatan
                            </label>
                            <div class="relative">
                                <select id="hs-icon-kecamatan" name="kecamatan"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih kecamatan</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-deskel" class="block text-sm font-medium mb-2 dark:text-white">
                                Desa / Kelurahan
                            </label>
                            <div class="relative">
                                <select id="hs-icon-deskel" name="deskel"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih desa / kelurahan</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-alamat"
                                class="block mb-2 text-sm text-gray-800 font-medium dark:text-white">
                                Alamat Lengkap
                            </label>
                            <div>
                                <textarea id="hs-icon-alamat" name="hs-icon-alamat" rows="4"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                            </div>
                        </div>
                        <!-- End Form Group -->
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-neutral-10 border-secondary text-secondary"
                        data-hs-overlay="#hs-scroll-modal-tambah-alamat">
                        Batal
                    </button>
                    <button type="button"
                        class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah Alamat --}}

    {{-- Modal Ubah Alamat --}}
    <div id="hs-scroll-modal-ubah-alamat"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
            <div
                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Ubah Alamat
                    </h3>
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                        data-hs-overlay="#hs-scroll-modal-ubah-alamat">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
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
                    <div class="space-y-4">
                        <div class="grid grid-cols-12 gap-2">
                            <!-- Form Group -->
                            <div class="col-span-7">
                                <label for="hs-icon-name" class="block text-sm font-medium mb-2 dark:text-white">
                                    Nama Penerima
                                </label>
                                <div class="relative">
                                    <input type="text" id="hs-icon-name" name="name"
                                        class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                        placeholder="Masukkan nama penerima">
                                </div>
                            </div>
                            <!-- End Form Group -->
                            <!-- Form Group -->
                            <div class="col-span-5">
                                <label for="hs-icon-nomor" class="block text-sm font-medium mb-2 dark:text-white">
                                    Nomor HP
                                </label>
                                <div class="relative">
                                    <input type="text" id="hs-icon-nomor" name="number"
                                        class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                        placeholder="Masukkan nomor HP">
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-provinsi" class="block text-sm font-medium mb-2 dark:text-white">
                                Provinsi
                            </label>
                            <div class="relative">
                                <select id="hs-icon-provinsi" name="provinsi"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih provinsi</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-kabkot" class="block text-sm font-medium mb-2 dark:text-white">
                                Kabupaten / Kota
                            </label>
                            <div class="relative">
                                <select id="hs-icon-kabkot" name="kabkot"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih kabupaten / kota</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-kecamatan" class="block text-sm font-medium mb-2 dark:text-white">
                                Kecamatan
                            </label>
                            <div class="relative">
                                <select id="hs-icon-kecamatan" name="kecamatan"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih kecamatan</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-deskel" class="block text-sm font-medium mb-2 dark:text-white">
                                Desa / Kelurahan
                            </label>
                            <div class="relative">
                                <select id="hs-icon-deskel" name="deskel"
                                    class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="">Pilih desa / kelurahan</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div>
                            <label for="hs-icon-alamat"
                                class="block mb-2 text-sm text-gray-800 font-medium dark:text-white">
                                Alamat Lengkap
                            </label>
                            <div>
                                <textarea id="hs-icon-alamat" name="hs-icon-alamat" rows="4"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                            </div>
                        </div>
                        <!-- End Form Group -->
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-neutral-10 border-secondary text-secondary"
                        data-hs-overlay="#hs-scroll-modal-ubah-alamat">
                        Batal
                    </button>
                    <button type="button"
                        class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Ubah Alamat --}}

    {{-- Modal Hapus Alamat --}}
    <div id="hs-modal-hapus-alamat"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="relative w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="absolute top-4 end-4">
                    <button type="button"
                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700"
                        data-hs-overlay="#hs-modal-hapus-alamat">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-4 sm:p-6 text-center overflow-y-auto">
                    <!-- Icon -->
                    <span
                        class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                        <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </span>
                    <!-- End Icon -->

                    <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                        Hapus alamat
                    </h3>
                    <p class="text-gray-500 dark:text-neutral-500">
                        Apakah Anda yakin ingin menghapus alamat ini?
                    </p>

                    <div class="mt-6 flex justify-center gap-x-4">
                        <button type="button" class="flex-shrink-0" data-hs-overlay="#hs-modal-hapus-alamat">
                            <div
                                class="py-2 px-4 w-44 text-xl text-red-500 border-[1.5px] border-red-500 bg-transparent hover:bg-red-50 rounded-full duration-300">
                                <p class="text-sm">Batal</p>
                            </div>
                        </button>
                        <button type="button" class="flex-shrink-0">
                            <div
                                class="py-2 px-4 w-44 text-xl text-white border-[1.5px] border-red-500 bg-red-500 hover:text-red-500 hover:bg-transparent rounded-full duration-300">
                                <p class="text-sm">Hapus</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal Hapus Alamat --}}
@endsection
