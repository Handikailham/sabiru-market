@extends('layouts.app')

@section('title', $product->nama_produk)

@section('content')
<div class="container mx-auto px-4 py-12 relative">
   <!-- Tombol Kembali -->
   <a href="{{ route('product.index') }}" class="absolute top-4 right-4">
      <button
         class="bg-white text-center w-48 rounded-2xl h-14 relative text-black text-xl font-semibold group"
         type="button"
      >
         <div
            class="bg-green-400 rounded-xl h-12 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[184px] z-10 duration-500"
         >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 1024 1024"
               height="25px"
               width="25px"
            >
               <path
                  d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"
                  fill="#000000"
               ></path>
               <path
                  d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"
                  fill="#000000"
               ></path>
            </svg>
         </div>
         <p class="translate-x-2">Go Back</p>
      </button>
   </a>

   <div class="flex flex-col md:flex-row gap-8">
      <!-- Gambar Produk -->
      <div class="md:w-1/2">
         @if($product->gambar)
            <img src="{{ asset('uploads/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="w-full h-auto rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
         @else
            <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
               <span class="text-gray-600">No Image Available</span>
            </div>
         @endif
      </div>

      <!-- Detail Produk -->
      <div class="md:w-1/2">
         <h1 class="text-4xl font-semibold text-gray-800 mb-6">{{ $product->nama_produk }}</h1>
         <p class="text-gray-700 mb-6">{{ $product->deskripsi }}</p>
         <p class="text-gray-600 mb-6">
            <strong class="text-gray-800">Kategori: </strong> {{ $product->category->nama_kategori }}
         </p>
         
         <div class="flex items-center gap-4">
            <a href="https://wa.me/6288239715035?text={{ urlencode('saya ingin memesan ' . $product->nama_produk) }}" 
               class="inline-block bg-gradient-to-r from-green-400 to-blue-500 text-white px-8 py-3 rounded-lg text-lg hover:from-green-500 hover:to-blue-600 transition duration-300">
               Pesan Sekarang
            </a>
         </div>
      </div>
   </div>

   {{-- Section Produk Serupa --}}
   @if(isset($relatedProducts) && $relatedProducts->count() > 0)
   <div class="mt-12">
      <h3 class="text-3xl font-semibold text-gray-800 mb-6">Produk Serupa</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         @foreach($relatedProducts as $related)
            <a href="{{ route('product.show', $related) }}" class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
               @if($related->gambar)
                  <img src="{{ asset('uploads/' . $related->gambar) }}" alt="{{ $related->nama_produk }}" class="w-full h-40 object-cover rounded-t-lg">
               @else
                  <div class="w-full h-40 bg-gray-200 rounded-t-lg flex items-center justify-center">
                     <span class="text-gray-600">No Image</span>
                  </div>
               @endif
               <div class="p-4">
                  <h5 class="text-xl font-semibold text-gray-800 mb-2">{{ $related->nama_produk }}</h5>
                  <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($related->deskripsi, 50) }}</p>
               </div>
            </a>
         @endforeach
      </div>
   </div>
   @endif
</div>
@endsection
