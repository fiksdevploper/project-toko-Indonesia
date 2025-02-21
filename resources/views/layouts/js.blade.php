<script>
    // Fungsi untuk To-Do List
    function addTask() {
        const taskInput = document.getElementById("taskInput");
        const taskList = document.getElementById("taskList");

        if (taskInput.value.trim() === "") return;

        const li = document.createElement("li");
        li.className = "flex items-center justify-between p-4 bg-gray-700 rounded-lg shadow-md";

        li.innerHTML = `
            <div class="flex items-center space-x-2">
                <input type="checkbox" class="w-5 h-5 accent-green-500" onclick="toggleTask(this)">
                <span class="task-text">${taskInput.value}</span>
            </div>
            <div class="flex space-x-2">
                <button onclick="editTask(this)" class="text-blue-400 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </button>

                <button onclick="deleteTask(this)" class="text-red-400 hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        `;

        taskList.appendChild(li);
        taskInput.value = "";
    }

    function toggleTask(checkbox) {
        const text = checkbox.nextElementSibling;
        text.classList.toggle("line-through");
        text.classList.toggle("text-gray-400");
    }

    function editTask(button) {
        const textElement = button.parentElement.previousElementSibling.querySelector(".task-text");
        Swal.fire({
            title: 'Edit Tugas',
            input: 'text',
            inputValue: textElement.textContent,
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal',
            inputValidator: (value) => {
                if (!value.trim()) {
                    return 'Teks tidak boleh kosong';
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                textElement.textContent = result.value;
                Swal.fire('Tersimpan!', 'Tugas telah diperbarui.', 'success');
            }
        });
    }

    function deleteTask(button) {
        button.closest("li").remove();
    }

    // Fungsi untuk Kalender
    let currentDate = new Date();

    function renderCalendar() {
        const calendarDays = document.getElementById("calendarDays");
        const currentMonthYear = document.getElementById("currentMonthYear");
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        // Set judul bulan dan tahun
        currentMonthYear.textContent = new Intl.DateTimeFormat('id-ID', {
            month: 'long',
            year: 'numeric'
        }).format(currentDate);

        // Kosongkan kalender
        calendarDays.innerHTML = "";

        // Hitung hari pertama bulan ini
        const firstDay = new Date(year, month, 1).getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();

        // Tambahkan hari kosong untuk minggu pertama
        for (let i = 0; i < firstDay; i++) {
            calendarDays.innerHTML += `<div class="p-2"></div>`;
        }

        // Tambahkan tanggal
        for (let day = 1; day <= lastDay; day++) {
            const date = new Date(year, month, day);
            const isToday = date.toDateString() === new Date().toDateString();
            calendarDays.innerHTML += `
                <div class="p-2 text-center ${isToday ? 'bg-biru text-white rounded-full' : 'text-putih'}">
                    ${day}
                </div>
            `;
        }
    }

    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    }

    function nextMonth() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    }

    // Fungsi untuk Menambahkan Jadwal
    function addSchedule() {
        const scheduleDate = document.getElementById("scheduleDate");
        const scheduleInput = document.getElementById("scheduleInput");
        const scheduleList = document.getElementById("scheduleList");

        if (scheduleDate.value === "" || scheduleInput.value.trim() === "") return;

        const li = document.createElement("li");
        li.className = "flex items-center justify-between p-4 bg-gray-700 rounded-lg shadow-md";
        li.innerHTML = `
            <span>${scheduleDate.value}: ${scheduleInput.value}</span>
            <button onclick="deleteSchedule(this)" class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        `;

        scheduleList.appendChild(li);
        scheduleDate.value = "";
        scheduleInput.value = "";
    }

    function deleteSchedule(button) {
        button.closest("li").remove();
    }

    // Render kalender saat halaman dimuat
    renderCalendar();
</script>
