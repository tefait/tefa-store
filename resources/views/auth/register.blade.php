@extends('layouts.ecommerce')

@section('title')
    <title>Checkout - TEFA Ecommerce</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Daftar</h2>
                    <div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Form Registrasi</h3>
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif


                        <!-- REMOVE DULU VALUE ACTION-NYA JIKA INGIN MELIHATNYA DI BROWSER -->
                        <!-- KARENA ROUTE NAME front.store_checkout BELUM DIBUAT -->
                        <form class="row contact_form" action="{{ route('register') }}" method="post"
                            novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" id="first" name="customer_name" placeholder="Budi bebas" required
                                    value="{{ old('customer_name') }}">

                                <!-- UNTUK MENAMPILKAN JIKA TERDAPAT ERROR VALIDASI -->
                                <p class="text-danger">{{ $errors->first('customer_name') }}</p>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="">No Telp</label>
                                <input type="text" class="form-control" id="number" name="customer_phone" required placeholder="081234567890"
                                    value="{{ old('customer_phone') }}">
                                <p class="text-danger">{{ $errors->first('customer_phone') }}</p>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="name@domain.com"
                                    value="{{ old('email') }}">
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="add1" name="password" required placeholder="********">
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Propinsi</label>
                                <select class="form-control" name="province_id" id="province_id" required>
                                    <option value="">Pilih Propinsi</option>
                                    <!-- LOOPING DATA PROVINCE UNTUK DIPILIH OLEH CUSTOMER -->
                                    @foreach ($provinces as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $row->id === old('province_id') ? 'selected' : '' }}>
                                            {{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <p class="text-danger">{{ $errors->first('province_id') }}</p>
                            </div>

                            <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                            <div class="col-md-12 form-group p_star">
                                <label for="">Kabupaten / Kota</label>
                                <select class="form-control" name="city_id" id="city_id" required>
                                    <option value="">Pilih Kabupaten/Kota</option>
                                </select>
                                <p class="text-danger">{{ $errors->first('city_id') }}</p>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label for="">Kecamatan</label>
                                <select class="form-control" name="district_id" id="district_id" required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                                <p class="text-danger">{{ $errors->first('district_id') }}</p>
                            </div>
                            {{-- <div class="col-md-12 form-group p_star">
                                <label for="">Kurir</label>
                                <input type="hidden" name="weight" id="weight" value="{{ $weight }}">
                                <select class="form-control" name="courier" id="courier" required>
                                    <option value="Silahkan pilih kurir"></option>
                                    <option value="jne">JNE</option>
                                    <option value="jnt">JNT</option>
                                    <option value="tiki">TIKI</option>
                                    <option value="pos">Pos Indonesia</option>
                                </select>
                                <p class="text-danger">{{ $errors->first('courier') }}</p>
                            </div> --}}
                            <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->

                            <button class="mx-3 main_btn">Daftar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            loadCity($('#province_id').val(), 'bySelect').then(() => {
                loadDistrict($('#city_id').val(), 'bySelect');
            })
        })

        $('#province_id').on('change', function() {
            loadCity($(this).val(), '');
        })

        $('#city_id').on('change', function() {
            loadDistrict($(this).val(), '')
        })

        function loadCity(province_id, type) {
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: "{{ url('/api/city') }}",
                    type: "GET",
                    data: {
                        province_id: province_id
                    },
                    success: function(html) {
                        $('#city_id').empty()
                        $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                        $.each(html.data, function(key, item) {

                            // KITA TAMPUNG VALUE CITY_ID SAAT INI
                            let city_selected =
                                {{ old('city_id', 'null') }};
                            //KEMUDIAN DICEK, JIKA CITY_SELECTED SAMA DENGAN ID CITY YANG DOLOOPING MAKA 'SELECTED' AKAN DIAPPEND KE TAG OPTION
                            let selected = type == 'bySelect' && city_selected == item.id ?
                                'selected' : '';
                            //KEMUDIAN KITA MASUKKAN VALUE SELECTED DI ATAS KE DALAM TAG OPTION
                            $('#city_id').append('<option value="' + item.id + '" ' + selected +
                                '>' + item.name + '</option>')
                            resolve()
                        })
                    }
                });
            })
        }

        //CARA KERJANYA SAMA SAJA DENGAN FUNGSI DI ATAS
        function loadDistrict(city_id, type) {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: {
                    city_id: city_id
                },
                success: function(html) {
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        let district_selected =
                            {{ old('district_id', 'null') }};
                        let selected = type == 'bySelect' && district_selected == item.id ? 'selected' :
                            '';
                        $('#district_id').append('<option value="' + item.id + '" ' + selected + '>' +
                            item.name + '</option>')
                    })
                }
            });
        }
        //KETIKA SELECT BOX DENGAN ID province_id DIPILIH
        $('#province_id').on('change', function() {
            //MAKA AKAN MELAKUKAN REQUEST KE URL /API/CITY
            //DAN MENGIRIMKAN DATA PROVINCE_ID
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: {
                    province_id: $(this).val()
                },
                success: function(html) {
                    //SETELAH DATA DITERIMA, SELEBOX DENGAN ID CITY_ID DI KOSONGKAN
                    $('#city_id').empty()
                    //KEMUDIAN APPEND DATA BARU YANG DIDAPATKAN DARI HASIL REQUEST VIA AJAX
                    //UNTUK MENAMPILKAN DATA KABUPATEN / KOTA
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="' + item.id + '">' + item.type +
                            " " +
                            item
                            .name + '</option>');
                    })
                },
            });

        })

        //LOGICNYA SAMA DENGAN CODE DIATAS HANYA BERBEDA OBJEKNYA SAJA
        $('#city_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: {
                    city_id: $(this).val()
                },
                success: function(html) {
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        $('#district_id').append('<option value="' + item.id + '">' + item
                            .name + '</option>')
                    })
                }
            });
        });
    </script>
@endsection
