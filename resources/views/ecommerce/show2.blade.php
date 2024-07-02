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

    <section class="flex flex-col sm:grid sm:grid-cols-12 lg:gap-x-8 lg:gap-y-4 lg:mt-6">
        <div class="col-span-6 lg:col-span-4 w-[100vw] sm:w-auto">
            <div style="--swiper-pagination-color: #fff"
                class="swiper mySwiperDP2 h-96 w-full sm:h-[80%] sm:w-[88%] sm:rounded-xl">
                <div class="swiper-wrapper">
                    @foreach ($product->images as $m)
                        <div class="swiper-slide bg-cover bg-center">
                            <img src="{{ asset($m->url) }}" class="block h-full w-full object-cover" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div thumbsSlider=""
                class="swiper mySwiperDP hidden sm:block h-[20%] w-[88%] box-border pt-[10px] cursor-pointer">
                <div class="swiper-wrapper">
                    @foreach ($product->images as $m)
                        <div class="swiper-slide bg-cover bg-center w-[22%] h-full opacity-[0.5]">
                            <img src="{{ asset($m->url) }}" class="block h-full w-full object-cover rounded-lg" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex flex-col col-span-6 lg:col-span-5 mt-3 px-4 sm:mt-0 sm:px-0">
            <p class="lg:font-semibold text-xl text-gray-800 dark:text-neutral-300">{{ $product->name }}</p>
            <div class="flex lg:hidden gap-3 mt-1">
                <p class="block text-2xl font-bold text-gray-800 dark:text-white">
                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-sm text-gray-400">
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                    </span>
                    <span
                        class="py-[1px] px-1.5 inline-flex items-centcacheer text-[12px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
            </div>
            <div class="flex gap-1 items-center mt-1 text-sm text-gray-500">
                <svg class="flex-shrink-0 text-yellow-400 size-3.5 dark:text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                    </path>
                </svg>
                <p class="font-semibold text-gray-800">5.0 <span class="font-normal">(120)</span></p>
                <span class="border border-gray-600 h-[0.1px] mx-1 rounded-full"></span>
                <p>Terjual {{ $product->orders->count() }}</p>
            </div>
            <span
                class="mt-2 py-1.5 w-28 inline-flex justify-center items-center gap-x-1 text-xs font-bold bg-teal-100 text-green-600 rounded-full dark:bg-teal-500/10 dark:text-green-500">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
                Stok tersedia
            </span>
            <div class="hidden lg:flex flex-col mt-4">
                <p class="block text-2xl font-bold text-gray-800 dark:text-white">
                    Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <div class="flex gap-1 items-center">
                    <span class="line-through text-sm text-gray-400">
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                    </span>
                    <span
                        class="py-[1px] px-1.5 inline-flex items-centcacheer text-[12px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                        33%
                    </span>
                </div>
            </div>
            <p class="hidden sm:flex font-bold text-md text-gray-800 dark:text-neutral-300 mt-8">
                Pilih warna:<span class="font-normal text-gray-600">&nbsp;Putih</span>
            </p>
            <nav class="hidden gap-2 py-2 bg-white sm:flex">
                <button type="button"
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium border border-primary text-primary bg-blue-50 dark:border-neutral-200 dark:text-white">Putih</button>
                <button type="button"
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">Hitam</button>
                <button type="button"
                    class="inline-flex items-center gap-x-1.5 py-1.5 px-4 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">Abu-abu</button>
            </nav>
            <p class="hidden sm:flex font-bold text-md text-gray-800 dark:text-neutral-300 mt-4">
                Pilih ukuran:<span class="font-normal text-gray-600">&nbsp;S</span>
            </p>
            <nav class="hidden gap-2 py-2 bg-white sm:flex">
                <button type="button"
                    class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium border border-primary text-primary bg-blue-50 dark:border-neutral-200 dark:text-white">S</button>
                <button type="button"
                    class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">M</button>
                <button type="button"
                    class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">L</button>
                <button type="button"
                    class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">XL</button>
                <button type="button"
                    class="inline-flex justify-center items-center gap-x-1.5 py-1.5 w-16 rounded-full text-sm font-medium bg-gray-100 border border-gray-100 text-gray-800 dark:border-neutral-200 dark:text-white">XXL</button>
            </nav>
        </div>

        <div class="lg:col-span-3 hidden lg:block">
            <form action="{{ route('front.cart') }}" method="POST"
                class="p-4 h-auto w-full bg-white border border-neutral-200 shadow-sm rounded-xl transition dark:bg-neutral-900 dark:border-neutral-800">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
                <div class="flex justify-center w-full">
                    <p class="text-center font-bold">Atur kuantitas</p>
                </div>
                <div class="flex mt-4">
                    <p class="text-sm text-gray-800">Putih, S</p>
                </div>
                <div class="flex flex-col gap-2 mt-1">
                    <p class="text-sm text-gray-800 dark:text-neutral-300 mt-4">
                        Stok tersedia: <span class="font-bold text-gray-600">{{ $product->stock }}</span>
                    </p>
                    <!-- Input Number -->
                    <div class="inline-flex justify-center py-1 w-24 bg-white rounded-3xl border border-gray-300 dark:bg-neutral-900 dark:border-neutral-700"
                        data-hs-input-number="">
                        <div class="flex gap-x-1.5 items-center">
                            <button type="button"
                                class="inline-flex gap-x-2 justify-center items-center text-sm font-medium text-gray-800 rounded-md size-4 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                data-hs-input-number-decrement="">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                </svg>
                            </button>
                            <input
                                class="p-0 w-9 text-center text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white"
                                type="text" value="1" max="{{ $product->stock }}" data-hs-input-number-input=""
                                name="qty">
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
                    <button type="submit"
                        class="w-full py-1.5 px-auto inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-full text-white bg-gradient-to-r from-secondary to-primary hover:bg-gradient-to-l disabled:opacity-50 disabled:pointer-events-none duration-300">
                        <i class="bx bx-cart text-lg"></i>
                        Keranjang
                    </button>
                </div>
                <div class="mt-2">
                    <button type="button"
                        class="relative w-full py-1.5 px-auto inline-flex items-center justify-center gap-x-2 rounded-full font-semibold text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700Z">
                        <i class="bx bx-phone-call text-lg"></i>
                        Hubungi kami
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section
        class="sm:grid sm:grid-cols-12 lg:gap-x-4 px-4 mt-4 sm:px-0 sm:mt-6 border-y sm:divide-x lg:border lg:rounded-xl">
        <div class="sm:col-span-6 lg:col-span-8 lg:px-4 mb-2">
            <nav class="pb-1 flex">
                <button type="button"
                    class="cursor-default font-semibold text-primary py-3 px-1 inline-flex items-center gap-x-2 border-b-2 border-primary text-sm whitespace-nowrap">
                    Detail Produk
                </button>
            </nav>

            <div
                class="max-h-[600px] lg:max-h-[700px] overflow-x-hidden [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div>
                    <p class="mt-3 text-gray-500 dark:text-neutral-400">
                        {!! $product->description !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="sm:col-span-6 lg:col-span-4">
            <nav class="flex mt-2 pb-1 sm:mt-0 sm:ps-4">
                <button type="button"
                    class="cursor-default font-semibold text-primary py-3 px-1 inline-flex items-center gap-x-2 border-b-2 border-primary text-sm whitespace-nowrap">
                    Ulasan
                </button>
            </nav>

            <div class="sm:px-4">
                <div class="flex justify-center items-center gap-2 mt-3">
                    <svg class="flex-shrink-0 size-7 sm:size-9 lg:size-10 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <h3 class="text-4xl sm:text-6xl lg:text-7xl text-gray-800">4.9<span
                            class="text-base text-gray-500">/5.0</span></h3>
                </div>
                <div class="flex flex-col items-center">
                    <p class="font-semibold text-sm text-gray-800">98% pelanggan merasa puas</p>
                    <span class="text-sm text-gray-500">104 ulasan</span>
                </div>
                <div class="flex items-center gap-2 mt-4 w-full">
                    <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p class="font-semibold text-sm">5</p>
                    <!-- Progress -->
                    <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                                style="width: 98%"></div>
                        </div>
                        <div class="w-10 text-end">
                            <span class="text-sm text-gray-800 dark:text-white">98</span>
                        </div>
                    </div>
                    <!-- End Progress -->
                </div>
                <div class="flex items-center gap-2 w-full">
                    <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p class="font-semibold text-sm">4</p>
                    <!-- Progress -->
                    <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                                style="width: 2%"></div>
                        </div>
                        <div class="w-10 text-end">
                            <span class="text-sm text-gray-800 dark:text-white">4</span>
                        </div>
                    </div>
                    <!-- End Progress -->
                </div>
                <div class="flex items-center gap-2 w-full">
                    <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p class="font-semibold text-sm">3</p>
                    <!-- Progress -->
                    <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                                style="width: 0%"></div>
                        </div>
                        <div class="w-10 text-end">
                            <span class="text-sm text-gray-800 dark:text-white">0</span>
                        </div>
                    </div>
                    <!-- End Progress -->
                </div>
                <div class="flex items-center gap-2 w-full">
                    <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p class="font-semibold text-sm">2</p>
                    <!-- Progress -->
                    <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                                style="width: 0%"></div>
                        </div>
                        <div class="w-10 text-end">
                            <span class="text-sm text-gray-800 dark:text-white">0</span>
                        </div>
                    </div>
                    <!-- End Progress -->
                </div>
                <div class="flex items-center gap-2 w-full">
                    <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                        </path>
                    </svg>
                    <p class="font-semibold text-sm">1</p>
                    <!-- Progress -->
                    <div class="flex items-center gap-x-3 w-full whitespace-nowrap">
                        <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"
                            role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                                style="width: 0%"></div>
                        </div>
                        <div class="w-10 text-end">
                            <span class="text-sm text-gray-800 dark:text-white">0</span>
                        </div>
                    </div>
                    <!-- End Progress -->
                </div>

                <!-- Ulasan Produk -->
                <div
                    class="pe-2 pt-4 sm:pt-0 sm:py-4 max-h-[320px] lg:max-h-[420px] overflow-x-hidden [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    @foreach ($product->comments as $comment)
                        <section id="T{{ $comment->id }}"></section>
                        <div class="border-b py-2 last:border-none">
                            <div class="flex items-center">
                                <div class="flex items-center gap-4 w-full">
                                    <img src="/assets/team/hafiz.jpg" alt="Customer Image"
                                        class="size-8 sm:h-[2.875rem] sm:w-[2.875rem] rounded-full">
                                    <p class="text-sm font-semibold text-gray-800 sm:text-base dark:text-neutral-200">
                                        {{ $comment->customer->name }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center gap-2 mt-2">
                                <div class="flex">
                                    @for ($i = 0; $i <= $comment->penilaian; $i++)
                                        <svg class="flex-shrink-0 size-4 text-yellow-400 dark:text-yellow-600"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                            </path>
                                        </svg>
                                    @endfor
                                    <div class="flex justify-end w-full">
                                        <p class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-base text-gray-800">
                                        {{ $comment->kutipan }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Ulasan Produk -->
            </div>
        </div>
    </section>

    <section class="my-8 px-4 lg:px-0">
        <div class="flex items-center mt-4 mb-4 lg:px-0">
            <h3 class="text-base font-bold text-gray-800 lg:text-xl dark:text-white">Rekomendasi untuk Anda</h3>
        </div>

        <div class="grid grid-cols-2 gap-2 sm:grid-cols-4 lg:grid-cols-6 lg:gap-4">
            @foreach ($products as $p)
                <a href="{{ route('front.show_product', $p->slug) }}"
                    class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                    <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ $p->image }}" class="object-cover rounded-md lg:rounded-lg" />
                            <div
                                class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                            </div>
                        </div>
                        <div class="gap-1 px-1.5 pt-1 h-full text-start">
                            <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                                style="max-width: 100%;">
                                {{ $p->name }}
                            </p>
                            <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">
                                Rp{{ number_format($p->price, 0, ',', '.') }}
                            </p>
                            <div class="flex gap-1 items-center">
                                <span class="line-through text-[11px] text-gray-400">
                                    Rp{{ number_format($p->price, 0, ',', '.') }}</span>
                                <span
                                    class="py-[1px] px-1 inline-flex items-center text-[10px] font-semibold bg-red-100 text-red-600 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                    0%
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
                                <p>{{ $p->orders->count() }} terjual</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <div class="fixed bottom-0 left-0 w-full z-[199] bg-white dark:bg-black lg:hidden"
        style="box-shadow: 0 0px 8px rgba(0, 0, 0, 0.1);">
        <div class="flex justify-around items-center py-3 w-full">
            <div class="flex gap-2 justify-center px-4 w-full">
                <a href="#"
                    class="inline-flex justify-center items-center px-4 py-3 h-9 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-blue-100 border-primary text-primary">
                    <i class="bx bx-message-rounded-dots text-xl"></i>
                </a>
                <a href="#"
                    class="inline-flex gap-x-2 justify-center items-center px-5 py-3 w-full h-9 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                    <i class="bx bx-cart text-xl"></i>
                    Keranjang
                </a>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection
