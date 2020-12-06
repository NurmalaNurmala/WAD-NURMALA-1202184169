@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            <a href="{{ url('products') }}" class="btn btn-primary"><i class=""></i> Add Barang</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ url('uploads') }}/{{ $barang->gambar }}" width="50"></td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>Rp. {{ number_format($barang->harga)}}</td>
                                <td>{{ $barang->stok }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td>
                                    <a href="{{ url('edit') }}/{{ $barang->id }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('delete') }}/{{ $barang->id }}" class="btn btn-primary">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
