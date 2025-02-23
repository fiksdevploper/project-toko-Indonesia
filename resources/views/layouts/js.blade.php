<script>
    document.addEventListener("DOMContentLoaded", function() {
        loadTasks();
        loadSchedules();
        renderCalendar();
    });

    // =====================
    // TASK LIST FUNCTION
    // =====================
    function addTask() {
        const taskInput = document.getElementById("taskInput");
        const taskList = document.getElementById("taskList");

        if (taskInput.value.trim() === "") return;

        const task = {
            text: taskInput.value,
            completed: false,
        };

        const tasks = getTasks();
        tasks.push(task);
        saveTasks(tasks);

        renderTasks();
        taskInput.value = "";
    }

    function renderTasks() {
        const taskList = document.getElementById("taskList");
        taskList.innerHTML = "";

        const tasks = getTasks();

        tasks.forEach((task, index) => {
            const li = document.createElement("li");
            li.className = "flex items-center justify-between p-4 bg-hitamsoft rounded-lg shadow-md";

            li.innerHTML = `
        <div class="flex items-center space-x-2">
            <input type="checkbox" class="w-5 h-5 accent-green-500 cursor-pointer" onclick="toggleTask(${index})" ${task.completed ? "checked" : ""}>
            <span class="task-text ${task.completed ? "line-through text-gray-400" : ""}">${task.text}</span>
        </div>
        <div class="flex space-x-2">
            <button onclick="editTask(${index})" class="text-blue-400 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </button>

            <button onclick="deleteTask(${index})" class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </div>
        `;

            taskList.appendChild(li);
        });
    }

    function toggleTask(index) {
        const tasks = getTasks();
        tasks[index].completed = !tasks[index].completed;
        saveTasks(tasks);
        renderTasks();
    }

    function editTask(index) {
        const tasks = getTasks();

        Swal.fire({
            title: "Edit Tugas",
            input: "text",
            inputValue: tasks[index].text,
            showCancelButton: true,
            confirmButtonText: "Simpan",
            cancelButtonText: "Batal",
            inputValidator: (value) => {
                if (!value.trim()) {
                    return "Teks tugas tidak boleh kosong!";
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                tasks[index].text = result.value;
                saveTasks(tasks);
                renderTasks();
                Swal.fire("Berhasil!", "Tugas telah diperbarui.", "success");
            }
        });
    }

    function deleteTask(index) {
        Swal.fire({
            title: "Apakah kamu yakin?",
            text: "Tugas ini akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                const tasks = getTasks();
                tasks.splice(index, 1);
                saveTasks(tasks);
                renderTasks();
                Swal.fire("Dihapus!", "Tugas telah dihapus.", "success");
            }
        });
    }

    function getTasks() {
        return JSON.parse(localStorage.getItem("tasks")) || [];
    }

    function saveTasks(tasks) {
        localStorage.setItem("tasks", JSON.stringify(tasks));
    }


    // =====================
    // SCHEDULE FUNCTION
    // =====================
    function addSchedule() {
        const scheduleDate = document.getElementById("scheduleDate");
        const scheduleInput = document.getElementById("scheduleInput");

        if (scheduleDate.value === "" || scheduleInput.value.trim() === "") return;

        const schedule = {
            date: scheduleDate.value,
            text: scheduleInput.value,
            completed: false,
        };

        const schedules = getSchedules();
        schedules.push(schedule);
        saveSchedules(schedules);

        renderSchedules();
        scheduleDate.value = "";
        scheduleInput.value = "";
    }

    function renderSchedules() {
        const scheduleList = document.getElementById("scheduleList");
        scheduleList.innerHTML = "";

        const schedules = getSchedules();

        schedules.forEach((schedule, index) => {
            const li = document.createElement("li");
            li.className = "flex items-center justify-between p-4 bg-hitamsoft rounded-lg shadow-md";

            li.innerHTML = `
        <div class="flex items-center gap-3">
            <input type="checkbox" class="w-5 h-5 accent-green-500 cursor-pointer" onchange="toggleComplete(${index})" ${schedule.completed ? "checked" : ""}>
            <span class="${schedule.completed ? 'line-through text-gray-500' : ''}" id="text-${index}">${schedule.date}: ${schedule.text}</span>
        </div>
        <div class="flex gap-2">
            <button onclick="editSchedule(${index})" class="text-blue-400 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </button>

            <button onclick="deleteSchedule(${index})" class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
        </div>`;

            scheduleList.appendChild(li);
        });
    }

    function editSchedule(index) {
        const schedules = getSchedules();
        Swal.fire({
            title: "Edit Jadwal",
            input: "text",
            inputValue: schedules[index].text,
            showCancelButton: true,
            confirmButtonText: "Simpan",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                schedules[index].text = result.value;
                saveSchedules(schedules);
                renderSchedules();
                Swal.fire("Berhasil!", "Jadwal telah diperbarui.", "success");
            }
        });
    }

    function toggleComplete(index) {
        const schedules = getSchedules();
        schedules[index].completed = !schedules[index].completed;
        saveSchedules(schedules);
        renderSchedules();
    }

    function deleteSchedule(index) {
        Swal.fire({
            title: "Yakin ingin menghapus?",
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                const schedules = getSchedules();
                schedules.splice(index, 1);
                saveSchedules(schedules);
                renderSchedules();
                Swal.fire("Terhapus!", "Jadwal telah dihapus.", "success");
            }
        });
    }

    function getSchedules() {
        return JSON.parse(localStorage.getItem("schedules")) || [];
    }

    function saveSchedules(schedules) {
        localStorage.setItem("schedules", JSON.stringify(schedules));
    }

    // =====================
    // LOCAL STORAGE FUNCTIONS
    // =====================
    function getTasks() {
        return JSON.parse(localStorage.getItem("tasks")) || [];
    }

    function saveTasks(tasks) {
        localStorage.setItem("tasks", JSON.stringify(tasks));
    }

    function loadTasks() {
        renderTasks();
    }

    function getSchedules() {
        return JSON.parse(localStorage.getItem("schedules")) || [];
    }

    function saveSchedules(schedules) {
        localStorage.setItem("schedules", JSON.stringify(schedules));
    }

    function loadSchedules() {
        renderSchedules();
    }

    // =====================
    // CALENDAR FUNCTION
    // =====================
    let currentDate = new Date();

    function renderCalendar() {
        const calendarDays = document.getElementById("calendarDays");
        const currentMonthYear = document.getElementById("currentMonthYear");
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        currentMonthYear.textContent = new Intl.DateTimeFormat('id-ID', {
            month: "long",
            year: "numeric",
        }).format(currentDate);

        calendarDays.innerHTML = "";

        const firstDay = new Date(year, month, 1).getDay();
        const lastDay = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            calendarDays.innerHTML += `<div class="p-2"></div>`;
        }

        for (let day = 1; day <= lastDay; day++) {
            const date = new Date(year, month, day);
            const isToday = date.toDateString() === new Date().toDateString();
            calendarDays.innerHTML += `
        <div class="p-2 text-center ${isToday ? "bg-biru text-putih rounded-2xl font-semibold" : "text-gray-300 hover:bg-hitamsoft hover:rounded-2xl"}">
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

    function updateClock() {
        const now = new Date();

        // Ambil jam dan menit
        let hours = now.getHours().toString().padStart(2, '0');
        let minutes = now.getMinutes().toString().padStart(2, '0');

        // Ambil tanggal, bulan, dan tahun
        let day = now.getDate().toString().padStart(2, '0');
        let monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        let month = monthNames[now.getMonth()];
        let year = now.getFullYear();

        // Update jam
        document.getElementById("digitalClock").textContent = `${hours}:${minutes}`;

        // Update tanggal
        document.getElementById("dateDisplay").textContent = `${day} ${month} ${year}`;
    }

    // Update jam dan tanggal setiap detik
    setInterval(updateClock, 1000);

    // Panggil fungsi pertama kali agar tidak delay
    updateClock();
</script>
