<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    public function chart()
    {
        $jumlahBarang = Barang::count();
        $jumlahSupplier = Supplier::count();
        $barangs = Barang::all();
        return view('dashboard.chart.barang', compact('jumlahBarang', 'jumlahSupplier', 'barangs'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('dashboard.barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|unique:barangs',
            'kategori' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'supplier' => 'required',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('dashboard.barang.index', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'id_barang' => ['required', Rule::unique('barangs', 'id_barang')->ignore($barang->id)],
            'kategori' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'supplier' => 'required',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang')->with('success', 'Barang berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang')->with('success', 'Barang berhasil di hapus');
    }
}
