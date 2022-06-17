@extends('layouts.masterapp')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Overview</h1>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <tr>
                            <th>Id Barang</th>
                            <th>Pendapatan</th>
                            <th>Stok Akhir</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga Beli</th>
                            <th>Stok Masuk</th>
                            <th>Harga Jual</th>
                            <th>Stok Keluar</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($barang as $item)
                      <tr>
                          <td>{{$item->id_barang}}</td>
                          <td>{{$item->pendapatan}}</td>
                          <td>{{$item->stok_akhir}}</td>
                      @endforeach

                      @foreach ($barang_masuk as $bm)
                      <td>{{$bm->nama_barang_masuk}}</td>
                      <td>{{$bm->kategori}}</td>
                      <td>{{$bm->harga_beli}}</td>
                      <td>{{$bm->stok_masuk}}</td>
                      @endforeach

                      @foreach ($barang_keluar as $bk)
                          <td>{{$bk->harga_jual}}</td>
                          <td>{{$bk->stok_keluar}}</td>
                      @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4" style="width: 50%; float:left; clear:both;">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Barang Masuk</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataMasuk" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Barang</th>
                          <th>Kategori</th>
                          <th>Harga Beli</th>
                          <th>Stok Masuk</th>
                      </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($barang_masuk as $bm)

                    <td>{{$bm->id}}</td>
                    <td>{{$bm->nama_barang_masuk}}</td>
                    <td>{{$bm->kategori}}</td>
                    <td>{{$bm->harga_beli}}</td>
                    <td>{{$bm->stok_masuk}}</td>
                    @endforeach
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

  <div class="card shadow mb-4" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang Keluar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataKeluar" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <tr>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga Jual</th>
                        <th>Stok Keluar</th>
                    </tr>
                </thead>
                <tbody>
                  
                  @foreach ($barang_keluar as $bk)

                  <td>{{$bk->id}}</td>
                  <td>{{$bk->nama_barang_keluar}}</td>
                  <td>{{$bk->kategori}}</td>
                  <td>{{$bk->harga_jual}}</td>
                  <td>{{$bk->stok_keluar}}</td>
                  @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection