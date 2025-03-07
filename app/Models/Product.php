<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'nama_produk',
        'id_kategori',
        'gambar',
        'harga',
        'deskripsi',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'id_kategori');
}

}
