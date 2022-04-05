<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $table = 'type';

    protected $fillable = [
        'merk',
        'jenis',
    ];

    // belongsTo transaksi
    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class, 'paket_id');
    // }
}
