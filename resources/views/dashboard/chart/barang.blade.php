<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Dashboard</title>

<body class="bg-hitam">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Konten Utama -->
        <main class="flex-1 p-8 sm:ml-64">
            <div class="flex items-center justify-between mb-[60px]">
                <h2 class="text-2xl text-putih font-semibold flex items-center">
                    Selamat Datang, Masadmin🖐️
                </h2>
                <img class="w-12 h-12 rounded-full object-cover" src="{{ asset('image/foto profil.jpeg') }}" alt="fotoadmin">
            </div>            

            <h2 class="text-2xl text-putih font-semibold mb-4 font-display">Statistik Barang & Supplier</h2>

            <div class="flex flex-row justify-between">
                <!-- Doughnut Chart -->
                <div class="w-1/2 max-w-[480px] bg-hitammuda border-2 border-hitamsoft p-6 rounded-3xl"> <!-- Menambahkan max-width -->
                    <canvas id="doughnutChart" class="w-full h-full"></canvas>
                    <!-- Menggunakan w-full untuk mengatur lebar secara responsif -->
                </div>

                <!-- Pie Chart -->
                <div class="w-1/2 max-w-[480px] bg-hitammuda border-2 border-hitamsoft p-6 rounded-3xl"> <!-- Menambahkan max-width -->
                    <canvas id="pieChart" class="w-full h-full"></canvas>
                    <!-- Menggunakan w-full untuk mengatur lebar secara responsif -->
                </div>
            </div>

            <div class="mt-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl text-putih font-semibold font-display mb-4">Table Barang & Supplier</h2>
                    <nav class="flex space-x-4 text-putih mb-4">
                        <a href="{{ route('chart.barang') }}"
                            class="text-center font-normal text-lg rounded-full px-4 py-2 hover:underline transition-all">
                            Barang
                        </a>
                        <a href="{{ route('chart.suplier') }}"
                            class="text-center font-normal text-lg rounded-full px-4 py-2 hover:underline transition-all">
                            Suplier
                        </a>
                    </nav>
                </div>                

                {{-- Menambahkan margin-top untuk jarak antara navbar dan tabel --}}
                <div>
                    @include('layouts.tablebarang')
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const jumlahData = @json([$jumlahBarang, $jumlahSupplier]);

            // Doughnut Chart
            new Chart(document.getElementById('doughnutChart').getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: ['Barang', 'Supplier'],
                    datasets: [{
                        label: 'Jumlah',
                        data: jumlahData,
                        backgroundColor: ['#F1ABA8', '#645CBD'], // Warna chart1 dan chart2
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true
                }
            });


            // Pie Chart
            new Chart(document.getElementById('pieChart').getContext('2d'), {
                type: 'pie', // Ganti menjadi pie chart
                data: {
                    labels: ['Barang', 'Supplier'],
                    datasets: [{
                        label: 'Jumlah',
                        data: jumlahData,
                        backgroundColor: ['#F1ABA8', '#645CBD'],
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true // Menjaga aspek rasio
                }
            });
        });
    </script>
</body>

</html>
