<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\BarangKeluar;
use App\BarangMasuk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', 'IndexController@index');

/* Route::get('/', function (Request $request) {
    if ($request->ajax()) {
            $data = Barang::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> 
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
})->name('barang.index');  */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Master Data Barang Routes
Route::get('/barang/create', 'BarangController@create');
Route::get('/data_barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@create');
Route::post('/barang/store', 'BarangController@store');
Route::get('/barang/edit/{id_barang}', 'BarangController@edit');
Route::put('/barang/update/{id_barang}', 'BarangController@update');
Route::get('/barang/delete/{id_barang}', 'BarangController@destroy');

//Barang Masuk Routes
Route::get('/barang_masuk/create', 'BarangMasukController@create');
Route::get('/barang_masuk', 'BarangMasukController@index');
Route::get('/barang_masuk/tambah', 'BarangMasukController@create');
Route::post('/barang_masuk/store', 'BarangMasukController@store');
Route::get('/barang_masuk/edit/{id}', 'BarangMasukController@edit');
Route::put('/barang_masuk/update/{id}', 'BarangMasukController@update');
Route::get('/barang_masuk/delete/{id}', 'BarangMasukController@destroy');

//Barang Keluar Routes
Route::get('/barang_keluar/create', 'BarangKeluarController@create');
Route::get('/barang_keluar', 'BarangKeluarController@index');
Route::get('/barang_keluar/tambah', 'BarangKeluarController@create');
Route::post('/barang_keluar/store', 'BarangKeluarController@store');
Route::get('/barang_keluar/edit/{id}', 'BarangKeluarController@edit');
Route::put('/barang_keluar/update/{id}', 'BarangKeluarController@update');
Route::get('/barang_keluar/delete/{id}', 'BarangKeluarController@destroy');
