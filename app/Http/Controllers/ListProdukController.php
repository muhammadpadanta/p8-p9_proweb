<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show ()
    {
        $data = Produk::get();

    foreach ($data as $produk) {
        $nama[] = $produk->name;
        $deskripsi[] = $produk->descripti;
        $harga[] = $produk->price;
    }

    return view ('list_produk', compact ('nama','deskripsi', 'harga'));
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);
    
        Produk::create([
            'name' => $data['nama'],
            'description' => $data['deskripsi'],
            'price' => $data['harga'],
        ]);
    
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    
    

    
   
    
}