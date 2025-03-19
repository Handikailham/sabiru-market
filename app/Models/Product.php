<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

protected static function boot()
    {
        parent::boot();

        // Hapus file saat record dihapus
        static::deleting(function ($product) {
            if ($product->gambar) {
                Storage::disk('public_uploads')->delete($product->gambar);
            }
        });

        // Hapus file lama saat gambar diupdate
        static::updating(function ($product) {
            if ($product->isDirty('gambar')) {
                $oldImage = $product->getOriginal('gambar');
                if ($oldImage) {
                    Storage::disk('public_uploads')->delete($oldImage);
                }
            }
        });
    }

}
