@extends('layout/v_template')
@section('nama','Add contact')
@section('content')


@if (session('pesan'))
    <div class="alert alert-succes alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>Success!</h5>
        {{ session ('pesan') }}.
    </div>
@endif
    <h4 style="text-align: center;">DATA CONTACT</h4><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Cotact</th>
                <th>Email</th>
                <th>Nomer Telpon</th>
                <th>Request</th>
            </tr>
        </thead>
        <body>
            <?php $no=1; ?>
            @foreach ($contact as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data-> nama_contact }}</td>
                    <td>{{ $data-> email }}</td>
                    <td>{{ $data-> telp }}</td>
                    <td>{{ $data-> pesan }}</td>
                </tr>
            @endforeach
        </body>
    </table>
    @endsection
 
            
               