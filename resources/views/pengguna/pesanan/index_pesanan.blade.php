@extends('layouts.app')

@section('container')

    @include('partials.sidebar_pengguna')

    <section class="sm:ms-[270px] lg:ms-72 my-4 mb-8">

        <nav class="flex justify-end border-b space-x-4 overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" aria-label="Tabs" role="tablist">
            <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary py-2 px-4 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active transition duration-300" id="horizontal-scroll-tab-item-1" data-hs-tab="#horizontal-scroll-tab-preview" aria-controls="horizontal-scroll-tab-preview" role="tab">
              Pesanan
            </button>
            <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary py-2 px-4 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 transition duration-300" id="horizontal-scroll-tab-item-2" data-hs-tab="#horizontal-scroll-tab-2" aria-controls="horizontal-scroll-tab-2" role="tab">
              Penilaian
            </button>
            <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary py-2 px-4 inline-flex justify-center items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 transition duration-300" id="horizontal-scroll-tab-item-3" data-hs-tab="#horizontal-scroll-tab-3" aria-controls="horizontal-scroll-tab-3" role="tab">
              Riwayat Pesanan
            </button>
        </nav>        
          
        <div class="mt-3">
            @include('pesanan.pesanan')
            @include('pesanan.penilaian')
            @include('pesanan.riwayatpesanan')
        </div>

        {{-- Modal Detail Pesanan --}}
        <div id="hs-scroll-detail-pesanan" class="hs-overlay hidden size-full fixed top-0 start-0 z-[200] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
                <div class="max-h-full pb-4 overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Detail Pesanan
                        </h3>
                        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-scroll-detail-pesanan">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <div class="flex flex-col">

                            <div class="space-y-3">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Invoice</p>
                                        <p class="font-semibold text-sm text-primary">INV-28062024-001</p>
                                    </div>
                                    <div class="col-span-6">
                                        <button class="py-2 px-4 w-44 text-sm text-primary border-[1.5px] border-primary bg-transparent hover:text-white hover:bg-primary rounded-full duration-300" data-hs-overlay="#hs-stacked-detail-pesanan" data-hs-overlay-options='{
                                            "isClosePrev": false
                                        }'>
                                            Lihat invoice
                                        </button>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Status</p>
                                        <p class="font-semibold text-sm text-gray-800">Dikirim</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Waktu Pengiriman</p>
                                        <p class="font-semibold text-sm text-gray-800">28-06-2024 07:59 WIB</p>
                                    </div>
                                </div>
                            </div>
                            
                            <label for="" class="font-bold text-sm py-4 mt-4 border-t">Detail Pembelian</label>
                            <div class="space-y-3">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Nama Produk</p>
                                        <p class="font-semibold text-sm text-gray-800">Kaos pendek cutton combed 30s</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Kategori</p>
                                        <p class="font-semibold text-sm text-gray-800">Design & Printing</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Jumlah</p>
                                        <p class="font-semibold text-sm text-gray-800">x2</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Harga</p>
                                        <p class="font-semibold text-sm text-gray-800">Rp50.000</p>
                                    </div>
                                </div>
                            </div>

                            <label for="" class="font-bold text-sm py-4 mt-4 border-t">Informasi Pembayaran</label>
                            <div class="space-y-3">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Subtotal Produk</p>
                                        <p class="font-semibold text-sm text-gray-800">Rp100.000</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Diskon</p>
                                        <p class="font-semibold text-sm text-gray-800">Rp5.000</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Biaya Pengiriman</p>
                                        <p class="font-semibold text-sm text-gray-800">Rp10.000</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Total Pembayaran</p>
                                        <p class="font-semibold text-sm text-gray-800">Rp105.000</p>
                                    </div>
                                </div>
                            </div>

                            <label for="" class="font-bold text-sm py-4 mt-4 border-t">Informasi Pengiriman</label>
                            <div class="space-y-3">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">Ekspedisi</p>
                                        <p class="font-semibold text-sm text-gray-800">JNE</p>
                                    </div>
                                    <div class="col-span-6">
                                        <p class="text-sm text-gray-500">No. Resi</p>
                                        <p class="font-semibold text-sm text-gray-800">TFID048593933416</p>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="text-sm text-gray-500">Alamat Pengiriman</p>
                                    <p class="font-semibold text-sm text-gray-800">Jl. Tanjung Manunggal V No.30 RT04/RW03 Desa Sukatali, Kecamatan Situraja, Kabupaten Sumedang, Jawa Barat, 45371</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal Detail Pesanan --}}

        <div id="hs-stacked-detail-pesanan" class="hs-overlay hidden size-full fixed top-0 start-0 z-[201] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
              <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                  <h3 class="font-bold text-gray-800 dark:text-white">
                    Modal title
                  </h3>
                  <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-stacked-detail-pesanan">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
                <div class="p-4 overflow-y-auto">
                  <div class="space-y-4">
                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be bold</h3>
                      <p class="mt-1 text-gray-800 dark:text-neutral-400">
                        Motivate teams to do their best work. Offer best practices to get users going in the right direction. Be bold and offer just enough help to get the work started, and then get out of the way. Give accurate information so users can make educated decisions. Know your user's struggles and desired outcomes and give just enough information to let them get where they need to go.
                      </p>
                    </div>
          
                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be optimistic</h3>
                      <p class="mt-1 text-gray-800 dark:text-neutral-400">
                        Focusing on the details gives people confidence in our products. Weave a consistent story across our fabric and be diligent about vocabulary across all messaging by being brand conscious across products to create a seamless flow across all the things. Let people know that they can jump in and start working expecting to find a dependable experience across all the things. Keep teams in the loop about what is happening by informing them of relevant features, products and opportunities for success. Be on the journey with them and highlight the key points that will help them the most - right now. Be in the moment by focusing attention on the important bits first.
                      </p>
                    </div>
          
                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be practical, with a wink</h3>
                      <p class="mt-1 text-gray-800 dark:text-neutral-400">
                        Keep our own story short and give teams just enough to get moving. Get to the point and be direct. Be concise - we tell the story of how we can help, but we do it directly and with purpose. Be on the lookout for opportunities and be quick to offer a helping hand. At the same time realize that nobody likes a nosy neighbor. Give the user just enough to know that something awesome is around the corner and then get out of the way. Write clear, accurate, and concise text that makes interfaces more usable and consistent - and builds trust. We strive to write text that is understandable by anyone, anywhere, regardless of their culture or language so that everyone feels they are part of the team.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-stacked-detail-pesanan">
                    Close
                  </button>
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                  </button>
                </div>
              </div>
            </div>
        </div>

    </section>
    
    @include('partials.bottom_nav')

@endsection