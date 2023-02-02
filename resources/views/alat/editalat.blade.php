@extends('layout/v_template')
@section('nama','Add alat')
@section('content')

<form action="/alat/update/{{ $alat->id_alat }}" method="POST" enctype="multipart/form-data">
@csrf
<h4 style="text-align: center;"> UBAH ALAT </h4>
<div class="content">
    <div class="column">
        <div >
            <div class="form-grup">
                <label for="">Nama</label>
                <input name="nama_alat" class="form-control" value="{{ $alat->nama_alat }}">
                <div class="text-denger">
                    @error('nama_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div> 
            <div class="form-grup">
                <label for="">Deskripsi </label>
                <input name="deskripsi_alat" class="form-control" value="{{ $alat->deskripsi_alat }}">
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
                <input name="harga_alat" class="form-control" value="{{ $alat->harga_alat }}">
                <div class="text-denger">
                    @error('harga_alat')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div>
            <div class="form-grup">
                <label for="">Gambar </label>
                <div>
                    <img src="{{ asset('gambar/'. $alat->gambar_alat) }}" alt="" style="width:100px">
                </div>
                <div>
                    <input type="file" name="gambar_alat" id="gambar_alat" accept=".png, .jpg, .jpeg" value="{{ $alat->gambar_alat }}" placeholder="{{ asset('gambar/'. $alat->gambar_alat) }}">
                </div>
                <div class="text-denger">
                    @error('gambar_alat')
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

