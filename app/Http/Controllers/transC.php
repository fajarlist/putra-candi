<?php

namespace App\Http\Controllers;

use App\Models\trans;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transC extends Controller
{
    public function __construct()
    {
        $this->item = new item();
        $this->trans = new trans();
    }

    public function index()
    {
        $data = [
            'trans'=> $this -> trans -> allData(),
        ];
        return view('pesanan/pesanan', $data);
    }

    public function changeStatus(Request $request)

    {
        $user = trans::find($request->id_nota);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);

    }

    public function indexP()
    {
        date_default_timezone_set('Asia/Jakarta');
        $datetime = date(now());
        $jam_sekarang = date('H:i:s');
        $tanggal_sekarang = date('Y-m-d', strtotime($datetime));
        $bulan_sekarang = date('Y-m', strtotime($datetime));
        $tahun_sekarang = date('Y', strtotime($datetime));        

        $pendapatanHarian = trans::where('tanggal', 'like', '%' . $tanggal_sekarang . '%')->where('status', '1')->sum('jumlah');
        $pendapatanBulanan = trans::where('tanggal', 'LIKE', '%' . $bulan_sekarang . '%')->where('status', '1')->sum('jumlah');
        $pendapatanTahunan = trans::where('tanggal', 'LIKE', '%' . $tahun_sekarang . '%')->where('status', '1')->sum('jumlah');

        return view('penghasilan.penghasilan',compact('pendapatanHarian', 'pendapatanBulanan', 'pendapatanTahunan'));
    }

    public function filterhari()
    {
        $tanggal=request()->get('tanggal');
        $data = [
            'produk'=> $this -> produk -> filter($tanggal),
        ];
        return view('front/f_hari', $data);
    }

    public function filterbulan()
    {
        $tanggal=request()->get('tanggal');
        $data = [
            'produk'=> $this -> produk -> filter($tanggal),
        ];
        return view('front/f_bulan', $data);
    }

    public function filtertahun()
    {
        $tanggal=request()->get('tanggal');
        $data = [
            'produk'=> $this -> produk -> filter($tanggal),
        ];
        return view('front/f_tahun', $data);
    }

    

   
}
