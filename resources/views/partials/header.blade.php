<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap lg:justify-start lg:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:py-4 lg:ps-64 dark:bg-neutral-800 dark:border-neutral-700">
    <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
      <div class="me-5 lg:me-0 lg:hidden w-full">
        <!-- Logo -->
          <a class="flex" href="#" aria-label="Logo">
            <img src="{{ asset('assets/img/logo2.png') }}" class="" alt="">
          </a>
        <!-- End Logo -->
      </div>

      <div class="w-full flex items-center justify-end lg:justify-between ms-auto lg:gap-x-3 lg:order-3">
        <div class="hidden lg:flex items-center gap-1">
          <h3 class="text-xl font-bold italic text-primary dark:text-blue-300">
            Semangat bekerja
          </h3>
          <img src="{{ asset('assets/icons/api.gif') }}" alt="" class="h-7">
        </div>

        <div class="flex flex-row items-center justify-end gap-2">
          <button type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
          </button>

          <!-- Button Light/Dark Mode -->
          <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode group rounded-full border border-transparent py-1 px-2.5 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none hover:text-primary font-medium dark:hover:text-neutral-500 duration-300" data-hs-theme-click-value="dark">
            <i class="bx bx-moon text-lg"></i>
          </button>
          <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode group rounded-full border border-transparent py-1 px-2.5 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 font-medium dark:hover:text-yellow-400 duration-300" data-hs-theme-click-value="light">
            <i class="bx bx-sun text-lg"></i>
          </button>
          <!-- End Button Light/Dark Mode -->

          <div class="hs-dropdown [--placement:bottom-right] relative inline-flex ms-2">
            <button id="hs-dropdown-with-header" type="button" class="h-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
              <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-neutral-800" src="{{ asset('assets/team/hafiz.jpg') }}" alt="Profile Image">
              <span class="absolute bottom-0 end-0 block size-3 rounded-full ring-2 ring-white bg-green-500 dark:ring-neutral-900"></span>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-50 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700" aria-labelledby="hs-dropdown-with-header">
              <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
                  <h3 class="text-base font-bold text-gray-800 dark:text-white">Admin</h3>
                  <p class="text-sm text-gray-600 dark:text-neutral-400">admin@gmail.com</p>
              </div>
              <div class="mt-2 py-2 first:pt-0 last:pb-0">
                  <a href="#" class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 duration-300 dark:text-white dark:hover:bg-neutral-800">
                      <i class="bx bx-user text-xl"></i>
                      Akun Saya
                  </a>
                  <hr class="my-2">
                  <a href="#" class="flex items-center gap-x-2 py-1.5 px-3 rounded-lg text-sm dark:font-bold text-red-600 hover:bg-gray-100 duration-300 dark:text-red-500 dark:hover:bg-neutral-800">
                      <i class="bx bx-log-out-circle text-xl"></i>
                      Logout
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
