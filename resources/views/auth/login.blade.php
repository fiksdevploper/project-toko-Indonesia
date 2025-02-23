<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Auth</title>
<body class="bg-hitam">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-hitammuda p-8 rounded-2xl border-2 border-hitamsoft w-96">
            <div class="flex flex-col items-center justify-center mb-5">
                <h2 class="text-2xl text-center font-semibold font-sans text-putih mb-1">Login</h2>
                <span class="font-sm text-gray-400">hello selamat data silahkan login</span>
            </div>
            @if (session('error'))
                <div class="mb-4 p-3 bg-red-500 text-white rounded-xl">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500 text-white rounded-xl">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <input class="w-full px-3 py-2 bg-hitamsoft text-putih rounded-lg pl-10 focus:ring-2 focus:ring-gray-600 focus:outline-none" 
                        type="email" name="email" placeholder="Masukkan Email Anda">
                </div>
            
                <div class="mb-6 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <input class="w-full px-3 py-2 bg-hitamsoft text-putih rounded-lg pl-10 focus:ring-2 focus:ring-gray-600 focus:outline-none"
                        type="password" name="password" placeholder="Masukkan Password Anda">
                </div>
            
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm text-gray-200">Ingatkan saya</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">
                            Lupa Password?
                        </a>
                    @endif
                </div>
            
                <button class="w-full bg-biru text-putih py-2.5 rounded-lg hover:bg-blue-600 transition duration-300" type="submit">
                    Login
                </button>
            </form>            
        </div>
    </div>
</body>

</html>
