<!-- ========== HEADER ========== -->
<!-- SearchBox Modal -->
<div id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 lg:-start-24 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
  <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="flex flex-col lg:w-[45rem] bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="relative" data-hs-combo-box='{
        "preventVisibility": true,
        "groupingType": "tabs",
        "isOpenOnFocus": true,
        {{-- "apiUrl": "{{route('product.api')}}", --}}
        "apiUrl": "https://fakestoreapi.com/products",
        "apiGroupField": "category",
        "outputItemTemplate": "<div class=\"cursor-pointer p-2 space-y-0.5 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\" data-hs-combo-box-output-item><div class=\"flex justify-between items-center w-full\"><div data-hs-combo-box-output-item-field=\"title\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></img></div>",
        "groupingTitleTemplate": "<button type=\"button\" class=\"capitalize py-1 px-2 inline-flex items-center gap-x-2 text-sm text-nowrap rounded-md border border-gray-200 bg-white text-gray-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-100 hs-combo-box-tab-active:bg-blue-600 hs-combo-box-tab-active:border-blue-600 hs-combo-box-tab-active:focus:border-blue-600 hs-combo-box-tab-active:text-white disabled:opacity-50 disabled:pointer-events-none dark:hs-combo-box-tab-active:bg-blue-500 dark:hs-combo-box-tab-active:text-white dark:hs-combo-box-tab-active:border-blue-500 dark:hs-combo-box-tab-active:focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700\"></button>",
        "tabsWrapperTemplate": "<div class=\"overflow-x-auto py-2 px-4 rounded-t-xl border-b border-gray-200 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700\"></div>"
      }'>
        <div class="relative p-4 border-b border-gray-200 dark:border-neutral-700">
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                <i class="bx bx-search text-xl text-gray-500"></i>
            </div>
            <input class="py-3 ps-10 pe-4 block h-10 w-full border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" placeholder="Cari di Tefa Store" value="" autofocus="" data-hs-combo-box-input="">
          </div>
        </div>

        <!-- SearchBox Modal Body -->
        <div class="!mt-0" data-hs-combo-box-output="">
          <div class="h-72 p-2 overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500" data-hs-combo-box-output-items-wrapper=""></div>
        </div>
        <!-- SearchBox Modal Body -->
      </div>
    </div>
  </div>
  <!-- End SearchBox Modal -->
</div>
<!-- End SearchBox -->

<nav class="hidden sm:flex items-center justify-between max-w-full px-6 sm:px-8 lg:px-10 bg-primary h-7">
  <div class="flex flex-row py-2 sm:justify-end gap-y-0 gap-x-2 sm:py-0">
    <a class="text-xs font-thin text-white text-opacity-80 hover:text-white duration-300" href="#">Hubungi Kami</a>
      <span class="text-xs font-thin text-white text-opacity-80">|</span>
    <a class="text-xs font-thin text-white text-opacity-80 hover:text-white duration-300" href="#">Cara Order</a>
      <span class="text-xs font-thin text-white text-opacity-80">|</span>
    <a class="text-xs font-thin text-white text-opacity-80 hover:text-white duration-300" href="#">FAQ</a>
  </div>

  <div class="flex justify-center items-center font-medium text-xs whitespace-nowrap text-white text-opacity-80">
    <span>Ikuti Kami</span>
    <div class="flex ml-2 gap-1 items-center font-medium text-base whitespace-nowrap">
      <a href="#" class=" text-white text-opacity-80 hover:text-opacity-100"><i class="bx bxl-facebook"></i></a>
      <a href="#" class=" text-white text-opacity-80 hover:text-opacity-100"><i class="bx bxl-instagram"></i></a>
      <a href="#" class=" text-white text-opacity-80 hover:text-opacity-100"><i class="bx bxl-youtube"></i></a>
    </div>
  </div>

  <div>
    <div class="inline-flex items-center gap-x-1 px-3 text-xs text-white text-opacity-80">
      <i class="bx bx-globe mr-1"></i>
      <button class="text-white text-opacity-80 hover:text-opacity-100">ID</button>
      <span>|</span>
      <button class="text-white text-opacity-80 hover:text-opacity-100">EN</button>
    </div>

    <button type="button" class="hs-dark-mode hs-dark-mode-active:hidden inline-flex items-center gap-x-2 px-3 text-xs text-white text-opacity-80 hover:text-opacity-100" data-hs-theme-click-value="dark">
      <i class="bx bx-moon"></i>
      Dark
    </button>
    <button type="button" class="hs-dark-mode hs-dark-mode-active:inline-flex hidden items-center gap-x-2 px-3 text-xs text-white text-opacity-80 hover:text-opacity-100" data-hs-theme-click-value="light">
      <i class="bx bx-sun"></i>
      Light
    </button>
  </div>
</nav>

<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-2 sm:py-0 dark:bg-neutral-900">
    <nav class="relative w-full sm:flex sm:items-center sm:justify-between px-6" aria-label="Global">
      <div class="flex items-center justify-between w-full">
        <a class="flex-none text-xl font-semibold dark:text-white hidden lg:block" href="#" aria-label="Logo"><img src="{{ asset('assets/logo2.png') }}" class="lg:h-12" alt=""></a>

        <div class="hidden sm:flex hs-dropdown group [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] cursor-pointer py-3 md:py-6 ml-5">
            <button class="hidden sm:flex items-center w-full text-sm text-gray-600 hover:text-black hover:bg-gray-100 group-hover:bg-gray-100 duration-300 rounded-xl p-2 font-medium dark:text-neutral-200 dark:hover:text-neutral-500">
              Kategori
              <i class="bx bx-chevron-down ms-1 text-2xl group-hover:rotate-180 duration-300"></i>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 cursor-default max-w-lg hidden z-10 top-full start-14 overflow-hidden bg-white md:shadow-2xl rounded-lg dark:bg-neutral-800 dark:divide-neutral-700 before:absolute before:-top-5 before:w-full before:h-5">
                <!-- Icon Blocks -->
                <div class="max-w-[85rem] py-2 px-2 lg:px-4 lg:py-4 mx-auto">
                  <div class="max-w-4xl mx-auto">
                    <!-- Grid -->
                    <div class="grid grid-cols-2 gap-1">
                      <div class="space-y-1">
                        <!-- Icon Block -->
                        <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                            <img src="{{ asset('assets/shirt.gif') }}" alt="" class="flex-shrink-0 size-8">
                            <div class="ms-2 sm:ms-4">
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                                Kaos
                            </h3>
                            </div>
                        </a>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                            <img src="{{ asset('assets/totebag.gif') }}" alt="" class="flex-shrink-0 size-8">
                            <div class="ms-2 sm:ms-4">
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                                Totebag
                            </h3>
                            </div>
                        </a>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                            <img src="{{ asset('assets/tumbler.gif') }}" alt="" class="flex-shrink-0 size-8">
                            <div class="ms-2 sm:ms-4">
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                                Tumbler
                            </h3>
                            </div>
                        </a>
                        <!-- End Icon Block -->
                      </div>
                      <!-- End Col -->

                      <div class="space-y-1">
                        <!-- Icon Block -->
                        <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                            <img src="{{ asset('assets/mug.gif') }}" alt="" class="flex-shrink-0 size-8">
                            <div class="ms-2 sm:ms-4">
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                                Mug
                            </h3>
                            </div>
                        </a>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                            <img src="{{ asset('assets/ganci.gif') }}" alt="" class="flex-shrink-0 size-8">
                            <div class="ms-2 sm:ms-4">
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                                Gantungan Kunci
                            </h3>
                            </div>
                        </a>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <a href="#" class="group flex items-center gap-2 px-2 sm:px-4 bg-gray-100 py-2 rounded-lg transition-all"
                          onmouseover="this.querySelector('.bx').style.transition = 'transform 0.3s ease-in-out'; this.querySelector('.bx').style.transform = 'translateX(50px)'"
                          onmouseout="this.querySelector('.bx').style.transition = 'transform 0.3s ease-in-out'; this.querySelector('.bx').style.transform = 'none'"
                          style="text-decoration: none; color: inherit;">
                          <div>
                            <h3 class="text-sm text-gray-500 dark:text-neutral-200">
                              Lihat semua
                            </h3>
                          </div>
                          <div class="inline-flex">
                            <i class="bx bx-right-arrow-alt text-2xl text-gray-500 flex-shrink-0"></i>
                          </div>
                        </a>
                        <!-- End Icon Block -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Grid -->
                  </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
          </div>

        <div class="flex flex-col gap-y-4 gap-x-0 sm:flex-row sm:items-center sm:justify-between sm:gap-y-0 sm:gap-x-5 sm:mx-5 w-full">
          <!-- SearchBox -->
          <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
              <i class="bx bx-search text-xl text-gray-500"></i>
            </div>
            <input class="block py-3 ps-10 pe-4 w-[100%] h-8 lg:h-10 border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 cursor-pointer disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" placeholder="Cari di Tefa Store" value="" data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger" readonly>
          </div>
        </div>

        <div class="flex items-center gap-3 sm:gap-4 ml-6 lg:mr-6">
          <!-- Notification -->
          <button type="button" class="flex items-center z-50" data-hs-overlay="#hs-scroll-inside-body-modal">
            <i class="bx bx-bell text-2xl text-gray-500 hover:text-black duration-300"></i>
          </button>
          <!-- Cart -->
          <button type="button" class="flex items-center z-50" data-hs-overlay="#hs-overlay-right">
            <i class="bx bx-cart text-2xl text-gray-500 hover:text-black duration-300"></i>
          </button>
        </div>

        <!-- Off canvas Notification -->
        <div id="hs-scroll-inside-body-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
              <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                  <h3 class="text-base font-bold text-gray-800 dark:text-white">
                    Notifikasi
                  </h3>
                  <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-scroll-inside-body-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18"></path>
                      <path d="m6 6 12 12"></path>
                    </svg>
                  </button>
                </div>
                <div class="p-0 overflow-y-auto divide-y">
                  <!-- Card -->
                  <a href="#" class="group flex items-center gap-y-6 gap-x-4 p-4 size-full hover:bg-gray-100 duration-300 transition-all dark:bg-neutral-800 dark:focus:outline-none dark:focus:bg-neutral-800">
                      <div class="inline-flex justify-center items-center py-1 px-2 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                          <i class="bx bx-envelope flex-shrink-0 text-2xl text-gray-800 dark:text-neutral-200"></i>
                      </div>
                      <div class="w-full">
                          <p class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">Judul notifikasi</p>
                          <p class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">Ini adalah pesan dari notifikasi</p>
                      </div>
                      {{-- <span class="size-2 inline-block bg-red-500 rounded-full me-2 p-1"></span> --}}
                      <div class="relative flex justify-center items-center me-2">
                        <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75 dark:bg-red-600"></span>
                        <span class="relative inline-flex rounded-full size-3 bg-red-500"></span>
                      </div>                      
                  </a>
                  <!-- End Card -->
                  <!-- Card -->
                  <a href="#" class="group flex items-center gap-y-6 gap-x-4 p-4 size-full hover:bg-gray-100 duration-300 transition-all dark:bg-neutral-800 dark:focus:outline-none dark:focus:bg-neutral-800">
                    <div class="inline-flex justify-center items-center py-1 px-2 rounded-full border-4 border-blue-50 bg-blue-100 dark:border-blue-900 dark:bg-blue-800">
                        <i class="bx bx-envelope flex-shrink-0 text-2xl text-gray-800 dark:text-neutral-200"></i>
                    </div>
                    <div class="w-full">
                        <p class="block font-bold text-gray-800 dark:text-white text-sm max-w-[14rem] sm:max-w-[22rem] truncate">UTBK/SNBT</p>
                        <p class="text-gray-600 dark:text-neutral-400 truncate-[6rem] text-[14px] max-w-[14rem] sm:max-w-[22rem] truncate">Selamat anda dinyatakan lulus!</p>
                    </div>
                    <span class="text-end w-20 text-xs text-gray-500">13 Jun</span>
                  </a>
                  <!-- End Card -->
                </div>
                <div class="pt-1.5"></div>
              </div>
            </div>
          </div>
        <!-- End Off canvas Notification -->

        <!-- Off canvas Cart -->
        <div id="hs-overlay-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-full sm:max-w-sm w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700" tabindex="-1">
          <div class="flex justify-between items-center py-3 px-4 shadow-md dark:border-neutral-700">
            <h3 class="text-base font-bold text-gray-800 dark:text-white">
              Keranjang
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-right">
              <span class="sr-only">Close modal</span>
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-between border-b max-w-full px-4 mb-4 h-9">
            <p class="inline-flex items-center gap-x-2 text-xs text-gray-600">
              2 produk
            </p>
            <button type="submit" class="inline-flex items-center gap-x-2 text-xs font-semibold text-red-600 hover:text-opacity-60 duration-300" data-hs-overlay="#hs-vertically-centered-modal"
            data-hs-overlay-options='{
              "isClosePrev": false
            }'>Hapus
            </button>
          </div>
          
          <div class="flex items-center justify-between max-w-full px-4 mx-4 rounded-lg bg-gradient-to-br from-purple-200 h-9">
            <span class="inline-flex items-center gap-x-2 text-sm text-purple-700">
              <i class="bx bxs-package text-xl"></i>
              Ayo checkout belanjaanmu sekarang!
            </span>
          </div>
          <div class="divide-y-8 divide-gray-100">
            <!-- Card -->
            <div class="group flex gap-y-6 p-4 size-full transition-all dark:bg-neutral-800 dark:focus:outline-none dark:focus:bg-neutral-800" href="#">
              {{-- <svg class="flex-shrink-0 size-8 text-gray-800 mt-0.5 me-6 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5"/><circle cx="17.5" cy="10.5" r=".5"/><circle cx="8.5" cy="7.5" r=".5"/><circle cx="6.5" cy="12.5" r=".5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg> --}}
              <img src="{{ asset('assets/products/kaos_sm.jpg') }}" alt="" class="h-20 rounded-lg mr-3">
              <div class="w-full">
                <div>
                  <p class="text-gray-600 dark:text-neutral-400 max-w-[16rem] truncate text-[14px]">Kaos pendek cotton combed 30s</p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                </div>

                <div class="flex justify-between">
                  <!-- Input Number -->
                  <div class="py-1 px-1 mt-2 inline-block bg-white border border-gray-200 rounded-3xl dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                    <div class="flex items-center gap-x-1.5">
                      <button type="button" class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-decrement="">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                        </svg>
                      </button>
                      <input class="text-sm p-0 w-8 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input="">
                      <button type="button" class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-increment="">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5v14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- End Input Number -->
                  <button class="flex items-center mt-2">
                    <i class="bx bx-trash text-xl text-red-600 hover:text-opacity-60 duration-300"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="group flex gap-y-6 p-4 size-full transition-all dark:bg-neutral-800 dark:focus:outline-none dark:focus:bg-neutral-800" href="#">
              {{-- <svg class="flex-shrink-0 size-8 text-gray-800 mt-0.5 me-6 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5"/><circle cx="17.5" cy="10.5" r=".5"/><circle cx="8.5" cy="7.5" r=".5"/><circle cx="6.5" cy="12.5" r=".5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg> --}}
              <img src="{{ asset('assets/products/kaos_sm.jpg') }}" alt="" class="h-20 rounded-lg mr-3">
              <div class="w-full">
                <div>
                  <p class="text-gray-600 dark:text-neutral-400 max-w-[16rem] truncate text-[14px]">Kaos pendek cotton combed 30s</p>
                  <p class="block font-bold text-gray-800 dark:text-white text-sm">Rp50.000</p>
                </div>

                <div class="flex justify-between">
                  <!-- Input Number -->
                  <div class="py-1 px-1 mt-2 inline-block bg-white border border-gray-200 rounded-3xl dark:bg-neutral-900 dark:border-neutral-700" data-hs-input-number="">
                    <div class="flex items-center gap-x-1.5">
                      <button type="button" class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-decrement="">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                        </svg>
                      </button>
                      <input class="text-sm p-0 w-8 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input="">
                      <button type="button" class="size-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-input-number-increment="">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M5 12h14"></path>
                          <path d="M12 5v14"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <!-- End Input Number -->
                  <button class="flex items-center mt-2">
                    <i class="bx bx-trash text-xl text-red-600 hover:text-opacity-60 duration-300"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <nav class="border-gray-200 fixed w-full z-20 bottom-0 start-0">
            <div class="flex items-center justify-between py-2 px-4">
            <h4 class="text-sm">Total <span class="text-base font-bold">Rp100.000</span></h4>
              <form action="#" method="">
                  @csrf
                  <button type="submit" class="inline-flex justify-center items-center h-9 gap-x-3 text-center bg-gradient-to-r from-secondary to-primary hover:from-primary hover:to-secondary duration-300 text-white text-sm font-semibold rounded-3xl py-5 px-7">
                    Beli (2)
                  </button>
              </form>
            </div>
          </nav>
        </div>
        <!-- End Off canvas Cart -->

        <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed -top-4 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
          <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-neutral-900">
              <div class="absolute top-2 end-2">
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-modal">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
              </div>
        
              <div class="p-4 sm:p-10 text-center overflow-y-auto">
                <!-- Icon -->
                <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-yellow-50 bg-yellow-100 text-yellow-500 dark:bg-yellow-700 dark:border-yellow-600 dark:text-yellow-100">
                  <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                </span>
                <!-- End Icon -->
        
                <h3 class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                  Sign out
                </h3>
                <p class="text-gray-500 dark:text-neutral-500">
                  Are you sure you would like to sign out of your Preline account?
                </p>
        
                <div class="mt-6 flex justify-center gap-x-4">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" href="#">
                    Sign out
                  </a>
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- <div id="hs-vertically-centered-modal" class="hs-overlay hs-overlay-backdrop-open:bg-gray-900/70 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
          <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
              <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                  Modal title
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-vertically-centered-modal">
                  <span class="sr-only">Close</span>
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
              </div>
              <div class="p-4 overflow-y-auto">
                <p class="text-gray-800 dark:text-neutral-400">
                  This is a wider card with supporting text below as a natural lead-in to additional content.
                </p>
              </div>
              <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-vertically-centered-modal">
                  Close
                </button>
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                  Save changes
                </button>
              </div>
            </div>
          </div>
        </div> --}}

        <!-- Hamburger -->
        <div class="lg:hidden flex justify-end gap-2 ml-2">
          <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-white" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <box-icon name='menu-alt-right' color="#6b7280"></box-icon>
          </button>
        </div>
      </div>

      <div id="navbar-collapse-with-animation" class="lg:flex lg:justify-center lg:my-4 lg:ml-6 lg:px-4 hs-collapse hidden overflow-hidden transition-all duration-300">
        <div class="flex justify-center gap-2">
          <a class="inline-flex justify-center items-center h-9 gap-x-3 text-center bg-transparent hover:bg-neutral-10 duration-300 border border-secondary text-secondary text-sm font-medium rounded-3xl py-3 px-4" href="#">
            Masuk
          </a>
          <a class="inline-flex justify-center items-center h-9 gap-x-3 text-center bg-gradient-to-r from-secondary to-primary hover:from-primary hover:to-secondary duration-300 text-white text-sm font-medium rounded-3xl py-3 px-5" href="#">
            Daftar
          </a>
        </div>
      </div>

    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

{{-- <div class="sm:hidden hs-dropdown relative inline-flex cursor-pointer py-3 md:py-6 ml-5">
  <button id="hs-dropdown-default" class="hs-dropdown-toggle sm:hidden flex items-center w-full text-base text-gray-600 hover:text-black hover:bg-gray-100 group-hover:bg-gray-100 duration-300 rounded-xl p-2 font-normal dark:text-neutral-200 dark:hover:text-neutral-500">
    Kategori
    <svg class="flex-shrink-0 ms-2 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
  </button>

  <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default"">
    <!-- Icon Blocks -->
    <div class="max-w-xs py-2 px-2 mx-auto">
      <div class="max-w-4xl mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2">
            <div class="space-y-0">
            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/shirt.gif') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Kaos
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/totebag.gif') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Totebag
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/tumbler.gif') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Tumbler
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->
            </div>
            <!-- End Col -->

            <div class="space-y-0">
            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/mug.gif') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Mug
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/ganci.gif') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Gantungan Kunci
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <a href="#" class="flex items-center hover:bg-gray-100 px-4 py-2 rounded-lg">
                <img src="{{ asset('assets/pin.png') }}" alt="" class="flex-shrink-0 size-8">
                <div class="ms-2 sm:ms-4">
                <h3 class="text-sm sm:text-base text-gray-500 dark:text-neutral-200">
                    Pin
                </h3>
                </div>
            </a>
            <!-- End Icon Block -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Icon Blocks -->
  </div>
</div> --}}

{{-- <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 dark:text-neutral-200">
  Learn more
  <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
</p> --}}

  <script>
    window.addEventListener("keydown", function (evt) {
      if (evt.code === "Backslash") {
        const overlay = HSOverlay.getInstance('[data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger"]', true);
        const combobox = HSComboBox.getInstance('#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger [data-hs-combo-box]', true);

        if (overlay.element && overlay.element.overlay.classList.contains('open')) return false;

        overlay.element.open();
        combobox.element.setCurrent();
      }
    });
  </script>
