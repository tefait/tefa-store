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

<section class="grid grid-rows-12 lg:grid-cols-12 gap-x-8 gap-y-4 mt-4 lg:mt-6">
    <div class="col-span-4">
      <div style="--swiper-pagination-color: #fff" class="swiper mySwiperDP2 h-[70%] w-[88%] mx-auto rounded-xl">
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

@endsection
