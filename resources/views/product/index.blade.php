@extends('layouts.app')

@section('title', 'Menu Produk Kami')

@section('content')
<div class="container mx-auto py-8">

    <!-- Bagian Kategori (Filtering berdasarkan database) -->
    <div class="flex justify-center gap-4 mb-8">
        @foreach($categories as $category)
            <a 
                href="{{ route('product.index', ['category' => $category->id]) }}" 
                class="flex flex-col items-center p-4 bg-white rounded-lg shadow hover:bg-lime-500 hover:text-blue-500 transition duration-300"
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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
        @foreach($products as $product)
            <!-- Seluruh card dibungkus dengan <a> agar seluruh area dapat diklik -->
            <a href="{{ route('product.show', $product) }}" 
               class="block bg-white rounded-2xl shadow-lg overflow-hidden group hover:scale-105 transition-transform duration-300 max-w-xs flex flex-col"
            >
                <!-- Gambar Produk -->
                <div class="w-full h-48 relative overflow-hidden">
                    @if($product->gambar)
                        <img 
                            src="{{ asset('uploads/' . $product->gambar) }}" 
                            alt="{{ $product->nama_produk }}" 
                            class="object-cover w-full h-full"
                        >
                    @else
                        <div class="flex items-center justify-center w-full h-full bg-gray-300 text-gray-700 font-semibold">
                            No Image Available
                        </div>
                    @endif
                </div>

                <!-- Deskripsi Produk -->
                <div class="p-4 text-gray-800 flex flex-col flex-grow">
                    <h2 class="text-xl font-bold mb-2 group-hover:text-lime-500 transition-colors duration-300">
                        {{ $product->nama_produk }}
                    </h2>

                    <!-- Rating Bintang (contoh statis) -->
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.115c.969 0 1.371 1.24.588 1.81l-3.324 2.415a1 1 0 00-.364 1.118l1.286 3.947c.3.921-.755 1.688-1.54 1.118L10 14.347l-3.323 2.415c-.785.57-1.84-.197-1.54-1.118l1.285-3.947a1 1 0 00-.363-1.118L3.735 9.374c-.783-.57-.38-1.81.588-1.81h4.115a1 1 0 00.95-.69l1.286-3.947z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.115c.969 0 1.371 1.24.588 1.81l-3.324 2.415a1 1 0 00-.364 1.118l1.286 3.947c.3.921-.755 1.688-1.54 1.118L10 14.347l-3.323 2.415c-.785.57-1.84-.197-1.54-1.118l1.285-3.947a1 1 0 00-.363-1.118L3.735 9.374c-.783-.57-.38-1.81.588-1.81h4.115a1 1 0 00.95-.69l1.286-3.947z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.115c.969 0 1.371 1.24.588 1.81l-3.324 2.415a1 1 0 00-.364 1.118l1.286 3.947c.3.921-.755 1.688-1.54 1.118L10 14.347l-3.323 2.415c-.785.57-1.84-.197-1.54-1.118l1.285-3.947a1 1 0 00-.363-1.118L3.735 9.374c-.783-.57-.38-1.81.588-1.81h4.115a1 1 0 00.95-.69l1.286-3.947z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.115c.969 0 1.371 1.24.588 1.81l-3.324 2.415a1 1 0 00-.364 1.118l1.286 3.947c.3.921-.755 1.688-1.54 1.118L10 14.347l-3.323 2.415c-.785.57-1.84-.197-1.54-1.118l1.285-3.947a1 1 0 00-.363-1.118L3.735 9.374c-.783-.57-.38-1.81.588-1.81h4.115a1 1 0 00.95-.69l1.286-3.947z" />
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.947a1 1 0 00.95.69h4.115c.969 0 1.371 1.24.588 1.81l-3.324 2.415a1 1 0 00-.364 1.118l1.286 3.947c.3.921-.755 1.688-1.54 1.118L10 14.347l-3.323 2.415c-.785.57-1.84-.197-1.54-1.118l1.285-3.947a1 1 0 00-.363-1.118L3.735 9.374c-.783-.57-.38-1.81.588-1.81h4.115a1 1 0 00.95-.69l1.286-3.947z" />
                        </svg>
                    </div>

                    <!-- Deskripsi Singkat -->
                    <p class="text-gray-600 flex-grow">
                        {{ \Illuminate\Support\Str::limit($product->deskripsi, 70) }}
                    </p>

                    <!-- Harga -->
                    @isset($product->harga)
                        <div class="text-lime-600 font-bold text-lg mt-2">
                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                        </div>
                    @endisset
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
