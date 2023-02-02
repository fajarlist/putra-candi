<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;

class indexC extends Controller
{
    public function __construct()
    {
        $this->index = new index();
    }

    public function index()
    {
        $data = [
            'produk'=> $this -> index -> produkData(),
            'alat'=> $this -> index -> alatData(),
            'contact'=> $this -> index -> contactData(),
        ];

      
        return view('front.f_index', $data);
    }

}
