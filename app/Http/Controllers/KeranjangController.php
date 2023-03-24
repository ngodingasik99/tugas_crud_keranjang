<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $data['data'] = keranjang::tampiltabel();
        
            return view('keranjang.index', $data);
    }

    public function baru($id)
    {
        keranjang::ambildata($id);
        return redirect('/keranjang');
    }

    public function action($id, Request $request)
    {
        $data = keranjang::where('id', $id)->update([
            "jumlahbarang" => $request->input['jumlahbarang']
        ]);
        dd($data);

    }
}
