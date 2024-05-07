<x-app-layout>
    <header class="h-screen bg-gradient-to-b from-blue-300 to-gray-100 dark:from-gray-600 dark:to-gray-900">
        <div class="container mx-auto sm:px-4 py-16 text-center">
            <h1 class="text-gray-900 dark:text-white  font-bold text-2xl sm:text-5xl mb-4">Welcome to
                <span>{{ config('app.name') }}</span></h1>
            <p class="text-gray-900 dark:text-white font-medium text-xl mb-8">Find the best selection of quality computer
                parts at affordable prices.</p>
            <form>
                <x-text-input type="text" name="query" id="search" placeholder="Search for computer parts"
                    class="w-[24rem] sm:w-full max-w-md mx-auto" :value="request('query')" />
            </form>
        </div>
    </header>

    <div class="-mt-96 pb-10">
        <x-card>
            @if ($produks->total() > 0)
                <div class="grid gap-2 grid-cols-2 content-center sm:gap-4 md:grid-cols-4">
                    @foreach ($produks as $produk)
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 duration-200 transition-all ring-offset-2 dark:border-gray-700 hover:ring-2 hover:ring-blue-600">
                            <a href="{{ route('product.show', $produk) }}">
                                <img class="rounded-t-lg" src="{{ Storage::url($produk->image) }}"
                                    alt="{{ $produk->nama }}" />
                                <div class="p-5 grid content-between h-fit">
                                    <a href="{{ route('product.show', $produk) }}">
                                        <h5
                                            class="mb-2 text-sm sm:text-base tracking-tight text-gray-900 dark:text-white">
                                            {{ $produk->nama }}</h5>
                                    </a>
                                    <span class="text-lg text-black dark:text-gray-400 font-extrabold"><x-idr
                                            :value="$produk->harga" /></span>
                                    {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $produk->deskripsi }}</p> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="text-center text-gray-600 my-10">
                        <span class="text-2xl">😞</span>
                        <h1 class="text-2xl">Product Not Found</h1>
                    </div>

            @endif
    </div>
    <div class="mt-2">
        {{ $produks->links() }}
    </div>
    </x-card>

    </div>


</x-app-layout>
