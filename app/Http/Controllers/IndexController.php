<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;

class IndexController extends Controller
{
    public function index(Request $request){

        $barang = DB::table('barang_keluar_barang_masuk')
        ->join('barang_masuk', 'barang_masuk.id', '=', 'barang_keluar_barang_masuk.id_barang_masuk')
        ->join('barang_keluar', 'barang_keluar.id', '=', 'barang_keluar_barang_masuk.id_barang_keluar')
        ->select('barang_masuk.id','barang_masuk.nama_barang_masuk', 'barang_masuk.kategori', 'barang_masuk.harga_beli','barang_masuk.stok_masuk',
                'barang_keluar_barang_masuk.pendapatan', 'barang_keluar_barang_masuk.stok_akhir',
                'barang_keluar.harga_jual', 'barang_keluar.stok_keluar')
        ->get();
        return view('index', compact('barang'));
/*             $barang = Barang::all();
            $barang_masuk = BarangMasuk::all();
            $barang_keluar = BarangKeluar::all();
            return view('index', compact('barang', 'barang_masuk', 'barang_keluar')); */
    }

/*         if ($request->ajax()) {
            $data = Barang::join('barang_masuk', 'barang_masuk.id', '=', 'barang_keluar_barang_masuk.id_barang_masuk')
                ->join('barang_keluar', 'barang_keluar.id', '=', 'barang_keluar_barang_masuk.id_barang_keluar')
                ->select('barang_keluar_barang_masuk.*', 'barang_masuk.id_barang_masuk as idbarangMasuk', 'barang_keluar_barang_masuk.pendapatan', 'barang_keluar_barang_masuk.stok_akhir', 
                'barang_masuk.nama_barang_masuk', 'barang_masuk.kategori', 
                'barang_masuk.harga_beli', 'barang_masuk.stok_masuk','barang_keluar.harga_jual', 
                'barang_keluar.stok_keluar');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('index', compact('barang'));
    } */
}
