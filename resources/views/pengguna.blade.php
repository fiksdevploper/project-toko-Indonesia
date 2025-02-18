<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body class="bg-gray-200">
    <div class="container mx-auto p-4">
      <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-black mb-4">Cari Barang</h1>
        <form action="{{ route('pengguna') }}" method="GET" class="mb-4">
          <input type="text" id="search" name="search" placeholder="Cari Barang..."
          class="px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-white"
          value="{{ request('search') }}">
          <button type="submit" class="px-4 items-center py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">            
            Cari
          </button>
        </form>
      </div>

      <div class="flex-1 p-8 space-y-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-600 dark:text-gray-300">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-center">ID Barang</th>
                      <th scope="col" class="px-6 py-3 text-center">Kategori</th>
                      <th scope="col" class="px-6 py-3 text-center">Nama Barang</th>
                      <th scope="col" class="px-6 py-3 text-center">Harga</th>
                      <th scope="col" class="px-6 py-3 text-center">Stok</th>
                      <th scope="col" class="px-6 py-3 text-center">Supplier</th>
                    </tr>
                </thead>
                
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($barangs as $barang)
                    <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800 border-b dark:border-gray-700">
                      <td class="px-6 py-4 text-center font-medium text-gray-900 dark:text-white">{{ $barang->id_barang }}</td>
                      <td class="px-6 py-4 text-center">{{ $barang->kategori }}</td>
                      <td class="px-6 py-4 text-center">{{ $barang->nama_barang }}</td>
                      <td class="px-6 py-4 text-center">{{ number_format($barang->harga, 2) }}</td>
                      <td class="px-6 py-4 text-center">{{ $barang->stok }}</td>
                      <td class="px-6 py-4 text-center">{{ $barang->supplier }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div> 
    </div>
</body>
</html>