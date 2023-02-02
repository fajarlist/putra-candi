<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class index extends Model
{
    public function produkData()
    {
        return DB::table('produk')->get();
    }

    public function alatData()
    {
        return DB::table('alat')->get();
    }

    public function contactData()
    {
        return DB::table('contact')->get();
    }
    
    public function addData($data)
    {
        DB::table('contact')->insert($data);
    }
}
