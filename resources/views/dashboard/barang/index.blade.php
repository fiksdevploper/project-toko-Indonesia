<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Dashboard</title>

<body class="bg-hitam">
    {{-- sidebar --}}
    <div class="min-h-screen flex">
        @include('layouts.sidebar')

        {{-- table content --}}
        <div class="flex-1 p-8 space-y-6 sm:ml-64">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold text-putih font-display">Daftar Barang</h2>
                <a href="{{ url('/dashboard/barang/create') }}" class="px-6 py-3 bg-biru text-white font-semibold rounded-2xl flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Tambah Barang</span>
                </a>
            </div>
        
            <div class="relative overflow-x-auto shadow-md sm:rounded-2xl">
                <table class="w-full text-xs text-left text-putih">
                    <thead class="text-xs text-putih uppercase bg-hitammuda">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID Barang</th>
                            <th scope="col" class="px-6 py-3">Kategori</th>
                            <th scope="col" class="px-6 py-3">Nama Barang</th>
                            <th scope="col" class="px-6 py-3">Harga</th>
                            <th scope="col" class="px-6 py-3">Stok</th>
                            <th scope="col" class="px-6 py-3">Supplier</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody class="bg-hitamsoft text-putih">
                        @foreach($barangs as $barang)
                        <tr>
                            <td class="px-6 py-4 font-medium text-putih">{{ $barang->id_barang }}</td>
                            <td class="px-6 py-4">{{ $barang->kategori }}</td>
                            <td class="px-6 py-4">{{ $barang->nama_barang }}</td>
                            <td class="px-6 py-4">{{ 'Rp ' . number_format($barang->harga, 2, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ $barang->stok }}</td>
                            <td class="px-6 py-4">{{ $barang->supplier }}</td>
                            
                            <td class="px-6 py-4 flex justify-center space-x-2">
                                <a href="{{ url('/dashboard/barang/'.$barang->id.'/edit') }}" class="text-blue-600 hover:text-blue-900 p-2 rounded-md hover:bg-blue-100 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </a>
                                
                                <form id="delete-form-{{ $barang->id }}" action="{{ url('/dashboard/barang/'.$barang->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete({{ $barang->id }})" class="text-red-600 hover:text-red-900 p-2 rounded-md hover:bg-red-100 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>              
    </div>
</body>
<script>
    function confirmDelete(barangId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Apakah Anda ingin menghapus data ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ff4444',   
            cancelButtonColor: '#4163CF',   
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Tidak',
            background: '#1E1C29', 
            color: '#ffffff',              
            iconColor: '#708DEF',          
            customClass: {
                popup: 'dark-swal-popup',
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + barangId).submit();
            }
        });
    }
</script>
</html>
