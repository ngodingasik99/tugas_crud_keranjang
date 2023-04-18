@extends('layouts.app')
@section('content')
<section>
  <div class="container"> 
    <div class="" style="text-align: center"><span class="badge bg-primary      rounded-pill"><input type="number" id="total" name="totalsemua" onkeyup="InputSub();" readonly></span>
    </div><br><br><br> 
    <div class="row justify-content-md-center g-5">
      <?php $p=1; ?>
      @foreach ($data as $item)
      <?php $p++ ?>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="{{asset('/foto.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item->namaproduk}}</h5>
            <p class="card-text">{{$item->deskripsi}}</p>
            <ul class="list-group">
              <li class="list-group-item">Harag :<input type="text" id="harga{{$p}}" value="{{$item->harga}}" name="harga" readonly></li>
              <li class="list-group-item">Jumlah Barang :<input type="text" id="jumlahbarang{{$p}}" name="jumlahbarang" onkeyup="InputSub({{$p}});"></li>
              <li class="list-group-item">Subtotal :<input type="text" id="subtutal{{$p}}" name="subtotal" onkeyup="InputSub();" readonly></li>
            </ul>
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            <a href="/keranjang/{{$item->id}}" class="btn btn-danger">Delete</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><br><br><br><br><br>
{{-- <div class="container"><br>
          <div class="card">
            <div class="card-header">
                <h1 class="" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Keranjang</h1>
              <div class="" style="text-align: center"></div>
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
                      <input type="text" id="harga{{$p}}" value="{{$item->harga}}" name="harga" readonly>
                    </td> 
                    <td>
                      <input type="text" id="jumlahbarang{{$p}}" name="jumlahbarang" onkeyup="InputSub({{$p}});">
                    </td>
                    <td>
                      <input type="text" id="subtutal{{$p}}" name="subtotal" onkeyup="InputSub();" readonlyp>
                    </td>
                    <td>{{$item->deskripsi}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              <input type="number" id="total" name="totalsemua" onkeyup="InputSub();" readonly>
            </div>
          </div>
</div> --}}
<script>
  function InputSub(number_id) {
        var harga =  parseInt(document.getElementById('harga'+number_id).value);
        var jumlahbarang =  parseInt(document.getElementById('jumlahbarang'+number_id).value);
        var hasil = parseInt(harga) * parseInt(jumlahbarang);
        if (!isNaN(hasil)) {
          document.getElementById('subtutal'+number_id).value = hasil;
          console.log(hasil)
        };
        var arr = document.getElementsByName('totalsemua');
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                hasil += parseInt(arr[i].value); 
            }
        document.getElementById('total').value = hasil;
      }
</script>
@endsection