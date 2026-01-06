<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pesanan';

    // Nama Primary Key
    protected $primaryKey = 'pesanan_id';

    // Kolom yang boleh diisi manual
    protected $fillable = [
        'nomor_pesanan',
        'warga_id',
        'total',
        'status',
        'alamat_kirim',
        'rt',
        'rw',
        'metode_bayar',
        'bukti_bayar'
    ];

    /**
     * Relasi: Satu Pesanan dimiliki oleh satu Warga.
     */
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'warga_id');
    }

    /**
     * Relasi: Satu Pesanan memiliki banyak Rincian/Detail Barang.
     */
    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'pesanan_id', 'pesanan_id');
    }
}
