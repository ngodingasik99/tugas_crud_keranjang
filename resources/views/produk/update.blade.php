@extends('layouts.app')
@section('content')
<div class="container"><br>
    <div class="card">
        <div class="card-header"><h3>Update Data</h3><br>
            <form action="/produk/{{ $produks->id }}" method="post">
                {{-- @method('put') --}}
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="namaproduk" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="namaproduk" value="{{$produks->namaproduk}}" id="namaproduk" placeholder="Nama namaproduk">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" value="{{$produks->harga}}" id="harga" placeholder="Nama harga">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi" value="{{$produks->deskripsi}}" id="deskripsi" placeholder="Nama deskripsi">
                </div>
                <select class="form-select" aria-label="Default select example" name="kategori_id">
                    <option  selected>Pilih kategori</option>
                    @foreach ($kategoris as $item)
                        <option value="{{ $item->id }}" {{ $produks->kategori_id == $item->id ? 'selected' : '' }}>{{$item->nama}}</option>
                    @endforeach
                </select><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

  {{-- <select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select> --}}
@endsection