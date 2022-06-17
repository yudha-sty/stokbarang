<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = "barang_keluar";

    protected $fillalbe = [
        'harga_jual',
        'stok_keluar'
    ];

    public function barang_masuk(){
        return $this->belongsToMany('App\Barang');
    }
}
