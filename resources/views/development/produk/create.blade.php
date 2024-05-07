<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Tambah barang') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <x-card>
      <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-6 max-w-xl">
        @csrf
        <div>
          <x-input-label value="Nama Produk" for="name" />
          <x-text-input type="text" name="name" id="name" class="mt-1 block w-full"/>
          <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
          <x-input-label value="Deskripsi Produk" for="description" />
          <x-text-input type="text" name="description" id="description" class="mt-1 block w-full"/>
          <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>
        <div>
          <x-input-label value="Harga Produk" for="price" />
          <x-text-input type="number" name="price" id="price" class="mt-1 block w-full"/>
          <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>
        <div>
          <x-input-label value="Stok Produk" for="stock" />
          <x-text-input type="number" name="stock" id="stock" class="mt-1 block w-full"/>
          <x-input-error class="mt-2" :messages="$errors->get('stock')" />
        </div>
        <div>
          <x-input-label value="Gambar Produk" for="image" />
          <input type="file" name="image" id="image" class="w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 file:border-none file:bg-gray-800 file:h-full file:text-white file:p-2.5" />

          <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>
        <x-primary-button type="submit">Tambah Produk</x-primary-button>
      </form>
    </x-card>
  </div>

</x-app-layout>
