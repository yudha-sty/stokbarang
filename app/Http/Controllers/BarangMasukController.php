<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;

class BarangMasukController extends Controller
{
    public function index(Request $request){
        $barang_masuk = BarangMasuk::all();
        return view('data_barang/barang_masuk/index', compact('barang_masuk'));
    }
    
    public function edit($id)
    {
        $barang_masuk = BarangMasuk::find($id);
        return view('data_barang/barang_masuk/edit', ['barang_masuk' => $barang_masuk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
