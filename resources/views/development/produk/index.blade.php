<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kelola Produk') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-2">
        <x-card>
            <form class="flex gap-2">
            <x-text-input type="text" name="query" id="search" placeholder="Cari produk" class="w-full" :value="request('query')"/>
            <x-primary-button>Cari</x-primary-button>
            </form>
        </x-card>
        <x-card>
            <table class="min-w-full bg-white dark:border-gray-300 overflow-x-scroll">
                <thead class="bg-gray-800 text-white dark:bg-gray-600">
                    <tr>
                        <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">No.</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Gambar</td>
                        <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">Nama Produk</th>
                        <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Deskripsi</th>
                        <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Harga</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stok</td>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</td>
                    </tr>
                </thead>
                <tbody class="text-gray-700 dark:bg-gray-800 dark:text-white ">
                    @php
                        $no = 1;
                    @endphp

                    @forelse ($produks as $produk)
                        <tr>
                            <td class="w-1/12 text-left py-3 px-4">{{ $no }}</td>
                            <td class="py-3 px-4"><img src="{{ Storage::url($produk->image) }}"
                                    class="rounded-sm block"></td>

                            @php
                                $no++;
                            @endphp
                            <td class="w-1/6 text-left py-3 px-4">{{ $produk->nama }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $produk->deskripsi }}</td>
                            <td class="text-left py-3 px-4"><x-idr :value="$produk->harga" /></td>
                            <td class="py-3 px-4">{{ $produk->stock }}</td>
                            <td class="py-3 px-4">
                                <form action="{{ route('product.destroy', $produk->id) }}" method="POST" class="flex gap-2">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button type="button">
                                        <a href="{{ route('product.show', $produk->id) }}">Show</a>
                                    </x-primary-button>
                                    <x-primary-button type="button">
                                        <a href="{{ route('product.edit', $produk->id) }}">Edit</a>
                                    </x-primary-button>
                                    <x-danger-button variant="danger" element="button">Delete</x-danger-button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7" align="center" class="p-5">😟 Tidak ada produk untuk di tampilkan</td></tr>
                    @endforelse


                </tbody>
            </table>
            <div class="mt-2">
                {{$produks->links()}}
            </div>
        </x-card>

    </div>

</x-app-layout>
