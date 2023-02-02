<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class item extends Model
{
    use HasFactory;
    protected $table = 'item';

    protected $fillable = [
        'status'
    ];

    public function allData()
    {
        $where=['id_users'=>Auth::id(),'nota'=>'Belum Ada'];
        return DB::table('item')
        ->join('produk', 'item.id_produk', 'produk.id_produk')
        ->where($where)
        ->get();
    }

    public function insertData($data)
    {
        return DB::table('item')->insert($data);
    }

    public function updateData($id_item, $data)
    {
        return DB::table('item')->where('id_item', $id_item)->update($data);
    }
    
    public function deleteData($id_item)
    {
        return DB::table('item')->where('id_item', $id_item)->delete();
    }
}
