<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Dashboard</title>

<body class="bg-hitam">
    @include('layouts.sidebar')
    <div class="flex-1 p-8 space-y-6 sm:ml-64">
        <h1 class="text-2xl text-putih font-bold mb-4 text-start">To-Do List & Kalender</h1>

        <!-- Grid untuk To-Do List dan Kalender -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Bagian To-Do List -->
            <div class="bg-hitammuda w-full p-6 rounded-2xl min-h-[300px]">
                <h2 class="text-xl font-semibold text-putih mb-4">Todolist</h2>
                <div class="flex flex-wrap gap-3 mb-4">
                    <input type="text" id="taskInput" placeholder="Tambah task baru..." class="flex-1 p-2 bg-hitamsoft text-white rounded-lg">
                    <button onclick="addTask()" class="px-4 py-2 bg-biru text-white rounded-lg relative group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg> 
                        <span class="absolute top-0 right-full mr-2 bg-hitamsoft text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Tambah Task
                        </span>
                    </button>
                </div>
                <ul id="taskList" class="space-y-2 text-putih overflow-auto max-h-[200px]"></ul>
            </div>

            <!-- Bagian Kalender -->
            <div class="bg-hitammuda w-full p-6 rounded-2xl min-h-[300px]">
                <h2 class="text-xl font-semibold text-putih mb-4">Kalender</h2>
                
                <!-- Header Kalender -->
                <div class="flex justify-between items-center mb-4">
                    <button onclick="prevMonth()" class="text-gray-400 hover:text-gray-200">‹</button>
                    <span id="currentMonthYear" class="text-lg font-semibold text-putih">Oktober 2023</span>
                    <button onclick="nextMonth()" class="text-gray-400 hover:text-gray-200">›</button>
                </div>

                <!-- Grid Hari -->
                <div class="grid grid-cols-7 gap-2 text-center text-gray-400 font-medium mb-2">
                    <div>Sen</div>
                    <div>Sel</div>
                    <div>Rab</div>
                    <div>Kam</div>
                    <div>Jum</div>
                    <div>Sab</div>
                    <div>Min</div>
                </div>

                <!-- Tanggal -->
                <div id="calendarDays" class="grid grid-cols-7 gap-2"></div>

                <!-- Form Tambah Jadwal -->
                <div class="mt-6">
                    <div class="flex items-center justify-between mt-3 mb-2">
                        <h3 class="text-lg font-semibold text-putih mb-2">Tambah Jadwal</h3>
                        <button onclick="addSchedule()" class="px-4 py-2 bg-biru text-white rounded-lg relative group">
                            <span class="absolute top-0 right-full mr-2 bg-hitamsoft text-white text-sm px-4 py-2 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Tambah Jadwal
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <input type="date" id="scheduleDate" class="p-2 bg-hitamsoft text-white rounded-lg">
                        <input type="text" id="scheduleInput" placeholder="Deskripsi jadwal" class="flex-1 p-2 bg-hitamsoft text-white rounded-lg">
                    </div>
                </div>                

                <!-- Daftar Jadwal -->
                <div id="scheduleList" class="mt-4 space-y-2 text-putih overflow-auto max-h-[200px]"></div>
            </div>
        </div>
    </div>

    @include('layouts.js')
</body>
</html>