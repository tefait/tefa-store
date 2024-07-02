@extends('layouts.app')

@section('container')

    <div class="flex justify-center mt-4 mb-2 mx-10" data-hs-stepper="">
        <ul class="relative flex flex-row justify-center gap-x-2 w-[50%]">
            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
                "index": 1
            }'>
                <span class="min-w-5 min-h-5 group inline-flex flex-col items-center text-xs align-middle">
                <span class="size-5 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-primary hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hidden">1</span>
                    <svg class="block flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-xs text-gray-600 dark:text-neutral-200">
                    Keranjang
                </span>
                </span>
                <div class="success w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-primary hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600"></div>
            </li>

            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
                "index": 2
            }'>
                <span class="min-w-5 min-h-5 group inline-flex flex-col items-center text-xs align-middle">
                <span class="active size-5 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-primary hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                    <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-xs text-gray-600 dark:text-neutral-200">
                    Checkout
                </span>
                </span>
                <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-primary hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600"></div>
            </li>

            <li class="flex items-center gap-x-2 shrink basis-0 group" data-hs-stepper-nav-item='{
                "index": 3
                }'>
                <span class="min-w-5 min-h-5 group inline-flex flex-col items-center text-xs align-middle">
                <span class="size-5 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-primary hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                    <svg class="hidden flex-shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="text-xs text-gray-600 dark:text-neutral-200">
                    Selesai
                </span>
                </span>
            </li>
        </ul>
    </div>
    <!-- End Stepper -->

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
                    class="relative w-full py-3 px-auto rounded-full font-semibold text-sm text-white bg-gradient-to-r from-primary to-secondary hover:bg-gradient-to-l">
                    Buat Pesanan
                </button>
            </div>
            <div class="mt-2">
                <button type="button"
                    class="relative w-full py-3 px-auto rounded-full font-semibold text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700">
                    Hubungi kami
                </button>
            </div>
        </div>
        {{-- End Rincian Pesanan --}}
    </section>

    @include('partials.footer')

@endsection
