<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class trans extends Model
{
 protected $table='trans';

    public function allData()
    {
        return DB::table('trans')->get();
        
    }

    public function penghasilan($status)
    {
        return DB::table('trans')->where('status', $status)->get();
    }

    public function filter($tanggal)
    {
        return DB::table('trans')->where('tanggal', $tanggal)->get();
    }

    public function addData($data)
    {
        DB::table('trans')->insert($data);
    }

    public function insertData($data)
    {
        return DB::table('trans')->insert($data);
    }
}
