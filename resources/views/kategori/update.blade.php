@extends('layout.main')
@section('content')
<div class="container"><br>
    <div class="card">
        <div class="card-header"><h3>Update Data</h3><br>
            <form action="/kategori/{{ $data->id }}" method="post">
                {{-- @method('put') --}}
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="kategori" class="form-label">Nama Kategori</label>
                  <input type="text" class="form-control" name="nama" value="{{$data->nama}}" id="kategori" placeholder="Nama Kategori">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection