<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Di ProductController.php
public function index(Request $request)
{
    // Jika Anda ingin melakukan filtering produk berdasarkan kategori:
    $query = Product::query();
    if ($request->has('category')) {
        // Misalnya, asumsikan kolom kategori di tabel produk bernama 'category_id'
        $query->where('id_kategori', $request->get('category'));
    }
    $products = $query->get();

    // Ambil semua kategori dari tabel kategori
    $categories = Category::all();

    return view('product.index', compact('products', 'categories'));
}

}
