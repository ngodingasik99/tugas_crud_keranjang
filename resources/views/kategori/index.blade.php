@extends('layouts.app')
@section('content')
<div class="container"><br>
  <div class="card">
    <div class="card-header">
      <a href="{{url('/kategori/add')}}" class="btn btn-primary">+Tambah Data</a>
    </div>
    <div class="card-body">
      {{-- <h5 class="card-title">Kategori</h5> --}}
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
</div><br><br><br>
<section>
  <div class="container">
    <h2 class="text-center judul-info" style="font-family: 'Times New Roman', Times, serif">Kategori</h2>
    <div class="row justify-content-md-center g-5">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div><br>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection