<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'kategori';
    
    protected function tambahdata($data)
    {
        $kategori = $data->input('kategori');


        return DB::insert("INSERT INTO kategori (nama) VALUES ('$kategori')");
    }
    static function hapus($data)
    {
        return DB::delete("DELETE FROM kategori WHERE id='$data'");
    }

    public function Produks()
    {
        return $this->hasMany(Produk::class);
    }
}
