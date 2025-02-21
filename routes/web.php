<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

// route barang
    Route::resource('/dashboard/barang', BarangController::class)->names([
        'index'   => 'barang',
        'create'  => 'barang.create',
        'store'   => 'barang.store',
        'show'    => 'barang.show',
        'edit'    => 'barang.edit',
        'update'  => 'barang.update',
        'destroy' => 'barang.destroy',
    ]);    
// end

// route supplier
    Route::resource('/dashboard/suppliers', SupplierController::class)->except('show')->names([
        'index'   => 'suppliers',
        'create'  => 'suppliers.create',
        'store'   => 'suppliers.store',
        'edit'    => 'suppliers.edit',
        'update'  => 'suppliers.update',
        'destroy' => 'suppliers.destroy',
    ]);    
// end

// route todolist
    Route::get('/dashboard/todolist', [TodolistController::class, 'index'])->name('todolist.admin');
// end

// route auth
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Proteksi rute admin dengan middleware
    Route::middleware(['auth'])->group(function () {
        // Route untuk halaman barang
        Route::get('/dashboard/barang', function () {
            return view('dashboard.barang.index');
        })->name('dashboard.barang');        
    
        // Route untuk halaman chart
        Route::get('/dashboard/chart', function () {
            $barangs = App\Models\Barang::all();
            $jumlah = $barangs->count();
            $jumlahBarang = $barangs->count();
            $jumlahSupplier = App\Models\Supplier::count(); // Hitung jumlah supplier
        
            return view('dashboard.chart.barang', compact('barangs', 'jumlah', 'jumlahBarang', 'jumlahSupplier'));
        })->name('dashboard.chart');                      
    
        // Route untuk halaman supplier
        Route::get('/dashboard/supplier', function () {
            return view('dashboard.supplier.index');
        })->name('dashboard.supplier');
    
        // Route untuk halaman todolist
        Route::get('/dashboard/todolist', function () {
            return view('dashboard.todolist.index');
        })->name('dashboard.todolist');
    });    
});

// route chart
Route::get('/dashboard/chart', [BarangController::class, 'chart'])->name('chart.barang');
Route::get('/dashboard/suplier', [SupplierController::class, 'chart'])->name('chart.suplier');
// end

// search enggine
Route::get('/', [PenggunaController::class, 'index'])->name('pengguna');