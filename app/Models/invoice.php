<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class invoice extends Model
{
    public function produkData()
    {
        return DB::table('produk')->orderBy('id_produk', 'DESC')->limit(1)->get();
    }

    public function alatData()
    {
        return DB::table('alat')->orderBy('id_alat', 'DESC')->limit(1)->get();
    }

    public function beliData()
    {
        return DB::table('item')->orderBy('id_item', 'DESC')->limit(1)->get();
    }

}
