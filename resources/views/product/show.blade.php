@extends('layouts.app')

@section('title', $product->nama_produk)

@section('content')
<div class="bg-gradient-to-b from-yellow-50 to-white min-h-screen" style="background: url('{{ asset('images/oishi-background.png') }}') no-repeat center center fixed; background-size: cover;">
    <div class="max-w-7xl mx-auto px-4 py-12 relative">
        <!-- Tombol Kembali -->
        <a href="{{ route('product.index') }}" class="absolute top-4 right-4">
            <button 
                type="button"
                class="bg-white text-black text-xl font-semibold px-6 py-2 rounded-full shadow-md hover:shadow-lg transition"
            >
                Go Back
            </button>
        </a>

        <div class="flex flex-col md:flex-row gap-8 mt-12">
            <!-- Gambar Produk -->
            <div class="md:w-1/2 flex justify-center items-center">
                @if($product->gambar)
                    <img 
                        src="{{ asset('uploads/' . $product->gambar) }}" 
                        alt="{{ $product->nama_produk }}" 
                        class="w-full h-auto rounded-lg hover:scale-105 transition-transform duration-300"
                    >
                @else
                    <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                        <span class="text-gray-600">No Image Available</span>
                    </div>
                @endif
            </div>

            <!-- Detail Produk -->
            <div class="md:w-1/2 flex flex-col justify-center">
                <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
                    {{ $product->nama_produk }}
                </h1>

                <!-- Deskripsi -->
                <p class="text-gray-700 mb-4 leading-relaxed">
                    {{ $product->deskripsi }}
                </p>

                <!-- Harga -->
                <p class="text-gray-600 mb-6">
                    <strong class="text-2xl text-gray-800">Rp{{ number_format($product->harga, 0, ',', '.') }}</strong>
                </p>
                <!-- Tombol Pemesanan -->
                <a href="https://wa.me/6288239715035?text={{ urlencode('saya ingin memesan ' . $product->nama_produk) }}" 
                    class="bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 px-8 rounded-full shadow-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 focus:outline-none">
                    Pesan Sekarang
                </a>
            </div>
        </div>

        <!-- Testimoni Pelanggan -->
        <div class="mt-16">
            <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                Ulasan
            </h3>
            @php
                // Membuat instance Faker dengan locale Indonesia
                $faker = Faker\Factory::create('id_ID');
                $randomName1 = $faker->name;
                $randomName2 = $faker->name;
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                    <!-- Bintang Rating di Paling Atas -->
                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.948a1 1 0 00.95.69h4.152c.969 0 1.371 1.24.588 1.81l-3.357 2.438a1 1 0 00-.364 1.118l1.287 3.949c.3.921-.755 1.688-1.54 1.118l-3.357-2.438a1 1 0 00-1.175 0l-3.357 2.438c-.784.57-1.838-.197-1.539-1.118l1.286-3.949a1 1 0 00-.364-1.118L2.07 9.375c-.783-.57-.38-1.81.588-1.81h4.152a1 1 0 00.95-.69l1.286-3.948z"/>
                            </svg>
                        @endfor
                    </div>
                    <!-- Konten Ulasan -->
                    <p class="text-gray-700 italic mt-4">
                        "Produk ini luar biasa! Rasanya enak banget dan pengirimannya cepat! Bakal beli lagi!"
                    </p>
                    <!-- Nama Pengulas -->
                    <h4 class="mt-4 font-bold text-lg text-gray-800">- {{ $randomName1 }}</h4>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-transform duration-300 hover:scale-105">
                    <!-- Bintang Rating di Paling Atas -->
                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.948a1 1 0 00.95.69h4.152c.969 0 1.371 1.24.588 1.81l-3.357 2.438a1 1 0 00-.364 1.118l1.287 3.949c.3.921-.755 1.688-1.54 1.118l-3.357-2.438a1 1 0 00-1.175 0l-3.357 2.438c-.784.57-1.838-.197-1.539-1.118l1.286-3.949a1 1 0 00-.364-1.118L2.07 9.375c-.783-.57-.38-1.81.588-1.81h4.152a1 1 0 00.95-.69l1.286-3.948z"/>
                            </svg>
                        @endfor
                    </div>
                    <!-- Konten Ulasan -->
                    <p class="text-gray-700 italic mt-4">
                        "Sumpah ini worth it banget! Harganya oke, kualitasnya mantap. Recommended!"
                    </p>
                    <!-- Nama Pengulas -->
                    <h4 class="mt-4 font-bold text-lg text-gray-800">- {{ $randomName2 }}</h4>
                </div>
            </div>
        </div>
        
        

        <!-- Produk Serupa -->
        @if(isset($relatedProducts) && $relatedProducts->count() > 0)
        <div class="mt-16">
            <h3 class="text-3xl font-bold text-gray-800 mb-8">
                Produk Serupa
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $related)
                    <a href="{{ route('product.show', $related->id) }}" class="block">
                        <div class="bg-white rounded-xl p-4 relative text-gray-800 shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                            <div class="flex justify-center mt-2">
                                @if($related->gambar)
                                    <img 
                                        src="{{ asset('uploads/' . $related->gambar) }}" 
                                        alt="{{ $related->nama_produk }}" 
                                        class="w-40 h-40 object-contain transition-transform duration-300 transform hover:scale-110"
                                    />
                                @else
                                    <div class="w-40 h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <span class="text-gray-600">No Image</span>
                                    </div>
                                @endif
                            </div>
                            <h3 class="text-lg font-bold mt-4 tracking-wide text-center">
                                {{ $related->nama_produk }}
                            </h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection