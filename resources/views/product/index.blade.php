@extends('layouts.app')

@section('title', 'Menu Produk Kami')

@section('content')
<div class="container mx-auto py-8" style="background: url('{{ asset('images/oishi-background.png') }}') no-repeat center center fixed; background-size: cover;">

    <!-- Bagian Kategori -->
    <div class="flex justify-center gap-4 mb-8">
        @foreach($categories as $category)
            <a 
                href="{{ route('product.index', ['category' => $category->id]) }}" 
                class="flex flex-col items-center p-4 bg-white shadow 
                       hover:bg-lime-500 hover:text-blue-500 
                       transition-colors duration-300"
            >
                @if(strtolower($category->nama_kategori) == 'makanan')
                    <i class="fas fa-utensils text-3xl mb-2"></i>
                @elseif(strtolower($category->nama_kategori) == 'minuman')
                    <i class="fas fa-coffee text-3xl mb-2"></i>
                @else
                    <i class="fas fa-store text-3xl mb-2"></i>
                @endif
                <span class="font-semibold">{{ $category->nama_kategori }}</span>
            </a>
        @endforeach
    </div>

    <!-- Grid Produk -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 justify-items-center">
        @foreach($products as $product)
            <!-- Card Produk -->
            <a href="{{ route('product.show', $product) }}" 
               class="group block bg-white shadow-lg overflow-hidden w-full
                      hover:bg-lime-500 transition-colors duration-300
                      hover:scale-[1.02] transition-transform"
            >
                <!-- Bagian Gambar -->
                <div class="relative w-full h-48 overflow-hidden">
                    @if($product->gambar)
                        <img 
                            src="{{ asset('uploads/' . $product->gambar) }}" 
                            alt="{{ $product->nama_produk }}" 
                            class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110"
                        >
                    @else
                        <div class="flex items-center justify-center w-full h-full bg-gray-300 text-gray-700 font-semibold">
                            No Image Available
                        </div>
                    @endif
                
                    <!-- Nama Produk selalu terlihat di pojok bawah kiri, dengan z-index tinggi -->
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-60 text-white font-bold text-sm sm:text-base px-2 py-1 z-10">
                        {{ $product->nama_produk }}
                    </div>
                
                    <!-- Overlay Deskripsi: hanya muncul saat hover -->
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-60 text-white text-center p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-sm">
                            {{ \Illuminate\Support\Str::limit($product->deskripsi, 100) }}
                        </p>
                    </div>
                </div>
                
            </a>
        @endforeach
    </div>
</div>
@endsection