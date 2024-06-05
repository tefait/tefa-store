@extends('layouts.ecommerce')

@section('title')
    <title>Jual Produk - {{ cache('settings')['site-name']['value'] }}</title>
@endsection

@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <h2>{{ ucwords(Route::current()->parameter('slug') ?? 'List produk') }}</h2>
                        <a href="{{ route('front.index') }}">Home</a>
                        <a href="{{ route('front.product') }}">Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <title>Sort Products</title>
                            <select id="sortSelect" class="sorting">
                                <option value="default" @if (request()->sort == 'default') selected @endif>Default</option>
                                <option value="name-asc" @if (request()->sort == 'name-asc') selected @endif>A > Z</option>
                                <option value="name-desc" @if (request()->sort == 'name-desc') selected @endif>Z > A</option>
                                <option value="price-lowest" @if (request()->sort == 'price-lowest') selected @endif>Harga >
                                    Terendah</option>
                                <option value="price-highest" @if (request()->sort == 'price-highest') selected @endif>Harga >
                                    Tertinggi</option>
                            </select>


                            <script>
                                function handleSortChange() {
                                    let e = document.getElementById("sortSelect"),
                                        t = e.value,
                                        n = new URL(window.location.href);
                                    n.searchParams.set("sort", t), window.location.href = n.toString()
                                }
                                document.addEventListener("DOMContentLoaded", function() {
                                    let e = document.getElementById("sortSelect");
                                    e.addEventListener("change", handleSortChange)
                                });
                            </script>
                        </div>
                        <div class="pl-4 right_page" style="width: 100%">
                            <form class="input-group mb-3" method="GET">
                                <input type="text" class="form-control" placeholder="Search product"
                                    aria-label="Search product" name="q" value="{{ request()->q }}">
                                <div class="input-group-append">
                                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            {{ $products->links() }}
                        </div>
                    </div>
                    <div class="latest_product_inner row">

                        <!-- PROSES LOOPING DATA PRODUK, SAMA DENGAN CODE YANG ADDA DIHALAMAN HOME -->
                        @forelse ($products as $row)
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="f_p_item">
                                    <div class="f_p_img">
                                        <img class="img-fluid" src="{{ Storage::url($row->image) }}"
                                            alt="{{ $row->name }}">
                                        <div class="p_icon">
                                            <a href="{{ url('/product/' . $row->slug) }}">
                                                <i class="lnr lnr-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="{{ url('/product/' . $row->slug) }}">
                                        <h4>{{ $row->name }}</h4>
                                    </a>
                                    <h5>Rp {{ number_format($row->price) }}</h5>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <h3 class="text-center">Tidak ada produk</h3>
                            </div>
                        @endforelse
                        <!-- PROSES LOOPING DATA PRODUK, SAMA DENGAN CODE YANG ADDA DIHALAMAN HOME -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <h3>Kategori Produk</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @foreach ($categories as $category)
                                        <li>

                                            <!-- MODIFIKASI BAGIAN INI -->
                                            <strong><a
                                                    href="{{ url('/category/' . $category->slug) }}">{{ $category->name }}</a></strong>
                                            <!-- MODIFIKASI BAGIAN INI -->

                                            @foreach ($category->child as $child)
                                                <!-- MODIFIKASI BAGIAN INI -->
                                                <ul class="list" style="display: block">
                                                    <!-- MODIFIKASI BAGIAN INI -->

                                                    <li>
                                                        <a
                                                            href="{{ url('/category/' . $child->slug) }}">{{ $child->name }}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- GENERATE PAGINATION PRODUK -->
            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection
