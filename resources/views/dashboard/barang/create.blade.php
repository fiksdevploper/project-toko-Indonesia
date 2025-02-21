<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Dashboard</title>
<body class="bg-hitam">

    
    <div class="min-h-screen flex">
        @include('layouts.sidebar')

        <div class="flex-1 p-8 sm:ml-64">
            <div class="max-w-lg mx-auto bg-hitammuda p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-putih mb-4">Tambah Barang</h2>
                <form action="{{ url('/dashboard/barang') }}" method="POST">
                    @csrf
                
                    <div class="mb-4">
                        <label for="id_barang" class="block text-sm font-medium text-putih">ID Barang</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                </svg>                                  
                            </div>
                            <input type="text" id="id_barang" name="id_barang" required
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('id_barang')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-putih">Kategori</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>                                  
                            </div>
                            <input type="text" id="kategori" name="kategori" required
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('kategori')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="nama_barang" class="block text-sm font-medium text-putih">Nama Barang</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>                                  
                            </div>
                            <input type="text" id="nama_barang" name="nama_barang" required
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('nama_barang')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="harga" class="block text-sm font-medium text-putih">Harga</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                </svg>                                  
                            </div>
                            <input type="number" id="harga" name="harga" required step="0.01"
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('harga')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="stok" class="block text-sm font-medium text-putih">Stok</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                                </svg>                                  
                            </div>
                            <input type="number" id="stok" name="stok" required
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('stok')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="supplier" class="block text-sm font-medium text-putih">Supplier</label>
                        <div class="mt-1 relative rounded-lg shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>  
                            </div>
                            <input type="text" id="supplier" name="supplier" required
                                class="block w-full pl-10 px-4 py-2 bg-hitamsoft text-putih rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('supplier')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <button type="submit"
                        class="w-full px-6 py-3 bg-biru text-white font-semibold rounded-lg shadow-md transition duration-300">
                        <i class="fas fa-save mr-2"></i>Simpan Barang
                    </button>
                </form>
            </div>
        </div>              
    </div>
</body>
</html>