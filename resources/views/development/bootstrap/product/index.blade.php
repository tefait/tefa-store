<x-bs-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>
                    <div class="card-group m-auto">
                        @foreach ($produks as $produk)
                            <div class="card m-2">
                                <img class="card-img-top" src="{{ url('storage/' . $produk->image) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $produk->nama }}</p>
                                    <form action="{{ route('product.show', $produk) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Show detail</button>
                                    </form>
                                    @if (Auth::check() && Auth::user()->is_admin)
                                        <form action="{{ route('delete_product', $produk) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btndanger mt-2">Delete product</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-bs-layout>
