<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BarangController::class, 'pengguna'])->name('pengguna');

// route barang
    Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/dashboard/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/dashboard/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/dashboard/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/dashboard/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/dashboard/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/dashboard/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
// end

// route supplier
    Route::get('/dashboard/suppliers', [SupplierController::class, 'index'])->name('suppliers');
    Route::get('/dashboard/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
    Route::post('/dashboard/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/dashboard/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::put('/dashboard/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/dashboard/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
// end

// search enggine
Route::get('/', [PenggunaController::class, 'index'])->name('pengguna');