@extends('layout.main')
@section('content')
<div class="container"><br>
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <a href="{{url('/produk/add')}}" class="btn btn-primary">+Tambah Data</a>
            </div>
            <div class="card-body">
              {{-- <h5 class="card-title">Kategori</h5> --}}
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @php $p=1 @endphp
                @foreach ($data as $item)
                <tbody>
                  <tr>
                    <th scope="row">{{$p++}}</th>
                    <td>{{$item->namaproduk}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>
                      <a href="/produk/{{$item->id}}" class="btn btn-danger">Delete</a>
                      <a href="/produk/{{$item->id}}/update" class="btn btn-success">Update</a>
                      <a href="/keranjang/{{$item->id}}/baru" class="btn btn-warning">Masukkan Keranjang</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-3">
          <style>
            .pho {
                position: relative;
                height: 400px;
                width: 300px;
                overflow: auto;
              }
            .d {
                display: block;
              }
          </style>
          <div class="bungkus">
            <div class="card-header">
              <h4 style="color: white; text-align:center;">Keranjang</h4>
            </div>
            <div class="d pho">
              <table class="table table-bordered table-striped mb-0">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Nama Produk</h5>
                    <p class="card-text">harga 
                      <p>jumlahbarang</p> 
                      <p>subtotal</p> 
                      <p>deskripsi</p>  
                    </p>
                  </div>
                </div>
              </table>
            </div><br>
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Total</li>
              </ul>
            </div>
          </div>
        </div> --}}
      </div>
</div>

@endsection