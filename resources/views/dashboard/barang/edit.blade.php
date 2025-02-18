<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="bg-gray-200">
    
    <div class="min-h-screen flex">
        @include('layouts.sidebar')
        <div class="flex-1 p-8">
            <h2 class="text-xl font-bold mb-4 text-black">Edit Barang</h2>
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
            
                <div class="mb-4">
                    <label for="id_barang" class="block text-sm font-medium text-gray-800">ID Barang</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>  
                        </div>
                        <input type="text" name="id_barang" id="id_barang" value="{{ $barang->id_barang }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('id_barang') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-800">Kategori</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>                              
                        </div>
                        <input type="text" name="kategori" id="kategori" value="{{ $barang->kategori }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('kategori') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-4">
                    <label for="nama_barang" class="block text-sm font-medium text-gray-800">Nama Barang</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>                              
                        </div>
                        <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('nama_barang') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-800">Harga</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>                                                           
                        </div>
                        <input type="number" name="harga" id="harga" value="{{ $barang->harga }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('harga') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-4">
                    <label for="stok" class="block text-sm font-medium text-gray-800">Stok</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>                              
                        </div>
                        <input type="number" name="stok" id="stok" value="{{ $barang->stok }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('stok') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="mb-4">
                    <label for="supplier" class="block text-sm font-medium text-gray-800">Supplier</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>                              
                        </div>
                        <input type="text" name="supplier" id="supplier" value="{{ $barang->supplier }}" 
                        class="mt-1 p-2 w-full border border-gray-200 rounded-md bg-white text-black pl-10" required>
                    </div>
                    @error('supplier') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">
                        <i class="fas fa-save mr-2"></i>Update Barang
                    </button>
                </div>
            </form>
        </div>        
    </div>
</body>
</html>