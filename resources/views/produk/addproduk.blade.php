@extends('layout/v_template')
@section('nama','Add produk')
@section('content')

<form action="/produk/insert" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> TAMBAH PRODUK </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama Produk</label>
                <input name="nama" class="form-control" value="{{ old('nama')}}">
                <div class="text-denger">
                    @error('nama')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Deskripsi</label>
                <input name="deskripsi" class="form-control" value="{{ old('deskripsi')}}">
                <div class="text-denger">
                    @error('deskripsi')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Harga</label>
                <input name="harga" class="form-control" value="{{ old('harga')}}">
                <div class="text-denger">
                    @error('harga')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Kualitas</label>
                <input name="kualitas" class="form-control" value="{{ old('kualitas')}}">
                <div class="text-denger">
                    @error('kualitas')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>


        <div >
            <div class="form-grup">
                <label for="">Gambar produk</label>
                <div>
                    <input type="file" name="gambar" id="gambar" accept=".png, .jpg, .jpeg" value="{{ old('gambar')}}">
                </div>
                <div class="text-denger">
                    @error('gambar')
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

