@extends('layout.main')
@section('content')

<div class="container"><br>
    <div class="card">
        <div class="card-header">
            <form action="{{ url('/produk/store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="namaproduk" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="namaproduk" id="namaproduk" placeholder="namaproduk">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Nama harga">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Nama deskripsi">
                </div>
                <select class="form-select" aria-label="Default select example" name="kategori_id">
                  <option selected>Pilih kategori</option>
                  @foreach ($kategori as $item)
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>
                  @endforeach
                </select><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection