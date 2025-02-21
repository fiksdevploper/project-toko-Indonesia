<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Pengguna</title>

<body class="bg-hitam">
    <div class="p-4">
        <nav class="bg-biru rounded-xl">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center">
                        <span class="font-semibold text-putih text-2xl">☀️Sunshine</span>
                    </div>

                    <div class="flex items-center space-x-3">
                        <form action="{{ route('pengguna') }}" method="GET"
                            class="relative text-putih flex items-center">
                            <div class="absolute left-3">
                                <svg class="w-5 h-5 text-putih" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 19a8 8 0 100-16 8 8 0 000 16zM21 21l-4.35-4.35" />
                                </svg>
                            </div>
                            <input type="text" name="search" placeholder="Cari Barang..."
                                class="px-4 py-2 pl-10 bg-birumuda text-putih border rounded-2xl placeholder:text-putih"
                                value="{{ request('search') }}" />
                        </form>

                        <a href="{{ route('admin.login') }}"
                            class="py-2 px-4 gap-1 flex items-center text-putih font-semibold bg-birumuda rounded-2xl group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-putih">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                            </svg>
                            <span class="text-putih">Masuk</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4 mt-8">
        <h1 class="text-2xl font-bold text-putih mb-4">Daftar Barang</h1>
        <!-- Konten lainnya -->
        @include('layouts.tablebarang')
    </div>
</body>

</html>
