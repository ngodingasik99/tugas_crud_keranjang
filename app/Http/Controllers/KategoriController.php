<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Console\View\Components\Alert;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::orderBy('updated_at', 'desc')->get();
        return view('kategori.index', compact('data'));
    }

    public function add()
    {
        return view('kategori.add');
    }

    public function store(Request $request)
    {
        Kategori::tambahdata($request);
        return redirect('/kategori');
    }

    public function update($id)
    {
        $data = Kategori::find($id);
        return view('kategori.update', compact(['data']));
    }

    public function action($id, Request $request)
    {
        Kategori::where("id", $id)->update([
            "nama" => $request["nama"]
        ]);
        return redirect('/kategori');
    }

    public function distroy($id)
    {
        $data = Kategori::hapus($id);
        return redirect('/kategori');
    }
}
