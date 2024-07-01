@extends('layouts.app')

@section('container')

    <div class="flex justify-center my-4">
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
              <a href="/" class="flex items-center text-lg text-gray-500 hover:text-primary focus:outline-none focus:text-primary dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                Home
              </a>
              <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </li>
            <li class="inline-flex items-center text-lg font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                Checkout
            </li>
        </ol>
    </div>
    <section class="grid grid-cols-12 mb-12 space-x-4">
        <div class="col-span-8 space-y-4 p-6 bg-white shadow-lg rounded-xl">
            <!-- Form Group -->
            <div>
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
            <div class="grid grid-cols-12 gap-2">
                <!-- Form Group -->
                <div class="col-span-6">
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
                <!-- Form Group -->
                <div class="col-span-6">
                    <label for="hs-icon-emal" class="block text-sm font-medium mb-2 dark:text-white">
                        Email
                    </label>
                    <div class="relative">
                        <input type="text" id="hs-icon-email" name="email"
                            class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                            placeholder="Masukkan alamat email">
                    </div>
                </div>
                <!-- End Form Group -->
            </div>
            <!-- Form Group -->
            <div>
                <label for="hs-icon-alamat-pengiriman" class="block text-sm font-medium mb-2 dark:text-white">
                    Alamat Pengiriman
                </label>
                <div class="relative">
                    <select id="hs-icon-alamat-pengiriman" name="alamat-pengiriman" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option selected="">Pilih alamat pengiriman</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>
            <!-- End Form Group -->
            <div class="grid grid-cols-12 gap-2">
                <!-- Form Group -->
                <div class="col-span-6">
                    <label for="hs-icon-metode-pembayaran" class="block text-sm font-medium mb-2 dark:text-white">
                        Metode Pembayaran
                    </label>
                    <div class="relative">
                        <select id="hs-icon-metode-pembayaran" name="metode-pembayaran" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Pilih metode pembayaran</option>
                            <option>Cash</option>
                            <option>Bank BJB</option>
                            <option>Dana</option>
                        </select>
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="col-span-6">
                    <label for="hs-icon-voucher" class="block text-sm font-medium mb-2 dark:text-white">
                        Kode Voucher
                    </label>
                    <div class="relative">
                        <input type="text" id="hs-icon-voucher" name="voucher"
                            class="py-3 px-4 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                            placeholder="Masukkan kode voucher member">
                    </div>
                </div>
                <!-- End Form Group -->
            </div>
            <!-- Form Group -->
            <div>
                <label for="hs-icon-catatan" class="block mb-2 text-sm text-gray-800 font-medium dark:text-white">
                    Catatan
                </label>
                <div>
                    <textarea id="hs-icon-catatan" name="hs-icon-catatan" rows="4" placeholder="Catatan untuk penjual (opsional)"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                </div>
            </div>
            <!-- End Form Group -->
        </div>

        {{-- Rincian Pesanan --}}
        <div class="col-span-4 p-6 bg-white shadow-lg rounded-xl">
            <h3 class="text-lg font-bold text-gray-800 dark:text-neutral-200 pb-2 mb-4 border-b">Rincian Pesanan</h3>
            <div class="flex justify-between pb-4 mb-4 border-b">
                <span class="text-start space-y-0.5">
                    <p class="block max-w-[36rem] truncate text-base text-gray-800 dark:text-neutral-300">Kaos pendek cotton combed 30s</p>
                    <p class="block text-sm text-gray-500 dark:text-white">Putih, S</p>
                </span>
                <span class="text-end space-y-0.5">
                    <p class="block text-sm text-gray-800 dark:text-white">x2</p>
                    <p class="block text-sm text-gray-800 dark:text-neutral-300">Rp50.000</p>
                </span>
            </div>
            <div class="flex justify-between pb-4 mb-4 border-b">
                <span class="text-start space-y-0.5">
                    <p class="block text-sm text-gray-500 dark:text-white">Subtotal produk</p>
                    <p class="block text-sm text-gray-500 dark:text-white">Biaya Pengiriman</p>
                    <p class="block text-sm text-gray-500 dark:text-white">Diskon</p>
                    <p class="block font-semibold text-base text-gray-800 dark:text-white">Total Pembayaran</p>
                </span>
                <span class="text-end space-y-0.5">
                    <p class="block text-sm text-gray-500 dark:text-neutral-300">Rp100.000</p>
                    <p class="block text-sm text-gray-500 dark:text-neutral-300">Rp10.000</p>
                    <p class="block text-sm text-gray-500 dark:text-neutral-300">Rp5.000</p>
                    <p class="block font-semibold text-base text-gray-800 dark:text-neutral-300">Rp105.000</p>
                </span>
            </div>
            <div class="flex justify-between pb-4 mb-4 border-b">
                <span class="text-start space-y-0.5">
                    <p class="block font-semibold text-base text-gray-800 dark:text-white">Metode Pembayaran</p>
                </span>
                <span class="text-end space-y-0.5">
                    <p class="block font-semibold text-base text-gray-800 dark:text-neutral-300">Cash</p>
                </span>
            </div>
            <div class="flex items-center">
                <p class="block text-sm text-gray-500 dark:text-white">
                    Dengan checkout, Anda setuju dengan <a href="#" class="text-primary">Syarat & Ketentuan</a> kami dan mengonfirmasi bahwa Anda telah membaca <a href="#" class="text-primary">Kebijakan Privasi</a> kami.
                </p>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="w-full py-3 px-auto inline-flex items-center justify-center gap-x-2 text-sm font-bold rounded-full text-white bg-gradient-to-r from-secondary to-primary hover:bg-gradient-to-l disabled:opacity-50 disabled:pointer-events-none duration-300">
                    Buat Pesanan
                </button>
            </div>
            <div class="mt-2">
                <button type="button"
                    class="w-full py-3 px-auto inline-flex items-center justify-center gap-x-2 text-sm font-bold rounded-full border-[1.5px] border-primary text-primary bg-transparent hover:bg-blue-50 disabled:opacity-50 disabled:pointer-events-none duration-300">
                    Hubungi kami
                </button>
            </div>
        </div>
        {{-- End Rincian Pesanan --}}
    </section>

    @include('partials.footer')

@endsection
