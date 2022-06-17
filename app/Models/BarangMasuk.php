<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = "barang_masuk";

    protected $fillable = [
        'harga_beli',
        'stok_masuk'
    ];

    public function barang_keluar(){
        return $this->belongsToMany('App\Barang');
    }
}
