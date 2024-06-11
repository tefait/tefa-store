<div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

            <div class="p-4 sm:p-7">
                <div class="text-center">
                  <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Masuk</h1>
                  <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                    Belum punya akun?
                    <a class="text-primary dark:text-blue-500" href="../examples/html/signup.html">
                      Daftar
                    </a>
                  </p>
                </div>

                <div class="mt-5">
                  <!-- Form -->
                  <form>
                    <div class="grid gap-y-4">
                      <!-- Form Group -->
                        <div>
                          <label for="hs-icon-email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                          <div class="relative">
                            <input type="text" id="hs-icon-email" name="hs-icon-email" class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out" placeholder="Masukkan email">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                              <i class="bx bx-envelope text-xl text-gray-400"></i>
                            </div>
                          </div>
                        </div>
                      <!-- End Form Group -->

                      <!-- Form Group -->
                        <div>
                            <div class="flex justify-between">
                                <label for="password" class="text-sm mb-2 dark:text-white">Kata Sandi</label>
                                <a class="text-sm text-primary duration-300" href="../examples/html/recover-account.html">Lupa kata sandi?</a>
                            </div>
                            <div class="relative">
                                <input type="password" id="hs-toggle-password" class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out" placeholder="Masukkan kata sandi">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                  <i class="bx bxs-key text-xl text-gray-400"></i>
                                </div>
                                <button type="button" data-hs-toggle-password='{
                                    "target": "#hs-toggle-password"
                                    }' class="absolute top-0 end-0 p-3.5 rounded-e-md">
                                    <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <!-- End Form Group -->
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-base font-medium border border-transparent bg-gradient-to-r rounded-full from-secondary to-primary hover:from-primary hover:to-secondary text-white disabled:opacity-50 disabled:pointer-events-none">
                            Masuk
                        </button>
                    </div>
                </form>
                <!-- End Form -->

                <div class="py-3 flex items-center text-xs text-gray-400 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Atau masuk dengan</div>

                <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                        <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                        <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                        <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                        <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
                    </svg>
                    Masuk dengan Google
                </button>
                </div>
            </div>

        </div>
    </div>
</div>
