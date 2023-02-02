<?php

namespace App\Http\Controllers;

use App\Models\beli;
use Illuminate\Http\Request;

class beliC extends Controller
{
    public function __construct()
    {
        $this->beli = new beli();
    }

    public function index()
    {
        $data = [
            'beli'=> $this -> beli -> allData(),
        ];


        return view('front/invoice', $data);
    }

    public function detailbeli($id_beli)
    {
        if(!$this->beli -> detailData($id_beli)){
            abort(404);
        }
        $data=[
            'beli'=>$this->beli->detailData($id_beli),
            'beli1'=>$this->beli->allData(),
        ];
        return view('front/invoice', $data);
    }

    public function Add()
    {
        return view('beli/addbeli');
    }

    public function insert()
    {

        Request()->validate([
        'nama_beli'=>'required',
        'alamat_beli'=>'required',
        'jumlah_beli'=>'required'
        ]);
        $data =[
            'nama_beli' => Request()->nama_beli,
            'alamat_beli' => Request()->alamat_beli,
            'jumlah_beli'=> Request()->jumlah_beli,
        ];

        $this -> beli -> addData($data);

        return redirect() -> route('invoice') -> with('pesan', 'Data berhasil ditambahkan');
    }

    


}
