@extends('layout/v_template')
@section('nama','Add produk')
@section('content')

<form action="/produk/update/{{ $produk->id_produk }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH PRODUK </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">Nama Produk</label>
                <input name="nama" class="form-control" value="{{ $produk->nama }}">
                <div class="text-denger">
                    @error('nama')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi Produk</label>
                <input name="deskripsi" class="form-control" value="{{ $produk->deskripsi }}">
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
                <input name="harga" class="form-control" value="{{ $produk->harga }}">
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
                <input name="Kualitas" class="form-control" value="{{ $produk->kualitas }}">
                <div class="text-denger">
                    @error('kualitas')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar produk</label>
                <div>
                    <img src="{{ asset('gambar/'. $produk->gambar) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="gambar" id="gambar" accept=".png, .jpg, .jpeg" value="{{ $produk->gambar }}">
                </div>
                <div class="text-denger">
                    @error('gambar')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

    <div>
        <div class="form-grup">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>
    </div>
    </div>
</div>
</form>

@endsection

