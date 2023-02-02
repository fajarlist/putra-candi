@extends('layout/v_template')
@section('nama','Add contact')
@section('content')

<form action="/contact/insert" method="POST">
@csrf
<h4 style="text-align: center;"> TAMBAH CONTACT </h4>
<div class="content">
    <div class="column">
        <div>
            <div class="form-grup">
                <label for="">Nama Contact</label>
                <input name="nama_contact" class="form-control" value="{{ old('nama_contact')}}">
                <div class="text-denger">
                    @error('nama_contact')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Email</label>
                <input name="email" class="form-control" value="{{ old('email')}}">
                <div class="text-denger">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Nomer Telpon</label>
                <input name="telp" class="form-control" value="{{ old('telp')}}">
                <div class="text-denger">
                    @error('telp')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div >
            <div class="form-grup">
                <label for="">Pesan</label>
                <textarea name="pesan" class="form-control" value="{{ old('pesan')}}"></textarea>
                <div class="text-denger">
                    @error('pesan')
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

