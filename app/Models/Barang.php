<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table;

    protected $fillable = [
        'id_barang',
        'kategori',
        'nama_barang',
        'harga',
        'stok',
        'supplier',
    ];
}
