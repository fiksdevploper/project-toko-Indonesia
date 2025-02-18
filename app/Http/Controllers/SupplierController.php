<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('dashboard.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_suplier' => 'required|unique:suppliers',
            'nama_suplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telepon' => 'required|numeric',
        ]);

        Supplier::create($request->all());

        return redirect()->route('suppliers')->with('success', 'Supplier Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('dashboard.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('dashboard.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'id_suplier' => 'required|unique:suppliers,id_suplier,' . $supplier->id,
            'nama_suplier' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telepon' => 'required'
        ]);

        $supplier->update($request->all());
        return redirect()->route('suppliers')->with('success', 'Data supplier berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers')->with('success', 'Supplier berhasil dihapus.');
    }
}
