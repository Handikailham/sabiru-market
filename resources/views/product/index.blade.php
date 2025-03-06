@extends('layouts.app')

@section('title', 'Menu Produk Kami')

@section('content')
<h1 class="mb-4">Menu Produk</h1>
<div class="row">
    @foreach($products as $product)
        <div class="col-md-4">
            <!-- Bungkus card dengan link menuju detail produk -->
            <a href="{{ route('product.show', $product) }}" class="card mb-4 text-decoration-none text-dark">
                @if($product->gambar)
                    <img src="{{ asset('uploads/' . $product->gambar) }}" class="card-img-top" alt="{{ $product->nama_produk }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama_produk }}</h5>
                    <p class="card-text">
                        {{ \Illuminate\Support\Str::limit($product->deskripsi, 100) }}
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
