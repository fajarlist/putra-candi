<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class beli extends Model
{
    public function allData()
    {
        return DB::table('beli')->get();
    }

    public function detailData($id_beli)
    {
        return DB::table('beli')->where('id_beli', $id_beli)->first();
    }

    public function addData($data)
    {
        DB::table('beli')->insert($data);
    }

    public function editData($id_beli, $data)
    {
        DB::table('beli')->where('id_beli', $id_beli)->update($data);
    }

    public function deleteData($id_beli)
    {
        DB::table('beli')->where('id_beli', $id_beli)->delete();
    }

}
