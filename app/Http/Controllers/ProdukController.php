<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = produk::orderBy('updated_at', 'desc')->get();
        return view('produk.index', compact('data'));
    }

    public function add()
    {
        $data['kategori'] = kategori::all();
        return view('produk.add', $data);
    }

    public function store(Request $request)
    {
        Produk::tambahdata($request);
        return redirect('/produk');
    }

    public function update($id)
    {
        $data['kategoris'] = kategori::all();
        $data['produks'] = Produk::find($id);
        return view('/produk/update', $data);
    }

    public function action($id, Request $request)
    {
        produk::where("id", $id)->update([
            "namaproduk" => $request["namaproduk"],
            "harga" => $request["harga"],
            "deskripsi" => $request["deskripsi"],
            "kategori_id" => $request["kategori_id"],
        ]);
        return redirect('/produk');
    }

    public function distroy($id)
    {
        produk::destroy($id);
        return redirect('/produk');
    }
}
