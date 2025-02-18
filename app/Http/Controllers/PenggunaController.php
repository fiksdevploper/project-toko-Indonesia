<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'nullable|string',
        ]);

        // Ambil nilai pencarian
        $search = $request->input('search');

        // Query pencarian
        $barangs = Barang::when($search, function ($query, $search) {
            return $query->where('nama_barang', 'like', '%' . $search . '%')
                         ->orWhere('kategori', 'like', '%' . $search . '%')
                         ->orWhere('id_barang', 'like', '%' . $search . '%')
                         ->orWhere('stok', 'like', '%' . $search . '%')
                         ->orWhere('supplier', 'like', '%' . $search . '%');
        })->get();

        // Kirim data ke view
        return view('pengguna', compact('barangs'));
    }
}
