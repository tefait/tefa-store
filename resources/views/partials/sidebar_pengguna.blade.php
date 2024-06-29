<!-- Sidebar -->
<div id="application-sidebar"
    class="sm:mt-20 lg:mt-28 rounded-t-lg hs-overlay [--auto-close:sm] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[240px] lg:w-[260px] hidden fixed inset-y-0 z-[60] bg-white border border-neutral-100 sm:block sm:translate-x-0 lg:end-auto sm:bottom-0 dark:bg-neutral-800 dark:border-neutral-700">

    <div class="flex items-center justify-center h-12 px-2 rounded-t-lg bg-neutral-100">
        <div class="flex-grow border-t border-gray-400"></div>
        <p class="uppercase font-semibold mx-4 text-sm text-gray-800">Menu Utama</p>
        <div class="flex-grow border-t border-gray-400"></div>
    </div>
    <nav class="hs-accordion-group p-4 w-full flex flex-col
        overflow-x-hidden overflow-y-auto
        max-h-[calc(100vh-161px)] [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:rounded-full
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:rounded-full
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        dark:[&::-webkit-scrollbar-track]:bg-neutral-700
        dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500"
        data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li class="hs-accordion" id="projects-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-white dark:hover:text-neutral-300 dark:hs-accordion-active:text-white duration-300">
                    <i class="bx bx-user text-xl"></i>
                    Akun Saya
                    <svg class="hs-accordion-active:block ms-auto hidden size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>
                    <svg class="hs-accordion-active:hidden ms-auto block size-5" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="projects-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="/pengguna/pengaturan">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="/pengguna/alamat">
                                Alamat
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                                href="/pengguna/keamanan">
                                Keamanan
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="flex items-center gap-x-3 py-1 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                    href="/pengguna/pesanan">
                    <i class="bx bx-notepad text-xl"></i>
                    Pesanan Saya
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3 py-1 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                    href="/favorit">
                    <i class="bx bx-heart text-xl"></i>
                    Favorit
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3 py-1 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                    href="/pengguna/notifikasi">
                    <i class="bx bx-bell text-xl"></i>
                    Notifikasi
                </a>
            </li>
            <li class="my-4">
                <div class="flex items-center justify-center lg:justify-start mt-4 mb-1 lg:ps-2">
                    <div class="flex-grow border-t border-gray-400 lg:hidden"></div>
                    <p class="uppercase font-semibold mx-4 lg:mx-0 text-xs text-gray-400">Member</p>
                    <div class="flex-grow border-t border-gray-400 lg:hidden"></div>
                </div>
                <a href="#" class="flex items-center gap-x-3 py-2 px-2.5 font-semibold text-sm text-primary rounded-lg bg-blue-50 dark:text-neutral-400 dark:hover:text-white duration-300">
                    <img src="{{ asset('assets/icons/member-card.png') }}" alt="" class="h-7">
                    Member
                </a>
            </li>
            <li>
                <div class="flex items-center justify-center lg:justify-start mt-4 mb-1 lg:ps-2">
                    <div class="flex-grow border-t border-gray-400 lg:hidden"></div>
                    <p class="uppercase font-semibold mx-4 lg:mx-0 text-xs text-gray-400">Bantuan</p>
                    <div class="flex-grow border-t border-gray-400 lg:hidden"></div>
                </div>
                <button type="button" class="flex items-center gap-x-3 py-1 px-2.5 w-full text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300" data-hs-overlay="#hs-hubungi-kami">
                    <i class="bx bx-phone-call text-xl"></i>
                    Hubungi Kami
                </button>
            </li>
            <li>
                <a class="flex items-center gap-x-3 py-1 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                    href="#">
                    <i class="bx bx-package text-xl"></i>
                    Cara Order
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3 py-1 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-white duration-300"
                    href="#">
                    <i class="bx bx-message-rounded text-xl"></i>
                    FAQ
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->
