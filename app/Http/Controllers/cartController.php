<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\item;
use App\Models\produk;
use App\Models\trans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{

    public function __construct()
    {
        $this-> produk = new produk();
        $this-> item = new item();
        $this-> trans = new trans();
    }
    public function nota()
    {
        // Request() -> validate([
        //     'jumlah_total' => 'required',
        // ]);

        $id_user = Auth::id();
        $now = now()->format("YmdHis");
        $nota = 'INV-'.$now.'-'.$id_user;

        $where = array('id_users' => $id_user, 'nota' => 'Belum Ada');
        $data = [
            'nota' => $nota
        ];
        
        $update = item::where($where)->update($data);

        if($update){
            trans::insert([
                'nota' => $nota,
                'jumlah' => Request()->jumlah,
                'id_users' => $id_user,
            ]);
            return redirect('invoice/'.$nota);
            // return response(['pesan'=>'berhasil'],200);
        }else{
            
            return response(['pesan'=>'Gagal'], 401);
        }
    }

    public function index()
    {
        $data = [
            'item'=> $this -> item -> allData(),
        ];
        return view('front/cart', $data);
    }

    public function insert()
    {
        $content = request()->getContent();
        $cd = json_decode($content);
        $id_user = Auth::id();
        $where = ['id_users' => Auth::id(), 'id_produk' => $cd->id_produk, 'nota' => 'Belum Ada'];
        $cek = item::where($where)->first();
        
        if($cek){

            $data = [
                'qty' => $cek->qty+1,
            ];

            // $this -> item -> updateDataCart($cd->id_produk, $data);
            item::where('id_produk', $cd->id_produk)->update($data);
            return response(["pesan"=> 'Berhasil diubah'],200);

        }else{

            $data = [
                'id_produk' => $cd->id_produk,
                'id_users' => $id_user,
                'qty' => $cd->qty,
                'nota' => 'Belum Ada',
            ];

            $this -> item -> insertData($data);
            return response(["pesan"=> 'Berhasil ditambahkan'],200);
        }
    }

    public function update()
    {
        $content = request()->getContent();
        $cd = json_decode($content);
        
        $data = [
            'qty' => $cd->qty,
        ];
        item::where('id_item', $cd->id_item)->update($data);
        
    }

    public function delete($id_item)
    {
        $this -> item -> deleteData($id_item);
        return redirect('/');
    }

    //pesanan
    public function indexP()
    {
        $id_user = Auth::id();
        $now = now()->format("YmdHis");
        $nota = 'INV-'.$now.'-'.$id_user;

        $data = [
            'trans'=> $this -> trans -> allData(),
            'nota'=>$nota,
        ];
        return view('pesanan.pesanan', $data);
    }
}
