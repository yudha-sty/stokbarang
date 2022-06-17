<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory; 
    protected $table = "barang_keluar_barang_masuk";
    protected $primaryKey = "id_barang";
    protected $fillable = [
        'nama_barang',
        'kategori',
        'pendapatan',
        'stok_akhir',
    ];

    public function barang_keluar_barang_masuk(){
        return $this->hasMany('App\BarangKeluar');
        return $this->hasMany('App\BarangMasuk');
    }
}
