<x-app-layout>
    <section class="py-6">

        <div class="justify-center items-center w-full flex md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-2 w-full max-w-7xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white p-4 dark:bg-gray-800 rounded-lg shadow sm:p-5">
                    <!-- Modal header -->
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:mb-4 md:w-[600px]">
                            <img src="@src($produk->foto)"
                                class="mb-4 w-full h-full rounded-lg object-cover" alt="{{ $produk->nama }}"
                                loading="eager">
                        </div>
                        <div class="md:w-3/4">
                            <h3 id="name_modal" class="mb-6 text-2xl text-black dark:text-white font-semibold">
                                {{ $produk->nama }}</h3>
                            <dl>
                                <dt class="dark:text-gray-100 mt-2 font-semibold leading-none text-black">Price</dt>
                                <dd class="mb-4 font-light text-base text-neutral-60 sm:mb-5 dark:text-gray-100"><span
                                        id="price_modal"><x-idr :value="$produk->harga" /></span></dd>
                            </dl>
                            <dl>
                                <dt class="dark:text-gray-100 mt-2 font-semibold leading-none text-black">Description
                                </dt>
                                <dd id="desc_modal" class="mb-4 font-light text-neutral-60 sm:mb-5 dark:text-gray-100">
                                    {{ $produk->deskripsi }}</dd>
                            </dl>
                            <dl>
                                <dt class="dark:text-gray-100 mt-2 font-semibold leading-none text-black">Stock</dt>
                                <p id="category_detail"
                                    class="mb-4 font-light text-base text-neutral-60 sm:mb-5 dark:text-gray-100">
                                    {{ $produk->stock }}</p>
                            </dl>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        @if (Auth::check() && Auth::user()->is_admin)
                            <form onsubmit="confirm('Apakah anda yakin ingin menghapus produk ini?')"
                                action="{{ route('product.destroy', $produk) }}" method="POST"
                                class="flex items-center justify-center gap-2">
                                @csrf
                                <x-primary-button>
                                    <a href="{{ route('product.edit', $produk) }}">
                                        Edit Product
                                    </a>
                                </x-primary-button>
                                <x-danger-button>
                                    Delete Product
                                </x-danger-button>
                            </form>
                        @else
                            <form action="{{ route('add.to.cart', $produk) }}" method="POST"
                                class="flex items-center justify-center gap-2">
                                @csrf
                                <input type="text" name="amount"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-100 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Amount" min="1" value="1" max="{{ $produk->stock }}"
                                    required />
                                <button
                                    class="text-white w-full border-2 inline-flex items-center bg-gray-800 hover:text-black hover:bg-gray-200 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-0 py-2.5 text-center justify-center">
                                    Add to cart
                                </button>
                            </form>
                        @endif
                        @guest
                            <a href="{{ route('login') }}"
                                class="text-white inline-flex items-center bg-gray-800 hover:text-black hover:bg-gray-200 duration-[400ms] focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <i class="dark:text-gray-100"></i>
                                Add to cart
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-0 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <section class="flex flex-row gap-2">
                    <section class="rounded-sm w-1/2">
                        <img src="@src($produk->image)">
                    </section>

                    <section>
                        <h1 class="text-3xl dark:text-gray-100">{{ $produk->nama }}</h1>
                        <p class="dark:text-gray-100">{{ $produk->deskripsi }}</p>
                        <p class="dark:text-gray-100"><x-idr :value="$produk->harga" /></p>
                        <p class="dark:text-gray-100 mb-5">{{ $produk->stock }} left</p>
                        @auth
                            <form action="{{ route('add.to.cart', $produk) }}" method="post" class="flex gap-2">
                                @csrf
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                @endif
                                <x-text-input type="number" name="amount" />
                                <x-primary-button type="submit">Add to cart</x-primary-button>
                            </form>
                        @endauth
                        @guest
                            <x-input-label>Login first to Add to Cart</x-input-label>
                        @endguest
                    </section>

                </section>
            </div>
        </div> --}}

    </section>

</x-app-layout>
