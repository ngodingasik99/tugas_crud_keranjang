@extends('layout.main')
@section('content')

<div class="container"><br>
    <div class="card">
        <div class="card-header">
            <form action="{{ url('/kategori/store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="kategori" class="form-label">Nama Kategori</label>
                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Nama Kategori">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection