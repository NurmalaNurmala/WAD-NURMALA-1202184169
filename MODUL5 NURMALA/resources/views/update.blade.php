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
      <form method="post" action="{{ route('barangs.store') }}" enctype="multipart/form-data">

          <div hidden class="form-group">
              <label for="gambar">Id :</label>
              <input type="text" class="form-control" value="{{ $barangs->id }}" name="id"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Name Barang :</label>
              <input type="text" class="form-control" value="{{ $barangs->nama_barang }}" name="nama_barang"/>
          </div>
          <div class="form-group">
              <label for="harga">Harga :</label>
              <input type="text" class="form-control" value="{{ $barangs->harga }}" name="harga"/>
          </div>
          <div class="form-group">
              <label for="stok">Stok :</label>
              <input type="text" class="form-control" value="{{ $barangs->stok }}" name="stok"/>
          </div>
          <div class="form-group">
              <label for="keterangan">Keterangan :</label>
              <textarea class="form-control" name="keterangan">{{ $barangs->keterangan }}</textarea>
          </div>
          <div class="form-group">
              <img src="{{ url('uploads') }}/{{ $barangs->gambar }}" width="100">
              <input type="file" name="gambar"/>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
          
      </form>
  </div>
</div>
@endsection