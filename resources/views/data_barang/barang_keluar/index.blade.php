@extends('layouts.masterapp')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang Keluar</h1>
        <a href="/barang/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Barang</a>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/barang/store" class="needs-validation" novalidate>

                {{ csrf_field() }}

                <div class="mb-3">
                  <label for="validationCustom01" class="form-label">Id Barang</label>
                  <input type="text" class="form-control" name="id_barang" id="validationCustom01" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                        @if ($errors->has('id_barang'))
                            <div class="text-danger">
                                {{ $errors->first('id_barang')}}
                            </div>
                        @endif
                </div>
        
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                        @if ($errors->has('nama_barang'))
                            <div class="text-danger">
                                {{ $errors->first('nama_barang')}}
                            </div>
                        @endif
                    </div>
        
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Kategori</label>
                  <input type="text" class="form-control" name="kategori" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                        @if ($errors->has('kategori'))
                            <div class="text-danger">
                                {{ $errors->first('kategori')}}
                            </div>
                        @endif
                    </div>
        
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                        @if ($errors->has('harga'))
                            <div class="text-danger">
                                {{ $errors->first('harga')}}
                            </div>
                        @endif
                    </div>
        
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Stok</label>
                  <input type="text" class="form-control" name="stok" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                      
                            @if ($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif
                        </div>
        
                <div class="mb-3">
                  <label for="validationCustom02" class="form-label">Gambar</label>
                  <input type="text" class="form-control" name="gambar" id="validationCustom02" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                         
                             @if ($errors->has('gambar'))
                                  <div class="text-danger">
                                        {{ $errors->first('gambar')}}
                                  </div>
                                @endif
                            </div>
        
                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Simpan">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <tr>
                            <th>Id Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga Jual</th>
                            <th>Stok Keluar</th>
                            <th>Action</th>
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

                            <td>
                                <a href="/barang_keluar/edit/{{ $bk->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/barang_keluar/delete/{{ $bk->id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection