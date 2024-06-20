@extends('layouts.app')

@section('container')

<style>
    .mySwiperDP .swiper-slide-thumb-active {
      opacity: 1;
      border: 2px solid #0092e4;
      border-radius: 10px;
    }
    .mySwiperDP .swiper-slide:hover {
      border: 2px solid #0092e4;
      border-radius: 10px;
      opacity: 100;
    }
</style>

<section class="grid lg:grid-cols-12 gap-x-8 gap-y-4 mt-4 lg:mt-6">
    <div class="col-span-4">
      <div style="--swiper-pagination-color: #fff" class="swiper mySwiperDP2 h-[70%] w-[88%] rounded-xl">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover bg-center">
              <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="block h-full w-full object-cover" />
            </div>
            <div class="swiper-slide bg-cover bg-center">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-2.jpg') }}" class="block h-full w-full object-cover" />
            </div>
            <div class="swiper-slide bg-cover bg-center">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-3.jpg') }}" class="block h-full w-full object-cover" />
            </div>
            <div class="swiper-slide bg-cover bg-center">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-4.jpg') }}" class="block h-full w-full object-cover" />
            </div>
          </div>
        </div>
        <div thumbsSlider="" class="swiper mySwiperDP h-[18%] w-[88%] box-border pt-[10px] cursor-pointer">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover bg-center w-[22%] h-full opacity-[0.5]">
              <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="block h-full w-full object-cover rounded-lg" />
            </div>
            <div class="swiper-slide bg-cover bg-center w-[22%] h-full opacity-[0.5]">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-2.jpg') }}" class="block h-full w-full object-cover rounded-lg" />
            </div>
            <div class="swiper-slide bg-cover bg-center w-[22%] h-full opacity-[0.5]">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-3.jpg') }}" class="block h-full w-full object-cover rounded-lg" />
            </div>
            <div class="swiper-slide bg-cover bg-center w-[22%] h-full opacity-[0.5]">
              <img src="{{ asset('ecommerce/img/product/feature-product/f-p-4.jpg') }}" class="block h-full w-full object-cover rounded-lg" />
            </div>
          </div>
      </div>
    </div>

    <div class="flex flex-col col-span-5">

      <p class="font-semibold text-xl text-gray-800 dark:text-neutral-300">Kaos pendek
        cotton combed 30s
      </p>

      <div class="flex gap-1 items-center mt-1 text-sm text-gray-500">
        <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
            </path>
        </svg>
        <p class="font-semibold text-gray-800">5.0 <span class="font-normal">(120)</span></p>
        <span class="border border-gray-600 h-[0.1px] mx-1 rounded-full"></span>
        <p>Terjual 2160</p>
      </div>

      <span class="mt-2 py-1.5 w-28 inline-flex justify-center items-center gap-x-1 text-xs font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
            </path>
            <path d="m9 12 2 2 4-4"></path>
        </svg>
        Stok tersedia
      </span>

      <p class="block mt-4 text-2xl font-bold text-gray-800 dark:text-white">
        Rp50.000
      </p>

      <p class="font-bold text-md text-gray-800 dark:text-neutral-300 mt-8">
        Pilih warna: <span class="font-normal text-gray-600">Putih</span>
      </p>
      <nav class="hidden gap-2 py-2 bg-white sm:flex">
        <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium border border-primary text-primary bg-blue-50 dark:border-neutral-200 dark:text-white">
            Putih
        </button>
        <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            Hitam
        </button>
        <button type="button" class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            Abu-abu
        </button>
      </nav>
      
      <p class="font-bold text-md text-gray-800 dark:text-neutral-300 mt-4">
        Pilih ukuran: <span class="font-normal text-gray-600">S</span>
      </p>
      <nav class="hidden gap-2 py-2 bg-white sm:flex">
        <button type="button" class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium border border-primary text-primary bg-blue-50 dark:border-neutral-200 dark:text-white">
            S
        </button>
        <button type="button" class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            M
        </button>
        <button type="button" class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            L
        </button>
        <button type="button" class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            XL
        </button>
        <button type="button" class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">
            XXL
        </button>
      </nav>

    </div>
    
    <div class="col-span-3">
      <div class="p-4 h-auto w-full bg-white border border-neutral-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800">
        <div class="flex justify-center w-full">
          <p class="text-center font-bold">
            Atur kuantitas
        </div>
  
        <div class="flex mt-4">
          <p class="text-sm text-gray-800">Putih, S</p>
        </div>
  
        <div class="flex flex-col gap-2 mt-1">
          <p class="text-sm text-gray-800 dark:text-neutral-300 mt-4">
            Stok tersedia: <span class="font-bold text-gray-600">102</span>
          </p>
          <!-- Input Number -->
          <div class="inline-flex justify-center py-1 w-24 bg-white rounded-3xl border border-gray-300 dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
            <div class="flex gap-x-1.5 items-center">
              <button type="button"
                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                data-hs-input-number-decrement="">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                </svg>
              </button>
              <input
                class="p-0 w-9 text-center text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white"
                type="text" value="1" data-hs-input-number-input="">
              <button type="button"
                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                data-hs-input-number-increment="">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
              </button>
            </div>
          </div>
          <!-- End Input Number -->
        </div>
  
        <div class="flex justify-between items-center mt-6">
          <p class="text-sm text-gray-600">Subtotal harga</p>
          <p class="font-bold text-lg text-gray-800">Rp50.000</p>
        </div>
  
        <div class="mt-4">
          <button type="button" class="w-full py-1.5 px-auto inline-flex items-center justify-center gap-x-2 text-sm font-bold rounded-lg text-white bg-gradient-to-r from-secondary to-primary hover:bg-gradient-to-r hover:from-primary hover:to-secondary disabled:opacity-50 disabled:pointer-events-none duration-300">
              <i class="bx bx-cart text-lg"></i>
              Keranjang
          </button>
        </div>
        <div class="mt-2">
          <button type="button" class="w-full py-1.5 px-auto inline-flex items-center justify-center gap-x-2 text-sm font-bold rounded-lg border-[1.5px] border-primary text-primary bg-transparent hover:text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none duration-300">
              <i class="bx bx-phone-call text-lg"></i>
              Hubungi kami
          </button>
        </div>

      </div>
    </div>

</section>

<section class="grid lg:grid-cols-12 gap-x-4 border-t divide-x">

  <div class="col-span-8">
    <nav class="pb-1 flex">
      <button type="button" class="cursor-default font-semibold text-primary py-3 px-1 inline-flex items-center gap-x-2 border-b-2 border-primary text-sm whitespace-nowrap">
        Detail Produk
      </button>
    </nav>

    <div class="max-h-[700px] overflow-x-hidden
      [&::-webkit-scrollbar]:w-2
      [&::-webkit-scrollbar-track]:rounded-full
      [&::-webkit-scrollbar-track]:bg-gray-100
      [&::-webkit-scrollbar-thumb]:rounded-full
      [&::-webkit-scrollbar-thumb]:bg-gray-300
      dark:[&::-webkit-scrollbar-track]:bg-neutral-700
      dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
      <div id="horizontal-scroll-tab-preview" role="tabpanel" aria-labelledby="horizontal-scroll-tab-item-1">
        <p class="mt-3 text-gray-500 dark:text-neutral-400">
          T-shirt yang cocok untuk dipadukan dengan berbagai jenis celana. Pilih desain & warna sesuai selera, kami menyediakan banyak macam! Dengan cuttingan regular fit membuat T-shirt ini cocok untuk segala bentuk badan, tidak terlalu longgar & tidak terlalu ketat. Menggunakan bahan cotton combed 30s yang akan membuat nyaman saat berkegiatan di luar ruangan.<br>
          <br>
          Highlights:<br>
          Cuttingan Regular Fit<br>
          Lengan Pendek<br>
          <br>
          Bahan :<br>
          Baju: Cotton Combed 30s<br>
          Sablon: Plastisol<br>
          <br>
          Model:<br>
          Tinggi 185-186 cm<br>
          Berat 75 kg<br>
          *Detail size lihat pada slide gambar produk*<br>
          *Toleransi setiap size 1-2 cm*<br>
          <br>
          Rawat T-shirt ini dengan:<br>
          Setrika menggunakan suhu sedang, maksimal 150 °C<br>
          Cuci menggunakan air dengan suhu ruang<br>
          Jika menggunakan mesin cuci, gunakan putaran pengering dengan tekanan rendah<br>
          Jangan gunakan pemutih<br>
        </p>
      </div>
      <div id="horizontal-scroll-tab-2" class="hidden" role="tabpanel" aria-labelledby="horizontal-scroll-tab-item-2">
        <p class="text-gray-500 dark:text-neutral-400">
          This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">second</em> item's tab body.
        </p>
      </div>
      <div id="horizontal-scroll-tab-3" class="hidden" role="tabpanel" aria-labelledby="horizontal-scroll-tab-item-3">
        <p class="text-gray-500 dark:text-neutral-400">
          This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">third</em> item's tab body.
        </p>
      </div>
      <div id="horizontal-scroll-tab-4" class="hidden" role="tabpanel" aria-labelledby="horizontal-scroll-tab-item-4">
        <p class="text-gray-500 dark:text-neutral-400">
          This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">fourth</em> item's tab body.
        </p>
      </div>
      <div id="horizontal-scroll-tab-5" class="hidden" role="tabpanel" aria-labelledby="horizontal-scroll-tab-item-5">
        <p class="text-gray-500 dark:text-neutral-400">
          This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">fifth</em> item's tab body.
        </p>
      </div>
    </div>
  </div>

  <div class="col-span-4">
    <nav class="pb-1 ps-4 flex">
      <button type="button" class="cursor-default font-semibold text-primary py-3 px-1 inline-flex items-center gap-x-2 border-b-2 border-primary text-sm whitespace-nowrap">
        Ulasan
      </button>
    </nav>

    <div class="p-4 border-b">
      <div class="flex justify-center items-center gap-2">
        <svg class="flex-shrink-0 size-10 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <h3 class="text-7xl text-gray-800">4.9<span class="text-base text-gray-500">/5.0</span></h3>
      </div>
      <div class="flex flex-col items-center">
        <p class="font-semibold text-sm text-gray-800">98% pelanggan merasa puas</p>
        <span class="text-sm text-gray-500">104 ulasan</span>
      </div>
      <div class="flex items-center gap-2 mt-4 w-full">
        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <p class="font-semibold text-sm">5</p>
        <!-- Progress -->
        <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
          <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 98%"></div>
          </div>
          <div class="w-10 text-end">
            <span class="text-sm text-gray-800 dark:text-white">98</span>
          </div>
        </div>
        <!-- End Progress -->
      </div>
      <div class="flex items-center gap-2 w-full">
        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <p class="font-semibold text-sm">4</p>
        <!-- Progress -->
        <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
          <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 2%"></div>
          </div>
          <div class="w-10 text-end">
            <span class="text-sm text-gray-800 dark:text-white">4</span>
          </div>
        </div>
        <!-- End Progress -->
      </div>
      <div class="flex items-center gap-2 w-full">
        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <p class="font-semibold text-sm">3</p>
        <!-- Progress -->
        <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
          <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 0%"></div>
          </div>
          <div class="w-10 text-end">
            <span class="text-sm text-gray-800 dark:text-white">0</span>
          </div>
        </div>
        <!-- End Progress -->
      </div>
      <div class="flex items-center gap-2 w-full">
        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <p class="font-semibold text-sm">2</p>
        <!-- Progress -->
        <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
          <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 0%"></div>
          </div>
          <div class="w-10 text-end">
            <span class="text-sm text-gray-800 dark:text-white">0</span>
          </div>
        </div>
        <!-- End Progress -->
      </div>
      <div class="flex items-center gap-2 w-full">
        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
        </svg>
        <p class="font-semibold text-sm">1</p>
        <!-- Progress -->
        <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
          <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500" style="width: 0%"></div>
          </div>
          <div class="w-10 text-end">
            <span class="text-sm text-gray-800 dark:text-white">0</span>
          </div>
        </div>
        <!-- End Progress -->
      </div>
    </div>

    <!-- Ulasan Produk -->
    <div class="
      p-4 max-h-[420px] overflow-x-hidden
      [&::-webkit-scrollbar]:w-2
      [&::-webkit-scrollbar-track]:rounded-full
      [&::-webkit-scrollbar-track]:bg-gray-100
      [&::-webkit-scrollbar-thumb]:rounded-full
      [&::-webkit-scrollbar-thumb]:bg-gray-300
      dark:[&::-webkit-scrollbar-track]:bg-neutral-700
      dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
      <!-- Customer -->
      <div class="border-b py-4">
        <div class="flex items-center">
          <div class="flex items-center gap-4 w-full">
              <img src="/assets/team/hafiz.jpg" alt="Customer Image" class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full">
              <p class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                Hafiz Haekal
              </p>
          </div>
          <div class="flex justify-end w-[50%]">
              <p class="text-sm text-gray-500">2 hari yang lalu</p>
          </div>
        </div>
        <div class="flex flex-col justify-center gap-2 mt-4">
          <div class="flex">
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base text-gray-800">Barangnya bagus coy asli inimah bukan kaleng kaleng ga nyesel deh beli disini nanti saya borong lagi</p>
          </div>
        </div>
      </div>
      <!-- End Customer -->
      <!-- Customer -->
      <div class="border-b py-4">
        <div class="flex items-center">
          <div class="flex items-center gap-4 w-full">
              <img src="/assets/team/azfa.jpg" alt="Customer Image" class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full">
              <p class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                Muhammad Azfa
              </p>
          </div>
          <div class="flex justify-end w-[50%]">
              <p class="text-sm text-gray-500">2 hari yang lalu</p>
          </div>
        </div>
        <div class="flex flex-col justify-center gap-2 mt-4">
          <div class="flex">
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base text-gray-800">Barangnya bagus coy asli inimah bukan kaleng kaleng ga nyesel deh beli disini nanti saya borong lagi</p>
          </div>
        </div>
      </div>
      <!-- End Customer -->
      <!-- Customer -->
      <div class="border-b py-4">
        <div class="flex items-center">
          <div class="flex items-center gap-4 w-full">
              <img src="/assets/team/hafiz.jpg" alt="Customer Image" class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full">
              <p class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                Hafiz Haekal
              </p>
          </div>
          <div class="flex justify-end w-[50%]">
              <p class="text-sm text-gray-500">2 hari yang lalu</p>
          </div>
        </div>
        <div class="flex flex-col justify-center gap-2 mt-4">
          <div class="flex">
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base text-gray-800">Barangnya bagus coy asli inimah bukan kaleng kaleng ga nyesel deh beli disini nanti saya borong lagi</p>
          </div>
        </div>
      </div>
      <!-- End Customer -->
      <!-- Customer -->
      <div class="border-b py-4">
        <div class="flex items-center">
          <div class="flex items-center gap-4 w-full">
              <img src="/assets/team/azfa.jpg" alt="Customer Image" class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full">
              <p class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                Muhammad Azfa
              </p>
          </div>
          <div class="flex justify-end w-[50%]">
              <p class="text-sm text-gray-500">2 hari yang lalu</p>
          </div>
        </div>
        <div class="flex flex-col justify-center gap-2 mt-4">
          <div class="flex">
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
            <svg class="flex-shrink-0 size-5 text-yellow-400 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
            </svg>
          </div>
          <div>
            <p class="text-base text-gray-800">Barangnya bagus coy asli inimah bukan kaleng kaleng ga nyesel deh beli disini nanti saya borong lagi</p>
          </div>
        </div>
      </div>
      <!-- End Customer -->
    </div>
    <!-- End Ulasan Produk -->
  </div>

</section>

<section class="my-8 border-t">

  <div class="flex items-center px-4 mt-4 mb-4 lg:px-0">
    <h3 class="text-base font-bold text-gray-800 lg:text-xl dark:text-white">Rekomendasi untuk Anda</h3>
  </div>

  <div class="grid grid-cols-2 gap-2 sm:grid-cols-4 lg:grid-cols-6 lg:gap-4">
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
          <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
              <div class="flex flex-col justify-center items-center">
                  <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                  <div
                      class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                      <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                  </div>
              </div>
              <div class="gap-1 px-1.5 pt-1 h-full text-start">
                  <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                      style="max-width: 100%;">
                      Kaos pendek cotton 30s
                  </p>
                  <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                      50.000</p>
                  <div class="flex gap-1 items-center">
                      <span class="line-through text-[11px] text-gray-400">Rp
                          75.000</span>
                      <span
                          class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                          33%
                      </span>
                  </div>
                  <div class="mt-1">
                      <span
                          class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                          <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                              </path>
                              <path d="m9 12 2 2 4-4"></path>
                          </svg>
                          Stok tersedia
                      </span>
                  </div>
                  <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                      <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          viewBox="0 0 16 16">
                          <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                      </svg>
                      <p>5.0</p>
                      <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                      <p>2160 terjual</p>
                  </div>
              </div>
          </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
        <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                <div
                    class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                    <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                </div>
            </div>
            <div class="gap-1 px-1.5 pt-1 h-full text-start">
                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                    style="max-width: 100%;">
                    Kaos pendek cotton 30s
                </p>
                <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                    50.000</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-[11px] text-gray-400">Rp
                        75.000</span>
                    <span
                        class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
                <div class="mt-1">
                    <span
                        class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                            </path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Stok tersedia
                    </span>
                </div>
                <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                    <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p>5.0</p>
                    <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                    <p>2160 terjual</p>
                </div>
            </div>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
        <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                <div
                    class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                    <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                </div>
            </div>
            <div class="gap-1 px-1.5 pt-1 h-full text-start">
                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                    style="max-width: 100%;">
                    Kaos pendek cotton 30s
                </p>
                <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                    50.000</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-[11px] text-gray-400">Rp
                        75.000</span>
                    <span
                        class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
                <div class="mt-1">
                    <span
                        class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                            </path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Stok tersedia
                    </span>
                </div>
                <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                    <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p>5.0</p>
                    <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                    <p>2160 terjual</p>
                </div>
            </div>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
        <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                <div
                    class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                    <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                </div>
            </div>
            <div class="gap-1 px-1.5 pt-1 h-full text-start">
                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                    style="max-width: 100%;">
                    Kaos pendek cotton 30s
                </p>
                <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                    50.000</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-[11px] text-gray-400">Rp
                        75.000</span>
                    <span
                        class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
                <div class="mt-1">
                    <span
                        class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                            </path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Stok tersedia
                    </span>
                </div>
                <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                    <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p>5.0</p>
                    <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                    <p>2160 terjual</p>
                </div>
            </div>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
        <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                <div
                    class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                    <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                </div>
            </div>
            <div class="gap-1 px-1.5 pt-1 h-full text-start">
                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                    style="max-width: 100%;">
                    Kaos pendek cotton 30s
                </p>
                <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                    50.000</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-[11px] text-gray-400">Rp
                        75.000</span>
                    <span
                        class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
                <div class="mt-1">
                    <span
                        class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                            </path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Stok tersedia
                    </span>
                </div>
                <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                    <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p>5.0</p>
                    <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                    <p>2160 terjual</p>
                </div>
            </div>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a href="#" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
        <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
            <div class="flex flex-col justify-center items-center">
                <img src="{{ asset('storage/products/kaos_sm.jpg') }}" class="object-cover rounded-md lg:rounded-lg" />
                <div
                    class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                    <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                </div>
            </div>
            <div class="gap-1 px-1.5 pt-1 h-full text-start">
                <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                    style="max-width: 100%;">
                    Kaos pendek cotton 30s
                </p>
                <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                    50.000</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-[11px] text-gray-400">Rp
                        75.000</span>
                    <span
                        class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
                <div class="mt-1">
                    <span
                        class="py-0.5 px-1.5 inline-flex items-center gap-x-1 text-[11px] font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                        <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                            </path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                        Stok tersedia
                    </span>
                </div>
                <div class="flex gap-1 items-center mt-1 text-xs text-gray-500">
                    <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p>5.0</p>
                    <span class="border border-gray-500 h-[0.1px] rounded-full"></span>
                    <p>2160 terjual</p>
                </div>
            </div>
        </div>
      </a>
      <!-- End Card -->
  </div>

</section>

@include('partials.footer')

@endsection
