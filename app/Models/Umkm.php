<?php

namespace App\Models; // <--- Harus tepat seperti ini

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Umkm extends Model
{
    use HasFactory;

    // Nama tabel sesuai dengan struktur SQL
    protected $table = 'umkm';

    // Primary Key
    protected $primaryKey = 'umkm_id';

    protected $fillable = [
        'nama_usaha',
        'pemilik_warga_id',
        'alamat',
        'rt',
        'rw',
        'kategori',
        'kontak',
        'deskripsi',
        'logo_foto_usaha'
    ];
    public function produk()
    {
        return $this->hasMany(Produk::class, 'umkm_id', 'umkm_id');
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'umkm_id', 'umkm_id');
    }
}
