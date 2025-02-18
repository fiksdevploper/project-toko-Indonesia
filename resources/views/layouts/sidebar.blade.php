<div class="bg-gray-800 text-white w-64 px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    <nav>
        <ul>
            <li class="mb-4">
                <a href="{{ route('barang') }}" class="flex items-center hover:bg-gray-700 p-2 rounded-lg transition-colors">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    Barang
                </a>
            </li>

            <li class="mb-4">
                <a href="{{ route('suppliers') }}" class="flex items-center hover:bg-gray-700 p-2 rounded-lg transition-colors">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Supplier
                </a>
            </li>
        </ul>
    </nav>
</div>