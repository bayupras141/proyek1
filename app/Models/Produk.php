<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'warna',
        'harga',
        'stok',
    ];

    // belongsTo transaksi
    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class, 'paket_id');
    // }
    public function tipe()
    {
    	return $this->hasMany(Tipe::class, 'id');
    }
}