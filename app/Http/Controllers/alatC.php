<?php

namespace App\Http\Controllers;

use App\Models\alat;
use Illuminate\Http\Request;

class alatC extends Controller
{
    public function __construct()
    {
        $this->alat = new alat();
    }

    public function index()
    {
        $data = [
            'alat'=> $this -> alat -> allData(),
        ];

       

        return view('alat/alat', $data);
    }

    public function detailalat($id_alat)
    {
        if(!$this->alat -> detailData($id_alat)){
            abort(404);
        }
        $data=[
            'alat'=>$this->alat->detailData($id_alat),
            'alat1'=>$this->alat->allData(),
        ];
        return view('front/f_detailalat', $data);
    }

    public function Add()
    {
        return view('alat/addalat');
    }

    public function insert()
    {

        Request()->validate([
        'nama_alat'=>'required',
        'deskripsi_alat'=>'required',
        'harga_alat'=>'required',
        'gambar_alat'=>'required'
        ]);
        $file = Request()->gambar_alat;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_alat' => Request()->nama_alat,
            'deskripsi_alat' => Request()->deskripsi_alat,
            'harga_alat'=> Request()->harga_alat,
            'gambar_alat' => $nama_file,
        ];

        $this -> alat -> addData($data);

        return redirect() -> route('alat') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_alat)
    {
        if(!$this->alat ->detailData($id_alat)){
        abort(404);
    }
        $data = [
            'alat'=> $this -> alat -> detailData($id_alat),
        ];
        return view('alat.editalat', $data);

    }

    public function update($id_alat)
    {

        Request()->validate([
            'nama_alat'=>'required',
            'deskripsi_alat'=>'required',
            'harga_alat'=>'required',
            'gambar_alat'
        ]);
        $file = Request()->gambar_alat;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama_alat' => Request()->nama_alat,
            'deskripsi_alat' => Request()->deskripsi_alat,
            'harga_alat'=> Request()->harga_alat,
            'gambar_alat' => $nama_file,

        ];

        $this -> alat -> editData($id_alat, $data);

        return redirect() -> route('alat') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_alat)
    {
        $this -> alat -> deleteData($id_alat);
        return redirect() -> to('alat') -> with('pesan', 'Data berhasil dihapus');
    }


}
