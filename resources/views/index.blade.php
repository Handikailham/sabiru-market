@extends('layouts.app')

@section('title', 'Selamat Datang di Toko Kami')

@section('content')
    {{-- Section Jumbotron / Hero --}}
    <div class="jumbotron text-center mt-4">
        <h1>Selamat Datang di Toko Kami</h1>
        <p>Temukan produk-produk berkualitas dan penawaran menarik di sini!</p>
    </div>

    {{-- Section Awal --}}
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Market Terbesar</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Hic dicta perspiciatis iusto eaque architecto, eum eligendi cupiditate exercitationem nesciunt optio autem deleniti magni nemo?
                </p>
                <a href="{{ route('product.index') }}" class="btn btn-primary btn-lg">Jelajah Menu</a>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="{{ asset('images/sabiruicon.png') }}" alt="Gambar" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    {{-- Section Keunggulan Kami --}}
    <div class="container py-5">
        <h2 class="text-center mb-4">Keunggulan Kami</h2>
        <div class="row">
            {{-- Keunggulan 1 --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Keunggulan 1</h5>
                        <p class="card-text">
                            Deskripsi singkat keunggulan pertama. 
                            Misalnya: "Bahan baku terpilih dan berkualitas."
                        </p>
                    </div>
                </div>
            </div>
            {{-- Keunggulan 2 --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Keunggulan 2</h5>
                        <p class="card-text">
                            Deskripsi singkat keunggulan kedua. 
                            Misalnya: "Harga terjangkau dengan porsi yang mengenyangkan."
                        </p>
                    </div>
                </div>
            </div>
            {{-- Keunggulan 3 --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Keunggulan 3</h5>
                        <p class="card-text">
                            Deskripsi singkat keunggulan ketiga. 
                            Misalnya: "Pelayanan cepat dan ramah."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
