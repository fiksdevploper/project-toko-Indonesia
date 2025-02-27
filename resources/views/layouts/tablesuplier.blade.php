<div class="relative overflow-x-auto rounded-2xl">
    <table class="w-full text-sm text-left rtl:text-right text-putih">
        <thead class="text-xs uppercase bg-hitammuda">
            <tr>
                <th scope="col" class="px-6 py-3">ID Supplier</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Alamat</th>
                <th scope="col" class="px-6 py-3">Kota</th>
                <th scope="col" class="px-6 py-3">Telepon</th>
            </tr>
        </thead>

        <tbody class="bg-hitamsoft">
            @foreach ($suppliers as $supplier)
                <tr>
                    <th scope="row" class="px-6 py-4 font-semibold text-putih whitespace-nowrap">
                        {{ $supplier->id_suplier }}
                    </th>
                    <td class="px-6 py-4">{{ $supplier->nama_suplier }}</td>
                    <td class="px-6 py-4">{{ $supplier->alamat }}</td>
                    <td class="px-6 py-4">{{ $supplier->kota }}</td>
                    <td class="px-6 py-4">{{ $supplier->no_telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>