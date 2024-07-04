<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @if (config('env') === 'production')
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @endif

        @include('layouts.css')
        <title>Daftar | TEFA PPLG</title>

        @vite('resources/js/app.js')
    </head>

    <body>
        <div
            class="circlePosition w-[200px] h-[300px] bg-[#e14def] rounded-[100%] absolute z-0 top-20 start-60 blur-[150px]">
        </div>
        <div
            class="circlePosition w-[200px] h-[300px] bg-primary rounded-[100%] absolute z-0 bottom-0 end-60 blur-[150px]">
        </div>
        <div class="flex justify-center items-center mt-8">
            <a href="/" class="" aria-label="Logo"><img src="{{ cache('settings')['site-logo']['value'] }}"
                    class="sm:h-12" alt="Logo Tefa PPLG">
            </a>
        </div>

        <!-- Stepper -->
        <div data-hs-stepper="">
            <!-- Stepper Nav -->
            <ul class="relative gap-x-2 hidden">
                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                    data-hs-stepper-nav-item='{
                "index": 1
            }'>
                </li>

                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                    data-hs-stepper-nav-item='{
                "index": 2
            }'>
                </li>

                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                    data-hs-stepper-nav-item='{
                "index": 3
                }'>
                </li>
                <!-- End Item -->
            </ul>
            <!-- End Stepper Nav -->

            <!-- Stepper Content -->
            <div class="mt-5 sm:mt-8">
                <!-- First Content -->
                <div data-hs-stepper-content-item='{
            "index": 1
        }'>
                    <section class="flex justify-center items-center w-[600px] my-4 mx-auto">
                        <div
                            class="w-full z-10 bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="p-4 sm:p-7">
                                <div class="text-center">
                                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Daftar</h1>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                        Sudah punya akun?
                                        <a class="text-primary dark:text-blue-500" href="{{ route('customer.login') }}">
                                            Masuk
                                        </a>
                                    </p>
                                </div>

                                <div class="mt-5">
                                    <!-- Form -->
                                    <form method="POST" id="form1">
                                        @csrf
                                        <div class="grid gap-y-4">
                                            <!-- Form Group -->
                                            <div>
                                                @error('name')
                                                    <x-alert-danger>
                                                        {{ $message }}
                                                    </x-alert-danger>
                                                @enderror
                                                <label for="hs-icon-name"
                                                    class="block text-sm font-medium mb-2 dark:text-white">Nama
                                                    Lengkap</label>
                                                <div class="relative">
                                                    <input type="text" id="hs-icon-name" name="customer_name"
                                                        class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                                        placeholder="Masukkan nama lengkap">
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                        <i class="bx bx-user text-xl text-gray-400"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <div class="grid grid-cols-2 gap-2">
                                                <!-- Form Group -->
                                                <div>
                                                    @error('email')
                                                        <x-alert-danger>
                                                            {{ $message }}
                                                        </x-alert-danger>
                                                    @enderror
                                                    <label for="hs-icon-email"
                                                        class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                                                    <div class="relative">
                                                        <input type="text" id="hs-icon-email" name="email"
                                                            class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                                            placeholder="Masukkan email">
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                            <i class="bx bx-envelope text-xl text-gray-400"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div>
                                                    @error('nomor')
                                                        <x-alert-danger>
                                                            {{ $message }}
                                                        </x-alert-danger>
                                                    @enderror
                                                    <label for="hs-icon-nomor"
                                                        class="block text-sm font-medium mb-2 dark:text-white">Nomor
                                                        HP</label>
                                                    <div class="relative">
                                                        <input type="text" id="hs-icon-nomor" name="customer_phone"
                                                            class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                                            placeholder="Masukkan nomor HP">
                                                        <div
                                                            class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                            <i class="bx bx-phone-call text-xl text-gray-400"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <!-- Form Group -->
                                            <div>
                                                @error('password')
                                                    <x-alert-danger>
                                                        {{ $message }}
                                                    </x-alert-danger>
                                                @enderror
                                                <label for="password"
                                                    class="block text-sm font-medium mb-2 dark:text-white">Kata
                                                    Sandi</label>
                                                <div class="relative">
                                                    <input name="password" type="password" id="hs-toggle-password"
                                                        class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                                        placeholder="Masukkan kata sandi">
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                        <i class="bx bxs-key text-xl text-gray-400"></i>
                                                    </div>
                                                    <button type="button"
                                                        data-hs-toggle-password='{
                                        "target": "#hs-toggle-password"
                                        }'
                                                        class="absolute top-0 end-0 p-3.5 rounded-e-md">
                                                        <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-600"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path class="hs-password-active:hidden"
                                                                d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                                            </path>
                                                            <path class="hs-password-active:hidden"
                                                                d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                            </path>
                                                            <path class="hs-password-active:hidden"
                                                                d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                            </path>
                                                            <line class="hs-password-active:hidden" x1="2"
                                                                x2="22" y1="2" y2="22"></line>
                                                            <path class="hidden hs-password-active:block"
                                                                d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                            <circle class="hidden hs-password-active:block"
                                                                cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div>
                                                @error('konfirmasi-password')
                                                    <x-alert-danger>
                                                        {{ $message }}
                                                    </x-alert-danger>
                                                @enderror
                                                <label for="konfirmasi-password"
                                                    class="block text-sm font-medium mb-2 dark:text-white">Konfirmasi
                                                    Kata Sandi</label>
                                                <div class="relative">
                                                    <input name="konfirmasi-password" type="confirm_password"
                                                        id="hs-toggle-konfirmasi-password"
                                                        class="py-3 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                                        placeholder="Konfirmasi kata sandi">
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                                        <i class="bx bxs-key text-xl text-gray-400"></i>
                                                    </div>
                                                    <button type="button"
                                                        data-hs-toggle-password='{
                                        "target": "#hs-toggle-password"
                                        }'
                                                        class="absolute top-0 end-0 p-3.5 rounded-e-md">
                                                        <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-600"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path class="hs-password-active:hidden"
                                                                d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                                            </path>
                                                            <path class="hs-password-active:hidden"
                                                                d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                            </path>
                                                            <path class="hs-password-active:hidden"
                                                                d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                            </path>
                                                            <line class="hs-password-active:hidden" x1="2"
                                                                x2="22" y1="2" y2="22"></line>
                                                            <path class="hidden hs-password-active:block"
                                                                d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                            <circle class="hidden hs-password-active:block"
                                                                cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <div class="flex justify-end">
                                                <button type="button" data-hs-stepper-next-btn=""
                                                    class="w-36 py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium bg-gradient-to-r rounded-full from-secondary to-primary hover:from-primary hover:to-secondary text-white disabled:opacity-50 disabled:pointer-events-none">
                                                    Selanjutnya
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- End First Content -->

                <!-- Second Content -->
                <div data-hs-stepper-content-item='{
            "index": 2
        }' style="display: none;">
                    <section class="flex justify-center items-center w-[600px] my-4 mx-auto">
                        <div
                            class="w-full z-10 bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                            <div class="p-4 sm:p-7">
                                <div class="text-center">
                                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Tambahkan Alamat
                                    </h1>
                                </div>

                                <div class="mt-5">
                                    <!-- Form -->
                                    <form method="POST" id="form2">
                                        @csrf
                                        <div class="grid gap-y-4">
                                            <!-- Form Group -->
                                            <div>
                                                <label for="hs-icon-provinsi"
                                                    class="block text-sm font-medium mb-2 dark:text-white">
                                                    Provinsi
                                                </label>
                                                <div class="relative">
                                                    <select name="province_id" id="hs-icon-provinsi" name="provinsi"
                                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <option selected="">Pilih provinsi</option>
                                                        @foreach ($provinces as $p)
                                                            <option value="{{ $p->id }}">{{ $p->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div>
                                                <label for="hs-icon-kabkot"
                                                    class="block text-sm font-medium mb-2 dark:text-white">
                                                    Kabupaten / Kota
                                                </label>
                                                <div class="relative">
                                                    <select name="regency_id" id="hs-icon-kabkot" name="kabkot"
                                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <option selected="">Pilih kabupaten / kota</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div>
                                                <label for="hs-icon-kecamatan"
                                                    class="block text-sm font-medium mb-2 dark:text-white">
                                                    Kecamatan
                                                </label>
                                                <div class="relative">
                                                    <select name="district_id" id="hs-icon-kecamatan"
                                                        name="kecamatan"
                                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <option selected="">Pilih kecamatan</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div>
                                                <label for="hs-icon-deskel"
                                                    class="block text-sm font-medium mb-2 dark:text-white">
                                                    Desa / Kelurahan
                                                </label>
                                                <div class="relative">
                                                    <select name="village_id" id="hs-icon-deskel" name="deskel"
                                                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <option selected="">Pilih desa / kelurahan</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- Form Group -->
                                            <div>
                                                <label for="hs-icon-alamat"
                                                    class="block mb-2 text-sm text-gray-800 font-medium dark:text-white">
                                                    Alamat Lengkap
                                                </label>
                                                <div>
                                                    <textarea id="hs-icon-alamat" name="customer_address" rows="4"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                                                </div>
                                            </div>
                                            <!-- End Form Group -->
                                            <div class="flex justify-between">
                                                <div class="">
                                                    <button type="button"
                                                        class="relative w-36 py-2 px-4 rounded-full font-semibold text-sm text-primary bg-white isolation-auto z-10 border-[1.5px] border-primary before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full hover:text-white before:bg-gradient-to-r before:from-primary before:to-secondary before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden duration-700 before:hover:duration-700"
                                                        data-hs-stepper-back-btn="">
                                                        Kembali
                                                    </button>
                                                </div>
                                                <div class="">
                                                    <button type="button" data-hs-overlay="#hs-modal-pemeriksaan"
                                                        class="w-36 py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium bg-gradient-to-r rounded-full from-secondary to-primary hover:from-primary hover:to-secondary text-white disabled:opacity-50 disabled:pointer-events-none">
                                                        Selanjutnya
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- End Second Content -->

                <!-- Third Content -->
                <div data-hs-stepper-content-item='{
            "index": 3
        }' style="display: none;">
                    <div
                        class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <h3 class="text-gray-500 dark:text-neutral-500">
                            Third content
                        </h3>
                    </div>
                </div>
                <!-- End Third Content -->

                <!-- Final Content -->
                <div data-hs-stepper-content-item='{
            "isFinal": true
        }' style="display: none;">
                    <div
                        class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <h3 class="text-gray-500 dark:text-neutral-500">
                            Final content
                        </h3>
                    </div>
                </div>
                <!-- End Final Content -->

            </div>
            <!-- End Stepper Content -->
        </div>
        <!-- End Stepper -->

        @include('pengguna.auth.modal_pemeriksaan')
        <script>
            document.querySelector("[name='province_id']").addEventListener('change', function() {
                loadCity(this.value, '');
            });

            document.querySelector("[name='regency_id']").addEventListener('change', function() {
                loadDistrict(this.value, '');
            });

            document.querySelector("[name='district_id']").addEventListener('change', function() {
                loadVillage(this.value, '');
            });

            function loadOptions(url, id, type, selectedId, displayName = "") {
                return fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        const selectElement = document.querySelector(`[name='${id}']`);
                        selectElement.innerHTML = `<option value="">Pilih ${displayName}</option>`;
                        data.data.forEach(item => {
                            const selected = type === 'bySelect' && selectedId == item.id ? 'selected' : '';
                            selectElement.innerHTML +=
                                `<option value="${item.id}" ${selected}>${item.name}</option>`;
                        });
                    });
            }

            function loadCity(province_id, type) {
                const city_selected = {{ old('regency_id', 'null') }};
                return loadOptions(`/api/city?province_id=${province_id}`, 'regency_id', type, city_selected, "Kota / Kabupaten");
            }

            function loadDistrict(regency_id, type) {
                const district_selected = {{ old('district_id', 'null') }};
                return loadOptions(`/api/district?regency_id=${regency_id}`, 'district_id', type, district_selected, "Kecamatan");
            }

            function loadVillage(district_id, type) {
                const village_selected = {{ old('village_id', 'null') }};
                return loadOptions(`/api/village?district_id=${district_id}`, 'village_id', type, village_selected, "Desa / Kelurahan");
            }
        </script>
    </body>

</html>
