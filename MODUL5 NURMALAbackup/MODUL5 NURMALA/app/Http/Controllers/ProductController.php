<?php

namespace App\Http\Controllers;
use Storage;
use App\Barang;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        /*$validatedData = $request->validate([
         'nama_barang' => 'required|max:255',
         'gambar' => $file->getClientOriginalName(),
         'harga' => 'required|numeric',
         'stok' => 'required|numeric',
         'keterangan' => 'required|max:255',
     ]);*/
        $product = Barang::create([
         'nama_barang' => $request->nama_barang,
         'gambar' => $nama_file,
         'harga' => $request->harga,
         'stok' => $request->stok,
         'keterangan' => $request->keterangan,
        ]); 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'uploads';
 
                // upload file
        $file->move($tujuan_upload,$nama_file);


     return redirect('/list')->with('success', 'Product is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::where('id', $id)->first();

        return view('update', compact('barangs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       /* $barangs = Barang::where('id', $request->id)->first();
        $barangs->name_barang = $request->name_barang;
        
        $barangs->update();*/
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();

        return redirect('/list')->with('success', 'Book is successfully deleted');
    }
}
