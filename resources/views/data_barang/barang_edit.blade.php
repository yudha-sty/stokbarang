@extends('layouts.masterapp')

@section('content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Barang</h1>
    </div>

    <form method="POST" action="/barang/update/{{ $barang->id_barang }}" class="needs-validation" novalidate>

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="mb-3">
          <label for="validationCustom01" class="form-label">Id Barang</label>
          <input type="text" class="form-control" name="id_barang" id="validationCustom01" value="{{ $barang->id_barang }}" readonly>
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
          <input type="text" class="form-control" name="nama_barang" id="validationCustom02" value="{{ $barang->nama_barang }}" required>
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
          <input type="text" class="form-control" name="kategori" id="validationCustom02" value="{{ $barang->kategori }}" required>
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
          <input type="text" class="form-control" name="harga" id="validationCustom02" value="{{ $barang->harga }}" required>
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
          <input type="text" class="form-control" name="stok" id="validationCustom02" value="{{ $barang->stok }}" required>
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
          <input type="text" class="form-control" name="gambar" id="validationCustom02" value="{{ $barang->gambar }}" required>
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
      </form

</div>
<!-- /.container-fluid -->

@endsection