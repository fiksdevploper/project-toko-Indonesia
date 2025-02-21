<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // Pastikan Model Barang diimport

class PenggunaController extends Controller
{
    // Menampilkan semua barang di halaman pengguna
    public function pengguna()
    {
        $barangs = Barang::all();
        return view('pengguna', compact('barangs'));
    }

    // Menampilkan barang dengan fitur pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');

        $barangs = Barang::when($search, function ($query, $search) {
            return $query->where('nama_barang', 'like', '%' . $search . '%')
                ->orWhere('kategori', 'like', '%' . $search . '%')
                ->orWhere('id_barang', 'like', '%' . $search . '%')
                ->orWhere('stok', 'like', '%' . $search . '%')
                ->orWhere('supplier', 'like', '%' . $search . '%');
        })->get();

        return view('pengguna', compact('barangs', 'search'));
    }
}