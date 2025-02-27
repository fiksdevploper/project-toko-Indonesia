<div class="relative overflow-x-auto rounded-2xl">
    <table class="w-full text-sm text-left text-putih">
        <thead class="text-xs uppercase bg-hitammuda">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">ID Barang</th>
                <th scope="col" class="px-6 py-3 text-center">Kategori</th>
                <th scope="col" class="px-6 py-3 text-center">Nama Barang</th>
                <th scope="col" class="px-6 py-3 text-center">Harga</th>
                <th scope="col" class="px-6 py-3 text-center">Stok</th>
                <th scope="col" class="px-6 py-3 text-center">Supplier</th>
            </tr>
        </thead>

        <tbody class="bg-hitamsoft">
            @foreach ($barangs as $barang)
                <tr>
                    <td class="px-6 py-4 text-center font-semibold text-white">
                        {{ $barang->id_barang }}</td>
                    <td class="px-6 py-4 text-center">{{ $barang->kategori }}</td>
                    <td class="px-6 py-4 text-center">{{ $barang->nama_barang }}</td>
                    <td class="px-6 py-4">{{ 'Rp ' . number_format($barang->harga, 2, ',', '.') }}</td>
                    <td class="px-6 py-4 text-center">{{ $barang->stok }}</td>
                    <td class="px-6 py-4 text-center">{{ $barang->supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>