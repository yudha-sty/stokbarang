<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;

class BarangKeluarController extends Controller
{
    public function index(Request $request){
        $barang_keluar = BarangKeluar::all();
        return view('data_barang/barang_keluar/index', compact('barang_keluar'));
    }

    public function edit($id)
    {
        $barang_keluar = BarangKeluar::find($id);
        return view('data_barang/barang_keluar/edit', ['barang_keluar' => $barang_keluar]);
    }

    public function update($id_barang, Request $request)
    {
        $this->validate($request,[
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required'
        ]);
        $barang = Barang::find($id_barang);
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori = $request->kategori;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->gambar = $request->gambar;
        $barang->save();
        return redirect('data_barang');
    }
}
