@extends('layouts.app')

@section('title', 'Menu Produk Kami')

@section('content')
    <h1 class="mb-8 text-3xl font-semibold text-center text-gray-800">Menu Produk Kami</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="group cursor-pointer overflow-hidden relative text-gray-50 h-auto w-64 rounded-2xl transform transition duration-500 hover:scale-105">
                <!-- Gambar Produk dan Link ke halaman detail -->
                <a href="{{ route('product.show', $product) }}">
                    <div class="w-full h-48 relative overflow-hidden rounded-t-2xl">
                        @if($product->gambar)
                            <img src="{{ asset('uploads/' . $product->gambar) }}" class="object-cover w-full h-full" alt="{{ $product->nama_produk }}">
                        @else
                            <div class="flex items-center justify-center w-full h-full bg-gray-300 text-gray-700 font-semibold">
                                No Image Available
                            </div>
                        @endif
                    </div>
                </a>

                <!-- Deskripsi Produk dan Nama dengan efek hover -->
                <div class="bg-white p-4 flex flex-col gap-1 rounded-b-2xl">
                    <span class="text-lime-400 font-bold text-xs group-hover:text-lime-500 transition duration-300">Product</span>
                    <span class="text-gray-800 font-bold text-2xl group-hover:text-lime-500 transition duration-300">{{ $product->nama_produk }}</span>
                    <p class="text-neutral-800 group-hover:text-lime-500 transition duration-300">{{ \Illuminate\Support\Str::limit($product->deskripsi, 70) }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
