<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    public function allData()
    {
        return DB::table('produk')->get();
    }

    public function detailData($id_produk)
    {
        return DB::table('produk')->where('id_produk', $id_produk)->first();
    }

    public function kategoriproduk($kategori)
    {
        return DB::table('produk')->where('kualitas', $kategori)->get();
    }

    public function addData($data)
    {
        DB::table('produk')->insert($data);
    }

    public function insertData($data)
    {
        return DB::table('item')->insert($data);
    }

    public function editData($id_produk, $data)
    {
        DB::table('produk')->where('id_produk', $id_produk)->update($data);
    }

    public function deleteData($id_produk)
    {
        DB::table('produk')->where('id_produk', $id_produk)->delete();
    }

}
