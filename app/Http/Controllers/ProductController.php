<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk secara lengkap
    public function index()
    {
        $products = Product::all(); // atau gunakan pagination sesuai kebutuhan
        return view('product.index', compact('products'));
    }
    
    // Menampilkan halaman home dengan 4 produk terpilih
    public function productPage()
    {
        $products = Product::limit(4)->get();
        return view('index', compact('products')); // Perhatikan: mengembalikan view 'index' bukan 'product.index'
    }
    
    // Menampilkan detail produk
    public function show(Product $product)
    {
        // Ambil produk lain dengan kategori yang sama, kecuali produk saat ini
        $relatedProducts = Product::where('id_kategori', $product->id_kategori)
                                    ->where('id', '!=', $product->id)
                                    ->get();

        return view('product.show', compact('product', 'relatedProducts'));
    }
}
