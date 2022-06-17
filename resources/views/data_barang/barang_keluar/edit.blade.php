@extends('layouts.masterapp')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Barang Keluar</h1>
    </div>

    <form method="POST" action="/barang_keluar/update/{{ $barang_keluar->id }}" class="needs-validation" novalidate>

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="mb-3">
          <label for="validationCustom01" class="form-label">Id Barang</label>
          <input type="text" class="form-control" name="id" id="validationCustom01" value="{{ $barang_keluar->id }}" readonly>
          <div class="valid-feedback">
            Looks good!
          </div>

                @if ($errors->has('id'))
                    <div class="text-danger">
                        {{ $errors->first('id')}}
                    </div>
                @endif
        </div>

        <div class="mb-3">
          <label for="validationCustom02" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang_keluar" id="validationCustom02" value="{{ $barang_keluar->nama_barang_keluar }}" required>
          <div class="valid-feedback">
            Looks good!
          </div>

                @if ($errors->has('nama_barang_keluar'))
                    <div class="text-danger">
                        {{ $errors->first('nama_barang_keluar')}}
                    </div>
                @endif
            </div>

        <div class="mb-3">
          <label for="validationCustom02" class="form-label">Kategori</label>
          <input type="text" class="form-control" name="kategori" id="validationCustom02" value="{{ $barang_keluar->kategori }}" required>
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
          <label for="validationCustom02" class="form-label">Harga Jual</label>
          <input type="text" class="form-control" name="harga_jual" id="validationCustom02" value="{{ $barang_keluar->harga_jual }}" required>
          <div class="valid-feedback">
            Looks good!
          </div>

                @if ($errors->has('harga_jual'))
                    <div class="text-danger">
                        {{ $errors->first('harga_jual')}}
                    </div>
                @endif
            </div>

        <div class="mb-3">
          <label for="validationCustom02" class="form-label">Stok Keluar</label>
          <input type="text" class="form-control" name="stok_keluar" id="validationCustom02" value="{{ $barang_keluar->stok_keluar }}" required>
          <div class="valid-feedback">
            Looks good!
          </div>
              
                    @if ($errors->has('stok_keluar'))
                        <div class="text-danger">
                            {{ $errors->first('stok_keluar')}}
                        </div>
                    @endif
                </div>


        <div class="form-group">
          <input type="submit" class="btn btn-success" value="Simpan">
        </div>
      </form

</div>
<!-- /.container-fluid -->

@endsection