<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="bg-gray-200">

    
    <div class="min-h-screen flex">
        @include('layouts.sidebar')

        <div class="flex-1 p-8">
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Barang</h2>
                <form action="{{ url('/dashboard/barang') }}" method="POST">
                    @csrf
        
                    <div class="mb-4">
                        <label for="id_barang" class="block text-sm font-medium text-gray-700">ID Barang</label>
                        <input type="text" id="id_barang" name="id_barang" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('id_barang')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <input type="text" id="kategori" name="kategori" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('kategori')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                        <input type="text" id="nama_barang" name="nama_barang" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('nama_barang')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                        <input type="number" id="harga" name="harga" required step="0.01"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('harga')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                        <input type="number" id="stok" name="stok" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('stok')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label for="supplier" class="block text-sm font-medium text-gray-700">Supplier</label>
                        <input type="text" id="supplier" name="supplier" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        @error('supplier')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <button type="submit"
                        class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition duration-300">
                        Simpan Barang
                    </button>
                </form>
            </div>
        </div>              
    </div>
</body>
</html>