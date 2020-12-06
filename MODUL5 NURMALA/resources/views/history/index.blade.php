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
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>>
                                <th>Nama</th>
                                <th>Contact</th>
                                <th>Nama Barang</th>>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_detail as $pd)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ url('uploads') }}/{{ $pd->gambar }}" width="50"></td>
                                <td>{{ $pd->nama }}</td>
                                <td>{{ $pd->contact }}</td>
                                <td>{{ $pd->nama_barang }}</td>
                                <td>{{ $pd->jumlah }}</td>>
                                <td>Rp. {{ number_format($pd->jumlah_harga) }}</td>
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