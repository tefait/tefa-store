@extends('layouts.app')

@section('container')
    @include('partials.sidebar_pengguna')

    <form class="grid grid-cols-12 sm:ms-[270px] lg:ms-72 my-4 mb-8" method="POST" enctype="multipart/form-data"
        action="{{ route('customer.update_profil') }}">

        <div class="flex flex-col gap-4 col-span-4 p-4 h-[390px] w-[95%] bg-white shadow-lg rounded-xl">
            <div class="flex justify-center items-center">
                <div class="h-52 w-52">
                    <img src="{{ Storage::url($customer->image) }}" alt="" class="h-full w-full rounded-full object-cover">
                </div>
            </div>
            <div class="max-w-sm">
                <div>
                    <label class="flex cursor-pointer">
                        <span
                            class="flex items-center justify-center w-full py-1 px-auto font-medium text-sm text-primary border-[1.5px] border-primary bg-transparent hover:text-white hover:bg-primary rounded-full duration-300">
                            <i class="bx bx-upload text-xl me-2"></i>Pilih Foto
                        </span>
                        <input type="file" name="photo_file"
                            class="hidden w-full text-sm text-gray-500
                        file:me-4 file:py-2 file:px-4
                        file:rounded-lg file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-600 file:text-white
                        hover:file:bg-blue-700
                        file:disabled:opacity-50 file:disabled:pointer-events-none
                        dark:text-neutral-500
                        dark:file:bg-blue-500
                        dark:hover:file:bg-blue-400
                        ">
                    </label>
                </div>
            </div>
            <p class="text-xs text-gray-800">
                Besar file: maksimum 2MB<br>
                Ekstensi file: .JPG .JPEG .PNG
            </p>
        </div>

        <!-- Card Section -->
        <div class="col-span-8 w-[100%] mx-auto">
            <!-- Card -->
            <div class="bg-white rounded-xl shadow-lg h-[390px] p-4 sm:p-7 dark:bg-neutral-800">
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                        Profil
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Kelola profil Anda untuk mengontrol dan mengamankan akun.
                    </p>
                </div>

                <div>
                    @csrf
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-12 gap-4">

                        <div class="sm:col-span-3">
                            <label for="af-account-full-name"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Nama
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="relative">
                                <input type="text" id="hs-icon-name" name="name"
                                    class="py-2 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out @error('name') border-red-500 focus:border-red-500 @enderror"
                                    placeholder="Masukkan nama" value="{{ $customer->name }}">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                    <i class="bx bx-user text-xl text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->


                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="af-account-phone"
                                    class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Nomor HP
                                </label>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="relative">
                                <input type="text" id="hs-icon-nomor" name="phone_number"
                                    class="py-2 px-4 ps-11 block w-full border border-gray-200 focus:border focus:border-primary shadow-sm rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 transition duration-300 ease-in-out"
                                    placeholder="Masukkan nomor HP" value="{{ $customer->phone_number }}">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                    <i class="bx bx-phone text-xl text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="af-account-gender-checkbox"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Jenis Kelamin
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <label for="af-account-gender-checkbox-lakilaki"
                                    class="flex py-2 px-3 w-full cursor-pointer border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="1"
                                        class="shrink-0 cursor-pointer mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="af-account-gender-checkbox-lakilaki"
                                        {{ auth('customer')->user()->gender ? 'checked' : '' }}>
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Laki-laki</span>
                                </label>

                                <label for="af-account-gender-checkbox-perempuan"
                                    class="flex py-2 px-3 w-full cursor-pointer border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="0"
                                        class="shrink-0 cursor-pointer mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="af-account-gender-checkbox-perempuan"
                                        {{ auth('customer')->user()->gender ? '' : 'checked' }}>
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Perempuan</span>
                                </label>
                            </div>
                        </div>
                        <!-- End Col -->

                    </div>
                    <!-- End Grid -->

                    <div class="mt-5 flex justify-end gap-x-2">
                        <button type="reset"
                            class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center bg-transparent rounded-3xl border duration-300 hover:bg-neutral-10 border-secondary text-secondary">
                            Batal
                        </button>
                        <button type="submit"
                            class="inline-flex gap-x-3 justify-center items-center py-3 h-9 w-24 text-sm font-medium text-center text-white bg-gradient-to-r rounded-3xl duration-300 from-secondary to-primary hover:from-primary hover:to-secondary">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->
    </form>

    @include('partials.bottom_nav')
@endsection
