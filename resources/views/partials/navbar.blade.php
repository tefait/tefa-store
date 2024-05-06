<!-- ========== HEADER ========== -->
<!-- SearchBox Modal -->
<div id="json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 lg:-start-24 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none">
  <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="flex flex-col lg:w-[45rem] bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="relative" data-hs-combo-box='{
        "preventVisibility": true,
        "groupingType": "tabs",
        "isOpenOnFocus": true,
        "apiUrl": "https://fakestoreapi.com/products",
        "apiGroupField": "category",
        "outputItemTemplate": "<div class=\"cursor-pointer p-2 space-y-0.5 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\" data-hs-combo-box-output-item><div class=\"flex justify-between items-center w-full\"><div data-hs-combo-box-output-item-field=\"title\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></img></div>",
        "groupingTitleTemplate": "<button type=\"button\" class=\"capitalize py-1 px-2 inline-flex items-center gap-x-2 text-sm text-nowrap rounded-md border border-gray-200 bg-white text-gray-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-100 hs-combo-box-tab-active:bg-blue-600 hs-combo-box-tab-active:border-blue-600 hs-combo-box-tab-active:focus:border-blue-600 hs-combo-box-tab-active:text-white disabled:opacity-50 disabled:pointer-events-none dark:hs-combo-box-tab-active:bg-blue-500 dark:hs-combo-box-tab-active:text-white dark:hs-combo-box-tab-active:border-blue-500 dark:hs-combo-box-tab-active:focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700\"></button>",
        "tabsWrapperTemplate": "<div class=\"overflow-x-auto py-2 px-4 rounded-t-xl border-b border-gray-200 [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700\"></div>"
      }'>
        <div class="relative p-4 border-b border-gray-200 dark:border-neutral-700">
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
              <box-icon name='search' color="#A0AEC0"></box-icon>
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
    <div class="inline-flex items-center gap-x-1 py-2 px-3 text-xs text-white text-opacity-80">
      <i class="bx bx-globe mr-1"></i>
      <button class="text-white text-opacity-80 hover:text-opacity-80">ID</button>
      <span>|</span>
      <button class="text-white text-opacity-80 hover:text-opacity-80">EN</button>
    </div>
    
    <button type="button" class="hs-dark-mode hs-dark-mode-active:hidden inline-flex items-center gap-x-2 py-2 px-3 text-xs text-white text-opacity-80" data-hs-theme-click-value="dark">
      <i class="bx bx-moon"></i>
      Dark
    </button>
    <button type="button" class="hs-dark-mode hs-dark-mode-active:inline-flex hidden items-center gap-x-2 py-2 px-3 text-xs text-white text-opacity-80" data-hs-theme-click-value="light">
      <i class="bx bx-sun"></i>
      Light
    </button>
  </div>
</nav>

<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-3 dark:bg-neutral-900">
    <nav class="relative w-full sm:flex sm:items-center sm:justify-between gap-24 px-6 sm:px-0 lg:px-10" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold dark:text-white hidden lg:block" href="#" aria-label="Logo"><img src="{{ asset('assets/logo2.png') }}" class="h-12" alt=""></a>

        <div class="flex flex-col gap-y-4 gap-x-0 sm:flex-row sm:items-center sm:justify-between sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">
          <!-- SearchBox -->
          <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
              <box-icon name='search' color="#A0AEC0"></box-icon>
            </div>
            <input class="block py-3 ps-10 pe-4 w-[55vw] h-8 lg:h-10 border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 cursor-pointer disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" placeholder="Cari di Tefa Store" value="" data-hs-overlay="#json-example-with-tab-filter-using-modal-popup-with-shortcut-call-trigger" readonly>
          </div>
        </div>

        <!-- Notification -->
        <button type="button" class="flex items-center z-50 ml-5" data-hs-overlay="#hs-overlay-right">
          <box-icon name="bell" color="#6b7280"></box-icon>
        </button>

        <!-- Cart -->
        <button type="button" class="flex items-center z-50 sm:mx-5" data-hs-overlay="#hs-overlay-right">
          <box-icon name="cart" color="#6b7280"></box-icon>
        </button>
        
        <div id="hs-overlay-right" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700" tabindex="-1">
          <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
              Offcanvas title
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-overlay-right">
              <span class="sr-only">Close modal</span>
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </button>
          </div>
          <div class="p-4">
            <p class="text-gray-800 dark:text-neutral-400">
              Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </p>
          </div>
        </div>

        <!-- Hamburger -->
        <div class="lg:hidden flex justify-end gap-2">
          <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-white" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <box-icon name='menu-alt-right' color="#6b7280"></box-icon>
          </button>
        </div>
      </div>

      <div id="navbar-collapse-with-animation" class="sm:my-4 sm:ps-4 hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:flex lg:justify-end">
        <div class="flex justify-center gap-2">
          <a class="inline-flex justify-center items-center h-9 gap-x-3 text-center bg-transparent hover:bg-neutral-10 duration-300 border border-secondary text-secondary text-sm font-medium rounded-3xl focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
            Masuk
          </a>
          <a class="inline-flex justify-center items-center h-9 gap-x-3 text-center bg-gradient-to-r from-secondary to-primary hover:from-primary hover:to-secondary duration-300 border border-transparent text-white text-sm font-medium rounded-3xl focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
            Daftar
          </a>
        </div>
      </div>

    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- Nav -->
  {{-- <nav class="max-w-[85rem] mx-auto px-6 sm:px-8 lg:px-10">
    <div class="relative flex flex-row justify-between items-center gap-x-8 border-t py-4 sm:py-0 dark:border-neutral-700">
      <div class="flex items-center sm:w-[auto] w-full">
        <span class="font-semibold whitespace-nowrap text-gray-800 border-e border-e-white/70 sm:border-transparent pe-4 me-4 sm:py-3.5 dark:text-white">My project</span>

        <div class="w-full sm:hidden">
          <button type="button" class="hs-collapse-toggle group w-full inline-flex justify-between items-center gap-2 rounded-lg font-medium text-gray-600 border border-gray-200 align-middle py-1.5 px-2 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-white/50 transition" data-hs-collapse="#secondary-nav-toggle" aria-controls="secondary-nav-toggle" aria-label="Toggle navigation">
            Overview
            <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 size-4 transition group-hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
          </button>
        </div>
      </div>

      <div id="secondary-nav-toggle" class="hs-collapse hidden overflow-hidden transition-all duration-300 absolute top-16 end-0 w-full rounded-lg bg-white sm:block sm:static sm:top-0 sm:w-full sm:max-h-full sm:bg-transparent sm:overflow-visible">
        <div class="flex flex-col py-2 sm:flex-row sm:justify-end sm:gap-y-0 sm:gap-x-6 sm:py-0">
          <a class="text-sm font-semibold text-blue-600 py-2 sm:py-3.5 dark:text-white dark:hover:text-white" href="#">Overview</a>
          <a class="text-sm font-medium text-gray-800 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-400 dark:hover:text-white" href="#">Features</a>
          <a class="text-sm font-medium text-gray-800 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-400 dark:hover:text-white" href="#">Platforms</a>
          <a class="text-sm font-medium text-gray-800 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-400 dark:hover:text-white" href="#">Pricing</a>
        </div>
      </div>
    </div>
  </nav> --}}
  <!-- End Nav -->

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