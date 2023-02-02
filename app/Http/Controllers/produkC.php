<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkC extends Controller
{
    public function __construct()
    {
        $this->produk = new produk();
    }

    public function index()
    {
        $data = [
            'produk'=> $this -> produk -> allData(),
        ];
        return view('produk/produk', $data);
    }

    public function indexP()
    {
        $kategori=request()->get('kategori');
        $data = [
            'produk'=> $this -> produk -> kategoriproduk($kategori),
        ];
        return view('front/f_indexP', $data);
    }

    public function indexG()
    {
        $kategori=request()->get('kategori');
        $data = [
            'produk'=> $this -> produk -> kategoriproduk($kategori),
        ];
        return view('front/f_indexG', $data);
    }

    public function indexH()
    {
        $kategori=request()->get('kategori');
        $data = [
            'produk'=> $this -> produk -> kategoriproduk($kategori),
        ];
        return view('front/f_indexH', $data);
    }

    public function detail($id_produk)
    {
        if(!$this->produk -> detailData($id_produk)){
            abort(404);
        }
        $data=[
            'produk'=>$this->produk->detailData($id_produk),
            'produk1'=>$this->produk->allData(),
        ];
        return view('front/f_detail', $data);
    }

    public function Add()
    {
        return view('produk/addproduk');
    }

    public function insert()
    {

        Request()->validate([
        'nama'=>'required',
        'deskripsi'=>'required',
        'harga'=>'required',
        'kualitas'=>'required',
        'gambar'=>'required'
        ]);
        $file = Request()->gambar;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama' => Request()->nama,
            'deskripsi' => Request()->deskripsi,
            'harga'=> Request()->harga,
            'kualitas'=> Request()->kualitas,
            'gambar' => $nama_file,
        ];

        $this -> produk -> addData($data);

        return redirect() -> route('produk') -> with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_produk)
    {
        if(!$this->produk ->detailData($id_produk)){
        abort(404);
    }
        $data = [
            'produk'=> $this -> produk -> detailData($id_produk),
        ];
        return view('produk.editproduk', $data);

    }

    public function update($id_produk)
    {

        Request()->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'kualitas'=>'required',
            'gambar'
        ]);
        $file = Request()->gambar;

        $nama_file = $file->getClientOriginalName();

        $tujuan_upload = 'gambar';
        $file->move($tujuan_upload,$nama_file);

        $data =[
            'nama' => Request()->nama,
            'deskripsi' => Request()->deskripsi,
            'harga'=> Request()->harga,
            'kualitas'=> Request()->kualitas,
            'gambar' => $nama_file,

        ];

        $this -> produk -> editData($id_produk, $data);

        return redirect() -> route('produk') -> with('pesan', 'Data berhasil diedit');
    }

    public function delete($id_produk)
    {
        $this -> produk -> deleteData($id_produk);
        return redirect() -> to('produk') -> with('pesan', 'Data berhasil dihapus');
    }

}
