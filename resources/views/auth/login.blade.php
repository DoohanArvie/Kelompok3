<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="container mx-auto max-w-md mt-20 p-10 bg-white rounded-lg shadow-lg">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="font-bold text-3xl text-center mb-6 text-gray-700">Selamat Datang!</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input id="email" class="form-input w-full border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" class="form-input w-full border border-gray-300 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Lupa Password dan Simpan Login -->
            <div class="flex justify-between items-center mb-4">
                <div>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">Lupa Password?</a>
                </div>
                <div>
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded text-blue-500 border-gray-300 focus:ring-blue-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Simpan Login</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Masuk</button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-sm text-blue-600 hover:text-blue-800">Belum memiliki akun? Registrasi disini!</a>
        </div>
    </div>
