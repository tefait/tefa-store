@extends('layouts.app')

@section('dashboard')

<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
  <div class="flex justify-between items-center py-2">
    <div class="lg:hidden flex items-center gap-1">
      <h3 class="text-lg font-bold italic text-primary dark:text-blue-300">
        Semangat bekerja
      </h3>
      <img src="/assets/api.gif" alt="" class="h-6">
    </div>

    <!-- Sidebar -->
    <button type="button" class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13"/></svg>
      <span class="sr-only">Sidebar</span>
    </button>
    <!-- End Sidebar -->
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Content -->
<div class="w-full lg:ps-64">
  <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <div class="p-4 md:p-5 flex justify-between gap-x-3">
          <div>
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-400">
              Total Pengguna
            </p>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                102,604
              </h3>
              <span class="flex items-center gap-x-1 text-red-600 dark:text-red-500">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
                <span class="inline-block text-sm">
                  1.7%
                </span>
              </span>
            </div>
          </div>
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-primary text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <div class="p-4 md:p-5 flex justify-between gap-x-3">
          <div>
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-400">
              Total Produk
            </p>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                12
              </h3>
            </div>
          </div>
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-primary text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
            <i class="bx bx-package text-2xl"></i>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <div class="p-4 md:p-5 flex justify-between gap-x-3">
          <div>
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-400">
              Total Pesanan
            </p>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                75,020
              </h3>
              <span class="flex items-center gap-x-1 text-green-600 dark:text-green-500">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                <span class="inline-block text-sm">
                  3.4%
                </span>
              </span>
            </div>
          </div>
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-primary text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
            <i class="bx bx-notepad text-2xl"></i>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <div class="p-4 md:p-5 flex justify-between gap-x-3">
          <div>
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-400">
              Total Penjualan
            </p>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                72,540
              </h3>
              <span class="flex items-center gap-x-1 text-green-600 dark:text-green-500">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                <span class="inline-block text-sm">
                  1.7%
                </span>
              </span>
            </div>
          </div>
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-primary text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
            <i class="bx bx-store text-2xl"></i>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->

    <!-- Card -->
    <div class="bg-white border border-gray-200 p-2 pt-1 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
      <div class="flex justify-between items-center mt-2 px-4">
        <div class="inline-flex items-center">
          <p class="text-lg font-semibold text-gray-800 dark:text-white">
            Penjualan
          </p>
        </div>
        <div>
          <select id="filter" class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm cursor-pointer dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-300 duration-100">
            <option value="pekan">Per pekan</option>
            <option value="bulan">Per bulan</option>
            <option value="tahun">Per tahun</option>
          </select>
        </div>
      </div>

      <hr class="mt-3 border-1 border-gray-200 dark:border-neutral-700">

      <div id="hs-curved-area-charts"></div>
      <div id="chart-info" class="flex items-center justify-center text-sm text-gray-600 dark:text-gray-300"></div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
              <div>
                <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                  Produk terlaris
                </h2>
              </div>

              <div>
                <div class="hidden sm:block">
                  <label for="icon" class="sr-only">Search</label>
                  <div class="relative min-w-32 md:min-w-80">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                      <svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <input type="text" id="icon" name="icon" class="py-2 px-4 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari produk terlaris">
                  </div>
                </div>
              </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
              <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                  <th scope="col" class="px-4 py-3 text-start">
                    <div class="flex items-center justify-center">
                      <span class="text-xs text-center font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        No
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="ps-3 pe-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Produk
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Kategori
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Harga
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Terjual
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Penjualan
                      </span>
                    </div>
                  </th>

                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                <tr>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-3 flex justify-center">
                      <span class="flex-shrink-0 flex justify-center items-center text-sm size-[24px] bg-gradient-to-tr from-yellow-400 to-red-500 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        1
                      </span>
                    </div>
                  </td>
                  <td class="size-px min-w-72 whitespace-nowrap py-2">
                    <div class="flex items-center gap-x-3 ps-3 pe-6 py-0.5">
                        <img class="inline-block size-[40px] rounded-lg" src="/storage/products/kaos_sm.jpg" alt="Image Product">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200 max-w-52 lg:max-w-full truncate">
                            Kaos pendek cotton combed 30s
                          </span>
                        </div>
                    </div>
                  </td>
                  <td class="h-px w-32 whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500 dark:text-neutral-300">
                        Kaos
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-300">
                          Rp50.000
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-1.5 flex items-center">
                      <i class="bx bxs-hot text-2xl text-red-500 translate-x-2 z-10"></i>
                      <span class="py-1 px-4 w-[72px] text-xs font-semibold -translate-x-2 text-center bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                        2160
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-2.5">
                      <span class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                        Rp108.000.000
                      </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-3 flex justify-center">
                      <span class="flex-shrink-0 flex justify-center items-center text-sm size-[24px] bg-gradient-to-tr from-yellow-400 to-red-500 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        2
                      </span>
                    </div>
                  </td>
                  <td class="size-px min-w-72 whitespace-nowrap py-2">
                    <div class="flex items-center gap-x-3 ps-3 pe-6 py-0.5">
                        <img class="inline-block size-[40px] rounded-lg" src="/storage/products/kaos_sm.jpg" alt="Image Product">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200 max-w-52 lg:max-w-full truncate">
                            Kaos pendek cotton combed 30s
                          </span>
                        </div>
                    </div>
                  </td>
                  <td class="h-px w-32 whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500 dark:text-neutral-300">
                        Kaos
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-300">
                          Rp50.000
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-1.5 flex items-center">
                      <i class="bx bxs-hot text-2xl text-red-500 translate-x-2 z-10"></i>
                      <span class="py-1 px-4 w-[72px] text-xs font-semibold -translate-x-2 text-center bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                        2160
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-2.5">
                      <span class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                        Rp108.000.000
                      </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-3 flex justify-center">
                      <span class="flex-shrink-0 flex justify-center items-center text-sm size-[24px] bg-gradient-to-tr from-yellow-400 to-red-500 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        3
                      </span>
                    </div>
                  </td>
                  <td class="size-px min-w-72 whitespace-nowrap py-2">
                    <div class="flex items-center gap-x-3 ps-3 pe-6 py-0.5">
                        <img class="inline-block size-[40px] rounded-lg" src="/storage/products/kaos_sm.jpg" alt="Image Product">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200 max-w-52 lg:max-w-full truncate">
                            Kaos pendek cotton combed 30s
                          </span>
                        </div>
                    </div>
                  </td>
                  <td class="h-px w-32 whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500 dark:text-neutral-300">
                        Kaos
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-300">
                          Rp50.000
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-1.5 flex items-center">
                      <i class="bx bxs-hot text-2xl text-red-500 translate-x-2 z-10"></i>
                      <span class="py-1 px-4 w-[72px] text-xs font-semibold -translate-x-2 text-center bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                        2160
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-2.5">
                      <span class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                        Rp108.000.000
                      </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-3 flex justify-center">
                      <span class="flex-shrink-0 flex justify-center items-center text-sm size-[24px] bg-gradient-to-tr from-yellow-400 to-red-500 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        4
                      </span>
                    </div>
                  </td>
                  <td class="size-px min-w-72 whitespace-nowrap py-2">
                    <div class="flex items-center gap-x-3 ps-3 pe-6 py-0.5">
                        <img class="inline-block size-[40px] rounded-lg" src="/storage/products/kaos_sm.jpg" alt="Image Product">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200 max-w-52 lg:max-w-full truncate">
                            Kaos pendek cotton combed 30s
                          </span>
                        </div>
                    </div>
                  </td>
                  <td class="h-px w-32 whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500 dark:text-neutral-300">
                        Kaos
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-300">
                          Rp50.000
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-1.5 flex items-center">
                      <i class="bx bxs-hot text-2xl text-red-500 translate-x-2 z-10"></i>
                      <span class="py-1 px-4 w-[72px] text-xs font-semibold -translate-x-2 text-center bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                        2160
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-2.5">
                      <span class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                        Rp108.000.000
                      </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-3 flex justify-center">
                      <span class="flex-shrink-0 flex justify-center items-center text-sm size-[24px] bg-gradient-to-tr from-yellow-400 to-red-500 text-white rounded-full dark:bg-blue-900 dark:text-blue-200">
                        5
                      </span>
                    </div>
                  </td>
                  <td class="size-px min-w-72 whitespace-nowrap py-2">
                    <div class="flex items-center gap-x-3 ps-3 pe-6 py-0.5">
                        <img class="inline-block size-[40px] rounded-lg" src="/storage/products/kaos_sm.jpg" alt="Image Product">
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200 max-w-52 lg:max-w-full truncate">
                            Kaos pendek cotton combed 30s
                          </span>
                        </div>
                    </div>
                  </td>
                  <td class="h-px w-32 whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <span class="block text-sm text-gray-500 dark:text-neutral-300">
                        Kaos
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-3">
                      <div class="flex items-center gap-x-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-300">
                          Rp50.000
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="py-1.5 flex items-center">
                      <i class="bx bxs-hot text-2xl text-red-500 translate-x-2 z-10"></i>
                      <span class="py-1 px-4 w-[72px] text-xs font-semibold -translate-x-2 text-center bg-gradient-to-r from-yellow-300 to-red-500 text-white rounded-full">
                        2160
                      </span>
                    </div>
                  </td>
                  <td class="size-px whitespace-nowrap py-2">
                    <div class="px-6 py-2.5">
                      <span class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                        Rp108.000.000
                      </span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table -->

            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
              <div>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                </p>
              </div>

              <div>
                <div class="inline-flex gap-x-2">
                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    Prev
                  </button>

                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Next
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </button>
                </div>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
</div>
<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->

<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

<script>
  window.addEventListener('load', () => {
    const data = {
      pekan: [120, 150, 130, 140, 160, 170, 180], // Contoh data penjualan mingguan
      bulan: [700, 750, 730, 800], // Contoh data penjualan bulanan
      tahun: [6000, 6500, 7000, 7500, 8000, 8500, 9000, 9500, 10000, 10500, 11000, 11500] // Contoh data penjualan tahunan
    };

    const categories = {
      pekan: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
      bulan: ['Pekan 1', 'Pekan 2', 'Pekan 3', 'Pekan 4'],
      tahun: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des']
    };

    const getCurrentDateInfo = () => {
      const now = new Date();
      const options = { month: 'long', year: 'numeric' };
      const currentMonth = new Intl.DateTimeFormat('id-ID', options).format(now);
      const currentYear = now.getFullYear();
      const currentWeek = Math.ceil(now.getDate() / 7);
      return { currentWeek, currentMonth, currentYear };
    };

    const { currentWeek, currentMonth, currentYear } = getCurrentDateInfo();

    const updateChartInfo = (filter) => {
      const chartInfo = document.querySelector('#chart-info');
      let infoText = '';
      switch (filter) {
        case 'pekan':
          infoText = `Pekan ke-${currentWeek}, ${currentMonth}`;
          break;
        case 'bulan':
          infoText = `${currentMonth}`;
          break;
        case 'tahun':
          infoText = `Tahun ${currentYear}`;
          break;
      }
      chartInfo.textContent = infoText;
    };

    const buildChart = (filter) => ({
      chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false
        },
        zoom: {
          enabled: false
        }
      },
      series: [
        {
          name: 'Terjual',
          data: data[filter]
        }
      ],
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2
      },
      grid: {
        strokeDashArray: 2
      },
      fill: {
        type: 'gradient',
        gradient: {
          type: 'vertical',
          shadeIntensity: 1,
          opacityFrom: 0.1,
          opacityTo: 0.8
        }
      },
      xaxis: {
        type: 'category',
        tickPlacement: 'on',
        categories: categories[filter],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        crosshairs: {
          stroke: {
            dashArray: 0
          },
          dropShadow: {
            show: false
          }
        },
        tooltip: {
          enabled: false
        },
        labels: {
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: 400
          }
        }
      },
      yaxis: {
        labels: {
          align: 'left',
          minWidth: 0,
          maxWidth: 140,
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: 400
          },
          formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
        }
      },
      tooltip: {
        theme: 'dark',
        x: {
          format: 'MMMM yyyy'
        },
        y: {
          formatter: (value) => `${value} pcs`
        }
      },
      responsive: [{
        breakpoint: 568,
        options: {
          chart: {
            height: 300
          },
          labels: {
            style: {
              colors: '#9ca3af',
              fontSize: '11px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            offsetX: -2
          },
          yaxis: {
            labels: {
              align: 'left',
              minWidth: 0,
              maxWidth: 140,
              style: {
                colors: '#9ca3af',
                fontSize: '11px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
              formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
            }
          },
        },
      }]
    });

    const renderChart = (filter) => {
      const options = buildChart(filter);
      const chartContainer = document.querySelector('#hs-curved-area-charts');
      chartContainer.innerHTML = ''; // Clear the chart container
      const chart = new ApexCharts(chartContainer, options);
      chart.render();
      updateChartInfo(filter);
    };

    document.querySelector('#filter').addEventListener('change', (event) => {
      const filter = event.target.value;
      renderChart(filter);
    });

    // Initial render
    renderChart('pekan');
  });
</script>

@endsection
