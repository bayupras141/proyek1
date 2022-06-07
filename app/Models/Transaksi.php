<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'type';

    protected $fillable = [
        'invoice',
        'total_bayar',
        'diskon',
        'ongkir',
        'status',
        'customer_id',
        'produk_id',
    ];
}
