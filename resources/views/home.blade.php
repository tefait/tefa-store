@extends('layouts.app')

@section('container')

<div class="lg:hidden flex justify-between pb-4 px-4">
    <div class="flex items-center">
        <div class="relative inline-block min-w-10">
            <img class="inline-block h-10 w-full rounded-full" src="{{ asset('assets/maskot.png') }}" alt="Profile Image">
        </div>
        <div class="ms-3">
            <h3 class="text-sm font-bold text-gray-800 dark:text-white max-w-[15rem] truncate">Hai, Calon Pembeli!</h3>
            <p class="text-xs text-gray-600 dark:text-neutral-400 max-w-[15rem] truncate">Selamat Datang di Tefa Store</p>
        </div>
    </div>
    <div class="flex items-center">
      <a href="#" class="inline-flex justify-center items-center h-9 w-full gap-x-3 text-center bg-gradient-to-r from-secondary to-primary hover:from-primary hover:to-secondary duration-300 text-white text-sm font-medium rounded-3xl py-3 px-5">
        Masuk
      </a>
    </div>
</div>

<!-- Carousel -->
<div class="flex justify-center px-4 lg:px-16">
  <div class="w-full rounded-xl">
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "isAutoPlay": true
      }' class="relative">
      <div class="hs-carousel relative overflow-hidden w-full h-32 sm:h-60 lg:h-[300px] rounded-xl">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel1.jpg') }}" alt="First slide" class="h-full w-full" />
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel2.jpg') }}" alt="Second slide" class="h-full w-full" />
            </div>
          </div>
          <div class="hs-carousel-slide">
            <div class="flex justify-center items-center h-full w-full">
              <img src="{{ asset('assets/carousel/carousel3.jpg') }}" alt="Third slide" class="h-full w-full" />
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 hidden lg:inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 duration-300">
        <span class="text-2xl" aria-hidden="true">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 hidden lg:inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 duration-300">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </span>
      </button>

      <div class="hs-carousel-pagination flex justify-start absolute bottom-2 lg:bottom-3 start-5 space-x-1">
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
        <span class="hs-carousel-active:bg-white bg-white bg-opacity-50 size-1.5 lg:size-2 rounded-full cursor-pointer"></span>
      </div>
    </div>
  </div>
</div>
<!-- End Carousel -->

<!-- Kategori -->
<div class="lg:hidden py-2 px-4 mt-2">
  <div class="flex justify-between items-center mb-2">
    <h3 class="text-base font-bold text-gray-800 dark:text-white">Kategori</h3>
    <a href="#">
      <i class="bx bx-right-top-arrow-circle py-0.5 px-1.5 rounded-full text-2xl text-gray-800 dark:text-white hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200"></i>
    </a>
  </div>
  <div class="flex flex-wrap">
    <div class="w-1/3 p-1 border-r border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/kaos.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Kaos
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/totebag.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Totebag
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-b">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/tumbler.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Tumbler
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/mug.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Mug
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1 border-r">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/ganci.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Ganci
          </h3>
        </div>
      </a>
    </div>
    <div class="w-1/3 p-1">
      <a href="#" class="flex items-center hover:bg-neutral-100 dark:hover:bg-neutral-700 duration-200 p-2 rounded-lg">
        <img src="{{ asset('assets/kategori/pin.png') }}" alt="" class="flex-shrink-0 size-7">
        <div class="ms-2">
          <h3 class="text-sm text-gray-800 dark:text-white">
            Pin
          </h3>
        </div>
      </a>
    </div>
  </div>
</div>

@endsection
