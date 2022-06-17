<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barang = Barang::all();
        $barang_masuk = BarangMasuk::all();
        $barang_keluar = BarangKeluar::all();
        return view('data_barang/index', compact('barang', 'barang_masuk', 'barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_barang/barang_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required'
        ]);

        Barang::create([
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);
        return redirect('data_barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        $barang = Barang::find($id_barang);
        return view('data_barang/barang_edit', ['barang' => $barang]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        $barang = Barang::find($id_barang);
        $barang->delete();
        return redirect()->back();
    }

    public function data_barang()
    {
        $barang = Barang::all();
        return view('data_barang/index', ['barang' => $barang]);
    }
}
