<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<title>Auth</title>
<body class="bg-hitam">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-hitammuda p-8 rounded-2xl border border-hitamsoft w-96">
            <h2 class="text-xl text-center font-medium text-putih mb-6">Login</h2>
            @if (session('error'))
                <div class="mb-4 p-3 bg-red-500 text-white rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500 text-white rounded-lg">
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
                    <input class="w-full px-3 py-2 bg-hitamsoft text-putih rounded-lg focus:outline-none pl-10" type="email"
                        name="email" placeholder="Masukan Email anda">
                </div>

                <div class="mb-6 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-putih">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <input class="w-full px-3 py-2 bg-hitamsoft text-putih rounded-lg focus:outline-none pl-10" type="password"
                        name="password" placeholder="Masukan Password anda">
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm text-gray-200">Remember me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">
                            Lupa Password?
                        </a>
                    @endif
                </div>

                <div class="mb-4">
                    <a href="{{ url('auth/github') }}"
                        class="w-full block bg-gray-900 text-white py-2.5 rounded-lg text-center mb-2">
                        <svg class="inline align-middle mr-2" width="24" height="24" viewBox="0 0 24 24"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.373 0 0 5.373 0 12c0 5.316 3.435 9.805 8.204 11.385.6.11.82-.254.82-.565 0-.278-.01-1.011-.018-2.224-3.341.724-4.042-1.61-4.042-1.61-.547-1.387-1.334-1.756-1.334-1.756-1.091-.744.082-.727.082-.727 1.205.085 1.838 1.238 1.838 1.238 1.07 1.884 2.807 1.342 3.492 1.027.108-.797.421-1.342.761-1.65-2.665-.315-5.466-1.332-5.466-5.93 0-1.31.469-2.382 1.236-3.222-.124-.303-.536-1.524.118-3.176 0 0 1.005-.323 3.292 1.23.958-.266 1.985-.4 3.005-.4 1.02.001 2.047.134 3.006.4 2.286-1.553 3.29-.99 3.29.99.654 1.652.243 2.871.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.616-5.479 5.921.43.372.818 1.104.818 2.224 0 1.604-.015 2.895-.015 3.29 0 .309.218.678.822.56C20.564 21.804 24 17.315 24 12c0-6.627-5.373-12-12-12z" />
                        </svg>
                        Login with GitHub
                    </a>
                </div>

                <button class="w-full bg-biru text-putih py-2.5 rounded-lg" type="submit">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>
