<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UlasanProduk extends Model
{
    protected $table = 'ulasan_produk';
    protected $primaryKey = 'ulasan_id';
    protected $fillable = ['produk_id', 'warga_id', 'rating', 'komentar'];

    public function produk()
    {
        // Parameter ke-2: foreign key di tabel ulasan_produk
        // Parameter ke-3: primary key di tabel produk
        return $this->belongsTo(Produk::class, 'produk_id', 'produk_id');
    }

    public function warga() {
        return $this->belongsTo(Warga::class, 'warga_id', 'warga_id');
    }
}
