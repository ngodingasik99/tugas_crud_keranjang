<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class produk extends Model
{
    use HasFactory;
    // protected $guarded = [];
    // protected $fillable = ['namaproduk', 'harga', 'deskripsi', 'kategori_id'];

    protected $table = 'produk';

    protected function tambahdata($data)
    {
        $namaproduk = $data->input('namaproduk');
        $harga = $data->input('harga');
        $deskripsi = $data->input('deskripsi');
        $kategori_id = $data->input('kategori_id');

        return DB::insert("INSERT INTO produk (namaproduk, harga, deskripsi, kategori_id) VALUES ('$namaproduk', '$harga', '$deskripsi', '$kategori_id')");
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class);
    }
}
