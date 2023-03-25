@extends('layouts.app')
@section('content')
<div class="container"><br>
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
                      <a href="/keranjang/{{$item->id}}/baru" class="btn btn-warning">Keranjang</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
</div>

@endsection