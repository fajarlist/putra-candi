<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class alat extends Model
{
    public function allData()
    {
        return DB::table('alat')->get();
    }

    public function detailData($id_alat)
    {
        return DB::table('alat')->where('id_alat', $id_alat)->first();
    }

    public function addData($data)
    {
        DB::table('alat')->insert($data);
    }

    public function editData($id_alat, $data)
    {
        DB::table('alat')->where('id_alat', $id_alat)->update($data);
    }

    public function deleteData($id_alat)
    {
        DB::table('alat')->where('id_alat', $id_alat)->delete();
    }

}
