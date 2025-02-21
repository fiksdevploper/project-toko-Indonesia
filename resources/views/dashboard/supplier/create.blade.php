<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Dashboard</title>
<body class="bg-hitam">
    <div class="min-h-screen flex">
        @include('layouts.sidebar')
        
        {{-- form edit --}}
        <div class="flex-1 p-8 sm:ml-64">
            <div class="max-w-lg mx-auto bg-hitammuda p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-putih mb-4">Tambah Supplier</h2>
                
                <form action="{{ url('/dashboard/suppliers') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4 relative">
                        <label for="id_suplier" class="block text-sm font-medium text-putih">ID Supplier</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>                              
                            <input type="text" name="id_suplier" id="id_suplier" class="mt-1 block w-full px-4 py-2 bg-hitamsoft text-white border rounded-md shadow-sm pl-10" required>
                        </div>
                    </div>
                
                    <div class="mb-4 relative">
                        <label for="nama_suplier" class="block text-sm font-medium text-putih">Nama Supplier</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>                              
                            <input type="text" name="nama_suplier" id="nama_suplier" class="mt-1 block w-full px-4 py-2 bg-hitamsoft text-white border rounded-md shadow-sm pl-10" required>
                        </div>
                    </div>
                
                    <div class="mb-4 relative">
                        <label for="alamat" class="block text-sm font-medium text-putih">Alamat</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>                              
                            <input type="text" name="alamat" id="alamat" class="mt-1 block w-full px-4 py-2 bg-hitamsoft text-white border rounded-md shadow-sm pl-10" required>
                        </div>
                    </div>
                
                    <div class="mb-4 relative">
                        <label for="kota" class="block text-sm font-medium text-putih">Kota</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5M3 15V4.5" />
                            </svg>                              
                            <input type="text" name="kota" id="kota" class="mt-1 block w-full px-4 py-2 bg-hitamsoft text-white border rounded-md shadow-sm pl-10" required>
                        </div>
                    </div>
                
                    <div class="mb-4 relative">
                        <label for="no_telepon" class="block text-sm font-medium text-putih">Nomor Telepon</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                            </svg>                              
                            <input type="number" name="no_telepon" id="no_telepon" class="mt-1 block w-full px-4 py-2 bg-hitamsoft text-white border rounded-md shadow-sm pl-10" required>
                        </div>
                    </div>
                
                    <div class="mt-6 flex justify-end">
                        <button type="submit" class="px-6 py-3 w-full bg-biru text-white font-semibold rounded-lg shadow-md transition duration-300">
                            Tambah Supplier
                        </button>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</body>
</html>