@extends('layout/v_template')
@section('nama','Add alat')
@section('content')


@if (session('pesan'))
    <div class="alert alert-succes alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Success!</h5>
        {{ session ('pesan') }}.
    </div>
@endif
    <h4 style="text-align: center;">DATA ALAT</h4><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Gambar Alat</th>
                <th>Deskripsi Alat</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            <?php $no=1; ?>
            @foreach ($alat as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data-> nama_alat }}</td>
                    <td><img src="{{ asset('gambar/'. $data->gambar_alat) }}" alt="" style="width:100px"></td>
                    <td>{{ $data-> deskripsi_alat }}</td>
                    <td>{{ $data-> harga_alat }}</td>
                    <td>
                        <a href="/alat/{{ $data -> id_alat }}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit nav-icon"></i></a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $data->id_alat }}">
                            <i class="fa fa-trash nav-icon"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    <a href="/alat/add" class="btn btn-primary btn-sm">Tambah</a>


    @foreach ($alat as $data)
    <div class="modal fade" id="delete{{ $data->id_alat }}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                <h4 class="modal-title">{{ $data->nama_alat}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data Ini..?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal" >No</button>
                    <button><a href="/alat/delete/{{ $data->id_alat }}" class="btn btn-outline-light">Yes</a></button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
            
               