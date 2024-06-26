@extends('layouts.ecommerce')

@section('title')
    <title>Checkout - {{ cache('settings')['site-name']['value'] }}</title>
@endsection

@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Daftar</h2>
                <div class="page_link">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="#">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout_area section_gap">
    @foreach ($errors->all() as $error)
        {{ $error }}<br/>
    @endforeach

    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Form Registrasi</h3>
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form class="row contact_form" action="{{ route('register') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group p_star">
                            <label for="customer_name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Budi bebas" required value="{{ old('customer_name') }}">
                            @error('customer_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="customer_phone">No Telp</label>
                            <input type="text" class="form-control" id="customer_phone" name="customer_phone" required placeholder="081234567890" value="{{ old('customer_phone') }}">
                            @error('customer_phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@domain.com" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required placeholder="********">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="customer_address">Alamat lengkap</label>
                            <textarea class="form-control" id="customer_address" name="customer_address" required placeholder="Jl. XYZ, 123 RT 001 RW 023">{{ old('customer_address') }}</textarea>
                            @error('customer_address')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="province_id">Propinsi</label>
                            <select class="form-control" name="province_id" id="province_id" required>
                                <option value="">Pilih Propinsi</option>
                                @foreach ($provinces as $row)
                                    <option value="{{ $row->id }}" {{ $row->id == old('province_id') ? 'selected' : '' }}>{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('province_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="regency_id">Kabupaten / Kota</label>
                            <select class="form-control" name="regency_id" id="regency_id" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                            @error('regency_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="district_id">Kecamatan</label>
                            <select class="form-control" name="district_id" id="district_id" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            @error('district_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="village_id">Kelurahan</label>
                            <select class="form-control" name="village_id" id="village_id" required>
                                <option value="">Pilih Kelurahan/Desa</option>
                            </select>
                            @error('village_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="mx-3 main_btn">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        loadCity($('#province_id').val(), 'bySelect').then(() => {
            loadDistrict($('#regency_id').val(), 'bySelect');
        })
    })

    $('#province_id').on('change', function() {
        loadCity($(this).val(), '');
    })

    $('#regency_id').on('change', function() {
        loadDistrict($(this).val(), '');
    })

    $('#district_id').on('change', function() {
        loadVillage($(this).val(), '');
    })

    function loadCity(province_id, type) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: { province_id: province_id },
                success: function(html) {
                    $('#regency_id').empty().append('<option value="">Pilih Kabupaten/Kota</option>');
                    $.each(html.data, function(key, item) {
                        let city_selected = {{ old('regency_id', 'null') }};
                        let selected = type == 'bySelect' && city_selected == item.id ? 'selected' : '';
                        $('#regency_id').append(`<option value="${item.id}" ${selected}>${item.name}</option>`);
                    });
                    resolve();
                }
            });
        });
    }

    function loadDistrict(regency_id, type) {
        $.ajax({
            url: "{{ url('/api/district') }}",
            type: "GET",
            data: { regency_id: regency_id },
            success: function(html) {
                $('#district_id').empty().append('<option value="">Pilih Kecamatan</option>');
                $.each(html.data, function(key, item) {
                    let district_selected = {{ old('district_id', 'null') }};
                    let selected = type == 'bySelect' && district_selected == item.id ? 'selected' : '';
                    $('#district_id').append(`<option value="${item.id}" ${selected}>${item.name}</option>`);
                });
            }
        });
    }

    function loadVillage(district_id, type) {
        console.log(district_id);
        $.ajax({
            url: "{{ url('/api/village') }}",
            type: "GET",
            data: { district_id: district_id },
            success: function(html) {
                $('#village_id').empty().append('<option value="">Pilih Kelurahan/Desa</option>');
                $.each(html.data, function(key, item) {
                    let village_selected = {{ old('village_id', 'null') }};
                    let selected = type == 'bySelect' && village_selected == item.id ? 'selected' : '';
                    $('#village_id').append(`<option value="${item.id}" ${selected}>${item.name}</option>`);
                });
            }
        });
    }
</script>
@endsection
