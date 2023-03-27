@extends('layouts.app')
@section('content')
<div class="container"><br>
          <div class="card">
            <div class="card-header">
                <h1 class="" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Keranjang</h1>
              <div class="" style="text-align: center"><input type="text"></div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">jumlahbarang</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Deskripsi</th>
                  </tr>
                </thead>
                @php $p=1 @endphp
                @foreach ($data as $item)
                <tbody>
                  <tr>
                    <th scope="row">{{$p++}}</th>
                    <td>{{$item->namaproduk}}</td>
                    <td>
                      <input type="text" id="harga{{$p}}" value="{{$item->harga}}" name="harga">
                    </td> 
                    <td>
                      <input type="text" id="jumlahbarang{{$p}}" name="jumlahbarang" onkeyup="InputSub({{$p}});">
                    </td>
                    <td>
                      <input type="text" id="subtutal{{$p}}" name="subtotal" onkeyup="InputSub();" readonly>
                    </td>
                    <td>{{$item->deskripsi}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
</div>

<script>
  function InputSub(number_id) {
    console.log(number_id);
        // var save = $data
        var harga =  parseInt(document.getElementById('harga'+number_id).value);
        var jumlahbarang =  parseInt(document.getElementById('jumlahbarang'+number_id).value);
        var hasil = parseInt(harga) * parseInt(jumlahbarang);
        if (!isNaN(hasil)) {
          document.getElementById('subtutal'+number_id).value = hasil;
        };
      };
</script>
@endsection