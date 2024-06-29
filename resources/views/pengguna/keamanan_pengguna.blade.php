@extends('layouts.app')

@section('container')

  @include('partials.sidebar_pengguna')

    <section class="max-w-full sm:ms-[270px] lg:ms-72 my-4 mb-8">
        <!-- Card Section -->
        <div class="w-full mx-auto">
          <!-- Card -->
          <div class="bg-white rounded-xl shadow-lg p-4 sm:p-7 dark:bg-neutral-800">
              <div class="mb-8">
                  <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                      Keamanan
                  </h2>
                  <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Mohon untuk tidak menyebarkan password Anda ke orang lain.
                  </p>
              </div>

              <form>
                  <!-- Grid -->
                  <div class="grid sm:grid-cols-12 gap-4">

                    <div class="sm:col-span-3">
                        <label for="password"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Kata Sandi Baru
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                      <div class="relative">
                        <input name="password" type="password" id="hs-toggle-reset-password-baru"
                          class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                          placeholder="Masukkan kata sandi baru">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                          <i class="bx bxs-key text-xl text-gray-400"></i>
                        </div>
                        <button type="button" data-hs-toggle-password='{"target": "#hs-toggle-reset-password-baru"}'
                          class="absolute top-0 end-0 p-3.5 rounded-e-md">
                          <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-600"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                          </svg>
                        </button>
                      </div>
                    </div>                    
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="password"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Konfirmasi Kata Sandi
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                      <div class="relative">
                        <input name="password" type="password" id="hs-toggle-konfirmasi-password-baru"
                          class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                          placeholder="Masukan konfirmasi kata sandi">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                          <i class="bx bxs-key text-xl text-gray-400"></i>
                        </div>
                        <button type="button" data-hs-toggle-password='{"target": "#hs-toggle-konfirmasi-password-baru"}'
                          class="absolute top-0 end-0 p-3.5 rounded-e-md">
                          <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-600"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                          </svg>
                        </button>
                      </div>
                    </div>                    
                    <!-- End Col -->

                  </div>
                  <!-- End Grid -->

                  <div class="mt-5 flex justify-end">
                      <button type="button" class="inline-flex gap-x-3 justify-center items-center py-3 px-6 h-10 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                          Konfirmasi
                      </button>
                  </div>
              </form>
          </div>
          <!-- End Card -->
      </div>
      <!-- End Card Section -->
    </section>

@endsection