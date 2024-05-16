<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class AddProdukController extends Controller
{
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
