<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';

    public function produks()
    {
        return $this->belongsTo(Produk::class);
    }

    protected function ambildata($data)
    {
        return DB::insert("insert into keranjang (id_produk) values ('$data')");
    } 

    protected function tampiltabel()
    {
        return DB::select("select * from keranjang join produk on keranjang.id_produk = produk.id");
    }

    protected function hapus($data)
    {
        return DB::delete("DELETE FROM keranjang WHERE id='$data'");
    }
}
