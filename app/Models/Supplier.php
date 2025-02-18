<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table;

    protected $fillable = [
        'id_suplier',
        'nama_suplier',
        'alamat',
        'kota',
        'no_telepon',
    ];
}
