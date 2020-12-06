@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}" >
                        @csrf
                        <div class="col-md-12 mt-5">
                            <h2>{{ $barang->nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barang->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="nama" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>contact</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="contact" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Qunatity</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_pesan" class="form-control" required="">
                                            <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection