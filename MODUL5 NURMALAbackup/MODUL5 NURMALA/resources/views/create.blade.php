@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <a href="{{ url('/list') }}">Back</a>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Name Barang :</label>
              <input type="text" class="form-control" name="nama_barang"/>
          </div>
          <!-- <div class="form-group">
              <label for="gambar">Gambar :</label>
              <input type="text" class="form-control" name="gambar"/>
          </div> -->
          <div class="form-group">
              <label for="harga">Harga :</label>
              <input type="text" class="form-control" name="harga"/>
          </div>
          <div class="form-group">
              <label for="stok">Stok :</label>
              <input type="text" class="form-control" name="stok"/>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" name="keterangan"></textarea>
          </div>
          <input type="file" name="gambar"/>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
  </div>
</div>
@endsection