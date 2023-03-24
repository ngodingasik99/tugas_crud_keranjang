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
        return DB::insert("insert into keranjang (id_produk, jumlahbarang) values ('$data', '$data')");
    } 

    protected function tampiltabel()
    {
        return DB::select("select * from keranjang join produk on keranjang.id_produk = produk.id");
    }

    // protected function masukkanjumlahbarang($data)
    // {
        // $jumlahbarang = $data->input('jumlahbarang');
        // $id_produk = $data->input('id_produk');
        // DB::update('update users set votes = 100 where name = ?', ['John']);
        // $d = DB::update("update keranjang set jumlahbarang=$data where id=$data");
        // UPDATE `keranjang` SET `id`='[value-1]',`jumlahbarang`='[value-2]',`subtotal`='[value-3]',`total`='[value-4]',`created_at`='[value-5]',`updated_at`='[value-6]',`id_produk`='[value-7]' WHERE 1
        // DB::select("select keranjang.id_produk from produk join keranjang on produk.id = keranjang.id_produk");
        // dd($data);
        // if ($d == ) {
            # code...
        // }

    // }
}
