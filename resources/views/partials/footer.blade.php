<!-- ========== FOOTER ========== -->
<footer class="w-full max-w-[85rem] border-t mt-4 mb-14 px-4 pt-4 lg:px-0 lg:py-10 lg:mb-0">
    <div class="flex justify-between">
        <div class="col-span-full hidden lg:col-span-1 lg:block w-1/3">
            <a class="flex-none text-xl font-semibold dark:text-white hidden lg:block" href="#"
                aria-label="Logo"><img src="{{ cache('settings')['site-logo']['value'] }}" class="lg:h-12"
                alt="Logo Tefa PPLG"></a>
            <p class="mt-3 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
        </div>
        <!-- End Col -->

        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 lg:gap-16">

            <div>
                <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Tefa PPLG</h4>

                <div class="mt-3 grid space-y-2 lg:space-y-3 text-sm">
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Tentang
                            Kami</a></p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Desain
                            & Printing</a></p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Software</a>
                    </p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Game</a>
                    </p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Blog</a>
                    </p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Syarat
                            & Ketentuan</a></p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Kebijakan
                            Privasi</a></p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Members</a>
                    </p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Bantuan</h4>
                <div class="mt-3 grid space-y-2 lg:space-y-3 text-sm">
                    <span class="space-y-0.5">
                        <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">WhatsApp</p>
                        <h4><a href="https://wa.me/62{{ ltrim(str_replace('-', '', cache('settings')['whatsapp']['value']), '0') }}"
                                class="text-sm font-semibold text-gray-900 hover:text-primary dark:text-neutral-100 dark:hover:text-primary duration-300">{{ cache('settings')['whatsapp']['value'] }}</a>
                        </h4>
                    </span>
                    <span class="space-y-0.5">
                        <p class="inline-flex gap-x-2 text-gray-600 dark:text-neutral-400">Email</p>
                        <h4><a href="mailto:{{ cache('settings')['email']['value'] }}"
                                class="text-sm font-semibold text-gray-900 hover:text-primary dark:text-neutral-100 dark:hover:text-primary duration-300">{{ cache('settings')['email']['value'] }}
                        </h4>
                    </span>
                </div>

                <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100 mt-3">Panduan</h4>
                <div class="mt-3 grid space-y-2 lg:space-y-3 text-sm">
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Cara
                            Order</a></p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">Pembayaran</a>
                    </p>
                    <p><a href="#"
                            class="inline-flex gap-x-2 text-gray-600 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300">FAQ
                            (Tanya Jawab)</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Metode
                    Pembayaran</h4>

                <div class="mt-3 flex items-center space-x-3 text-sm">
                    <img src="{{ asset('assets/img/BJB.png') }}" alt="BJB" class="h-7">
                    <img src="{{ asset('assets/img/DANA.png') }}" alt="DANA" class="h-5">
                    <img src="{{ asset('assets/img/OVO.svg') }}" alt="OVO" class="h-5">
                </div>

                <h4 class="mt-7 text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Jasa
                    Pengiriman</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <img src="{{ asset('assets/img/JNE.png') }}" alt="JNE" class="h-5">
                </div>

                <h4 class="mt-7 text-sm lg:text-base font-bold text-gray-900 uppercase dark:text-neutral-100">Ikuti Kami
                </h4>

                <div class="flex mt-3 space-x-2 items-center font-medium text-3xl whitespace-nowrap">
                    <a href="#"
                        class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i
                            class="bx bxl-facebook-circle"></i></a>
                    <a href="#"
                        class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i
                            class="bx bxl-youtube"></i></a>
                    <a href="#"
                        class="text-gray-600 text-opacity-80 hover:text-opacity-100 hover:text-primary dark:text-neutral-400 dark:hover:text-primary duration-300"><i
                            class="bx bxl-instagram"></i></a>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>

    <div
        class="lg:hidden flex items-center justify-center sm:justify-start mt-3 border-t border-gray-200 dark:border-neutral-700">
        <div class="flex flex-col py-2">
            <a class="flex justify-center sm:justify-start" href="#" aria-label="Logo"><img
                src="{{ asset('assets/img/logo2.png') }}" class="h-12" alt="Logo Tefa PPLG"></a>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 dark:text-neutral-400">© 2024 Tefa PPLG SMKN 2 Sumedang.</p>
        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->
