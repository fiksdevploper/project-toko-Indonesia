<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body class="bg-gray-200">
    {{-- sidebar --}}
    <div class="min-h-screen flex">
        @include('layouts.sidebar')
        
        {{-- form  --}}
        <div class="flex-1 p-8">
            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-4">
                    <label for="id_suplier" class="block text-sm font-medium text-gray-700">ID Supplier</label>
                    <input type="text" name="id_suplier" id="id_suplier" value="{{ old('id_suplier', $supplier->id_suplier) }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            
                <div class="mb-4">
                    <label for="nama_suplier" class="block text-sm font-medium text-gray-700">Nama Supplier</label>
                    <input type="text" name="nama_suplier" id="nama_suplier" value="{{ old('nama_suplier', $supplier->nama_suplier) }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $supplier->alamat) }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            
                <div class="mb-4">
                    <label for="kota" class="block text-sm font-medium text-gray-700">Kota</label>
                    <input type="text" name="kota" id="kota" value="{{ old('kota', $supplier->kota) }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            
                <div class="mb-4">
                    <label for="no_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" value="{{ old('no_telepon', $supplier->no_telepon) }}" class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition duration-300">
                        Perbarui Supplier
                    </button>
                </div>
            </form>            
        </div>
    </div>
</body>
</html>