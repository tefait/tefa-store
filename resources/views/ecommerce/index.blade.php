@extends('layouts.ecommerce')

@section('title')
    <title>{{ cache('settings')['site-name']['value'] }}</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
    <section class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('assets/carousel/carousel1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/carousel/carousel2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/carousel/carousel3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Hot Deals Area =================-->
    <section class="hot_deals_area section_gap">
        <div class="container-fluid">
            {{-- <div class="row">
                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}"
                            alt="">
                        <div class="content">
                            <h2>Hot Deals of this Month</h2>
                            <p>shop now</p>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hot_deal_box">
                        <img class="img-fluid" src="{{ asset('ecommerce/img/product/hot_deals/deal1.jpg') }}"
                            alt="">
                        <div class="content">
                            <h2>Hot Deals of this Month</h2>
                            <p>shop now</p>
                        </div>
                        <a class="hot_deal_link" href="#"></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--================End Hot Deals Area =================-->

    <!--================Feature Product Area =================-->
    <section class="feature_product_area section_gap">
        <div class="main_box">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_title">
                        <h2>Produk Terbaru</h2>
                        <p>Tampil trendi dengan kumpulan produk kekinian kami.</p>
                    </div>
                </div>
                <div class="row">

                    <!-- PERHATIAKAN BAGIAN INI, LOOPING DATA PRODUK -->
                    @forelse($products as $row)
                        <div class="col col1">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <img class="img-fluid" src="{{ Storage::url($row->image) }}" alt="{{ $row->name }}">
                                    <div class="p_icon">
                                        <a href="{{ url('/product/' . $row->slug) }}">
                                            <i class="lnr lnr-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- KETIKA PRODUK INI DIKLIK MAKA AKAN DIARAHKAN KE URL DIBAWAH -->
                                <!-- HANYA SAJA URL TERSEBUT BELUM DISEDIAKAN PADA ARTIKEL KALI INI -->
                                <a href="{{ url('/product/' . $row->slug) }}">
                                    <!-- TAMPILKAN NAMA PRODUK -->
                                    <h4>{{ $row->name }}</h4>
                                </a>
                                <!-- TAMPILKAN HARGA PRODUK -->
                                <h5>Rp {{ number_format($row->price) }}</h5>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>

                <!-- GENERATE PAGINATION UNTUK MEMBUAT NAVIGASI DATA SELANJUTNYA JIKA ADA -->
                <div class="row">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Product Area =================-->
@endsection
