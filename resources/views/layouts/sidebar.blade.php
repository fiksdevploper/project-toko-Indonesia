<div class="p-2">
    <div class="bg-biru fixed text-white w-64 px-4 py-6 z-30 rounded-t-2xl h-screen flex flex-col justify-between">
        <div>
            <h1 class="text-2xl font-semibold mb-4 text-center">☀️Sunshine</h1>
            <hr class="mb-4">
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="{{ route('chart.barang') }}"
                            class="flex items-center gap-2 hover:bg-birumuda p-2 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg>
                            <span class="font-semibold">Statistik</span>
                        </a>
                    </li>

                    <li class="mb-4">
                        <a href="{{ route('barang') }}"
                            class="flex items-center hover:bg-birumuda p-2 rounded-lg transition-colors">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span class="font-semibold">Barang</span>
                        </a>
                    </li>

                    <li class="mb-4">
                        <a href="{{ route('suppliers') }}"
                            class="flex items-center hover:bg-birumuda p-2 rounded-lg transition-colors">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="font-semibold">Suplier</span>
                        </a>
                    </li>

                    <li class="mb-4">
                        <a href="{{ route('todolist.admin') }}"
                            class="flex items-center hover:bg-birumuda p-2 rounded-lg transition-colors">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>                              
                            <span class="font-semibold">To-do list</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Navbar Profil Admin -->
        <div class="relative">
            <button onclick="toggleDropdown()"
                class="flex items-center space-x-2 w-full p-2 bg-birumuda rounded-lg border focus:outline-none">
                <img src="{{ asset('image/foto profil.jpeg') }}" alt="Admin Profile" class="w-10 h-10 rounded-full">
                <div class="flex flex-col items-start">
                    <div class="flex flex-row gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-200">
                            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                        </svg>                          
                        <span class="font-semibold text-lg">
                            masadmin
                        </span>
                    </div>
                    <span class="text-sm text-gray-200">masadmin@gmail.com</span>
                </div>
            </button>

            <div id="dropdown"
                class="hidden absolute bottom-14 right-0 bg-birumuda text-putih w-48 rounded-xl border border-putih overflow-hidden">
                <a href="#" class="block px-4 py-2 hover:underline">Profile</a>
                <a href="#" class="block px-4 py-2 hover:underline">Settings</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="block px-4 py-2 hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDropdown() {
        document.getElementById('dropdown').classList.toggle('hidden');
    }
</script>
