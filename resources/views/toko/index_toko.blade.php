@extends('layouts.app')

@section('container')
    @include('partials.sidebar_toko')

    <!-- Mobile Version -->
    <nav class="flex justify-center sm:hidden sticky top-[56px] z-[199] mb-4 w-full bg-white border-b border-gray-100"
        aria-label="Tabs" role="tablist">
        <button type="button"
            class="inline-flex gap-x-2 justify-center items-center py-2 w-full text-sm text-gray-500 whitespace-nowrap border-b-2 border-transparent hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
            id="horizontal-scroll-tab-item-1" data-hs-tab="#horizontal-scroll-tab-preview"
            aria-controls="horizontal-scroll-tab-preview" role="tab">
            Semua
        </button>
        <span class="my-4 border"></span>
        <button type="button"
            class="inline-flex gap-x-2 justify-center items-center py-2 w-full text-sm text-gray-500 whitespace-nowrap border-b-2 border-transparent hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
            id="horizontal-scroll-tab-item-2" data-hs-tab="#horizontal-scroll-tab-2" aria-controls="horizontal-scroll-tab-2"
            role="tab">
            DNP
        </button>
        <span class="my-4 border"></span>
        <button type="button"
            class="inline-flex gap-x-2 justify-center items-center py-2 w-full text-sm text-gray-500 whitespace-nowrap border-b-2 border-transparent hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
            id="horizontal-scroll-tab-item-3" data-hs-tab="#horizontal-scroll-tab-3" aria-controls="horizontal-scroll-tab-3"
            role="tab">
            Software
        </button>
        <span class="my-4 border"></span>
        <button type="button"
            class="inline-flex gap-x-2 justify-center items-center py-2 w-full text-sm text-gray-500 whitespace-nowrap border-b-2 border-transparent hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary hover:text-primary focus:outline-none focus:text-primary disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
            id="horizontal-scroll-tab-item-4" data-hs-tab="#horizontal-scroll-tab-4" aria-controls="horizontal-scroll-tab-4"
            role="tab">
            Game
        </button>
        <span class="my-4 border"></span>
        <button type="button"
            class="w-[60%] bg-gray-100 rounded-full m-2 inline-flex items-center justify-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-600 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            <i class="text-lg bx bx-sort"></i>
        </button>
    </nav>
    <!-- End Mobile Version -->

    <section class="sm:ms-[270px] lg:ms-72 px-4 mb-8">
        <nav class="hidden gap-2 justify-end py-2 mb-4 bg-white sm:flex">
            <button type="button" class="filter-button{{request()->sort == "" ? "-active" : ""  }}" data-filter="">
                Semua
            </button>
            <button type="button" class="filter-button{{request()->sort && request()->sort == "newest" ? "-active" : ""  }}" data-filter="newest">
                Terbaru
            </button>
            <button type="button" class="filter-button{{request()->sort && request()->sort == "order-asc" ? "-active" : ""  }}" data-filter="order-asc">
                Terlaris
            </button>
            <button type="button" class="filter-button{{request()->sort && request()->sort == "price-highest" ? "-active" : ""  }}" data-filter="price-highest">
                Harga Tertinggi
            </button>
            <button type="button" class="filter-button{{request()->sort && request()->sort == "price-lowest" ? "-active" : ""  }}" data-filter="price-lowest">
                Harga Terendah
            </button>
            <script>
                document.querySelectorAll('.filter-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const filter = this.getAttribute('data-filter');
                        let url = new URL(window.location.href);
                        url.searchParams.set('sort', filter);
                        window.location.href = url.href;
                    });
                });
            </script>
        </nav>

        <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-5 lg:gap-4">
            <!-- Card -->
            @foreach ($products as $product)
                <a href="{{ route("front.show_product", $product->slug) }}" class="swiper-slide group flex justify-center h-[100%] w-[100%] mb-2">
                    <div class="flex flex-col w-full h-full rounded-md shadow-sm group sm:shadow-md lg:rounded-lg">
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{ $product->image }}" class="object-cover rounded-md lg:rounded-lg" />
                            <div
                                class="hidden lg:block bg-white rounded-full py-[1px] px-[5px] absolute top-2 right-2 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100">
                                <i class="text-xl text-gray-400 duration-300 bx bxs-heart hover:text-red-500"></i>
                            </div>
                        </div>
                        <div class="gap-1 px-1.5 pt-1 h-full text-start">
                            <p class="text-sm text-gray-600 dark:text-neutral-300 truncate-20-chars"
                                style="max-width: 100%;">
                                {{ $product->name }}
                            </p>
                            <p class="block mt-1 text-sm font-bold text-gray-800 dark:text-white">Rp
                                {{ number_format($product->price, 0, ',', '.') }}</p>
                            <div class="flex gap-1 items-center">
                                <span class="line-through text-[11px] text-gray-400">Rp
                                    {{ number_format($product->price, 0, ',', '.') }}</span>
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
                                <span class="border border-gray-500 h-[0.1px]"></span>
                                <p>{{ $product->orders_count }} terjual</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

            <!-- End Card -->
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="sm:[270px] lg:ms-72 max-w-[85rem] border-t mt-4 px-4 pt-4 lg:px-0 lg:py-10">
        <div class="flex justify-between">
            <div class="hidden col-span-full w-1/4 lg:col-span-1 lg:block">
                <a class="hidden flex-none text-xl font-semibold dark:text-white lg:block" href="#"
                    aria-label="Logo"><img src="{{ asset('assets/img/logo2.png') }}" class="lg:h-12"
                        alt="Logo Tefa PPLG"></a>
                <p class="mt-3 text-xs text-gray-600 sm:text-sm dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
            </div>
            <!-- End Col -->

            <!-- Grid -->
            <div class="grid grid-cols-2 gap-6 md:grid-cols-3">

                <div>
                    <h4 class="text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Tefa PPLG</h4>

                    <div class="grid mt-3 space-y-2 text-sm lg:space-y-3">
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Tentang
                                Kami</a></p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Desain
                                & Printing</a></p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Software</a>
                        </p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Game</a>
                        </p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Blog</a>
                        </p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Syarat
                                & Ketentuan</a></p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Kebijakan
                                Privasi</a></p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Members</a>
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Bantuan</h4>
                    <div class="grid mt-3 space-y-2 text-sm lg:space-y-3">
                        <span class="space-y-0.5">
                            <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">WhatsApp</p>
                            <h4><a href="#"
                                    class="text-sm font-semibold text-gray-900 duration-300 hover:text-primary dark:text-neutral-100 dark:hover:text-primary">0878-9481-8815</a>
                            </h4>
                        </span>
                        <span class="space-y-0.5">
                            <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">Email</p>
                            <h4><a href="#"
                                    class="text-sm font-semibold text-gray-900 duration-300 hover:text-primary dark:text-neutral-100 dark:hover:text-primary">tefaitrpl@gmail.com
                            </h4>
                        </span>
                    </div>

                    <h4 class="mt-3 text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Panduan
                    </h4>
                    <div class="grid space-y-2 text-sm lg:space-y-3">
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Cara
                                Order</a></p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">Pembayaran</a>
                        </p>
                        <p><a href="#"
                                class="inline-flex gap-x-2 text-gray-600 duration-300 hover:text-primary dark:text-neutral-400 dark:hover:text-primary">FAQ
                                (Tanya Jawab)</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <h4 class="text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Metode
                        Pembayaran</h4>

                    <div class="flex items-center mt-3 space-x-3 text-sm">
                        <img src="{{ asset('assets/img/BRI.svg') }}" alt="BRI" class="h-5">
                        <img src="{{ asset('assets/img/DANA.png') }}" alt="DANA" class="h-5">
                        <img src="{{ asset('assets/img/OVO.svg') }}" alt="OVO" class="h-5">
                    </div>

                    <h4 class="mt-7 text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Jasa
                        Pengiriman</h4>

                    <div class="grid mt-3 space-y-3 text-sm">
                        <img src="{{ asset('assets/img/JNE.png') }}" alt="JNE" class="h-5">
                    </div>

                    <h4 class="mt-7 text-sm font-bold text-gray-900 uppercase lg:text-base dark:text-neutral-100">Ikuti
                        Kami</h4>

                    <div class="flex items-center mt-3 space-x-2 text-3xl font-medium whitespace-nowrap">
                        <a href="#"
                            class="text-gray-600 text-opacity-80 duration-300 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary"><i
                                class="bx bxl-facebook-circle"></i></a>
                        <a href="#"
                            class="text-gray-600 text-opacity-80 duration-300 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary"><i
                                class="bx bxl-youtube"></i></a>
                        <a href="#"
                            class="text-gray-600 text-opacity-80 duration-300 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary"><i
                                class="bx bxl-instagram"></i></a>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>

        <div
            class="flex justify-center items-center mt-3 border-t border-gray-200 lg:hidden sm:justify-start dark:border-neutral-700">
            <div class="flex flex-col py-2">
                <a class="flex justify-center sm:justify-start" href="#" aria-label="Logo"><img
                        src="{{ asset('assets/img/logo2.png') }}" class="h-12" alt="Logo Tefa PPLG"></a>
                <p class="mt-1 text-xs text-gray-600 sm:text-sm dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.
                </p>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Bottom Navbar -->
    @include('partials.bottom_nav')
    <!-- End Bottom Navbar -->
@endsection
