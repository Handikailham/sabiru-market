@extends('layouts.app')

@section('title', $product->nama_produk)

@section('content')
<div class="row">
   <div class="col-md-6">
      @if($product->gambar)
         <img src="{{ asset('uploads/' . $product->gambar) }}" class="img-fluid" alt="{{ $product->nama_produk }}">
      @endif
   </div>
   <div class="col-md-6">
      <h1>{{ $product->nama_produk }}</h1>
      <p>{{ $product->deskripsi }}</p>
      <p>
         <strong>Kategori: </strong> {{ $product->category->nama_kategori }}
      </p>
      <!-- Tombol Pesan via WhatsApp -->
      <a href="https://wa.me/6288239715035?text={{ urlencode('saya ingin memesan ' . $product->nama_produk) }}" 
         class="btn btn-success mt-3" target="_blank">
         Pesan Sekarang
      </a>
   </div>
</div>

{{-- Section Produk Serupa --}}
@if(isset($relatedProducts) && $relatedProducts->count() > 0)
<div class="mt-5">
   <h3>Produk Serupa</h3>
   <div class="row">
       @foreach($relatedProducts as $related)
           <div class="col-md-4">
               <a href="{{ route('product.show', $related) }}" class="card mb-4 text-decoration-none text-dark">
                   @if($related->gambar)
                       <img src="{{ asset('uploads/' . $related->gambar) }}" class="card-img-top" alt="{{ $related->nama_produk }}">
                   @endif
                   <div class="card-body">
                       <h5 class="card-title">{{ $related->nama_produk }}</h5>
                       <p class="card-text">{{ \Illuminate\Support\Str::limit($related->deskripsi, 50) }}</p>
                   </div>
               </a>
           </div>
       @endforeach
   </div>
</div>
@endif

@endsection
