<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\item;
use App\Models\trans;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class invoiceC extends Controller
{
    public function __construct()
    {
        $this->invoice= new invoice();
    }

    public function index($nota)
    {        
        $where=[
            'nota'=>$nota,
            // 'nota'=> $e
        ];

        $data=[
            'item'=>item::where($where)->join('produk','item.id_produk','produk.id_produk')
            // ->join('users', 'item.id_users', 'users.id')
            ->get(),
            'trans'=>trans::where($where)->first(),
        ];
        return view('front.invoice', $data);
    } 
       
    public function indexC()
    {        
        $where=[
            'id_users'=>Auth::id(),
            // 'nota'=> $e
        ];

        $data=[
            'item'=>item::where($where)->join('produk','item.id_produk','produk.id_produk')
            // ->join('users', 'item.id_users', 'users.id')
            ->get()
        ];
        return view('front.checkout', $data);
    } 
}
