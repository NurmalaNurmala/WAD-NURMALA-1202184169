<?php

namespace App\Http\Controllers;

use App\Barang;
use Alert;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        if($file == null) {
            $barangs = Barang::where('id', $request->id)->first();
            $barangs->nama_barang   = $request->nama_barang;
            $barangs->harga         = $request->harga;
            $barangs->stok          = $request->stok;
            $barangs->keterangan    = $request->keterangan;
        } else {
            $nama_file = time()."_".$file->getClientOriginalName();
            $barangs = Barang::where('id', $request->id)->first();
            $barangs->nama_barang   = $request->nama_barang;
            $barangs->gambar        = $nama_file;
            $barangs->harga         = $request->harga;
            $barangs->stok          = $request->stok;
            $barangs->keterangan    = $request->keterangan;
            $tujuan_upload = 'uploads';
            $file->move($tujuan_upload,$nama_file);            
        }

        $barangs->update();

        return redirect('/list')->with('success', 'Product is successfully saved');
    }
}
