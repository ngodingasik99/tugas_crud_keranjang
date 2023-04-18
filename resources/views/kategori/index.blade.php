@extends('layouts.app')
@section('content')
<div class="container"><br>
  <div class="card">
    <div class="card-header">
      <a href="{{url('/kategori/add')}}" class="btn btn-primary">+Tambah Data</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @php $p=1 @endphp
        @foreach ($data as $item)
        <tbody>
          <tr>
            <th scope="row">{{$p++}}</th>
            <td>{{$item->nama}}</td>
            <td>
              <a href="/kategori/{{$item->id}}" class="btn btn-danger">Delete</a>
              <a href="/kategori/{{$item->id}}/update" class="btn btn-success">Update</a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>  
    </div>
  </div>
</div>
@endsection