@extends('layout/v_template')
@section('nama','Add alat')
@section('content')

<form action="/alat/insert" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> TAMBAH ALAT </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama Produk</label>
                <input name="nama_alat" class="form-control" value="{{ old('nama_alat')}}">
                <div class="text-denger">
                    @error('nama_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Deskripsi</label>
                <input name="deskripsi_alat" class="form-control" value="{{ old('deskripsi_alat')}}">
                <div class="text-denger">
                    @error('deskripsi_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Harga</label>
                <input name="harga_alat" class="form-control" value="{{ old('harga_alat')}}">
                <div class="text-denger">
                    @error('harga_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Gambar produk</label>
                <div>
                    <input type="file" name="gambar_alat" id="gambar_alat" accept=".png, .jpg, .jpeg" value="{{ old('gambar_alat')}}">
                </div>
                <div class="text-denger">
                    @error('gambar_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form-grup">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>

    </div>
</div>
</form>

@endsection

