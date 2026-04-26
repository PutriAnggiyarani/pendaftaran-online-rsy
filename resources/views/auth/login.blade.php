<x-guest-layout>
    <!-- Logo & Header -->
    <div class="flex flex-col items-center justify-center mb-8">
        <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-[#6bc693] to-[#4ebde1] flex items-center justify-center mb-4 shadow-lg">
            <svg class="w-8 h-8 text-white fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
        </div>
        <h1 class="text-3xl font-extrabold text-[#1f2937] tracking-tight">RS CINTA</h1>
        <p class="text-[#64748b] text-sm mt-1">Selamat Datang di Sistem Registrasi Pasien</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.06)] p-8">
        <div class="text-center mb-6">
            <h2 class="text-lg font-bold text-[#1f2937]">Masuk ke Akun Anda</h2>
            <p class="text-[#64748b] text-sm mt-1">Gunakan NIK atau No RM untuk masuk</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address (Label NIK/No RM) -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-[#334155] mb-2">NIK / No RM</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input id="email" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]" type="email" name="email" value="pasien@rscinta.com" placeholder="Masukkan NIK atau No RM" required autofocus autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold text-[#334155] mb-2">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="password" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]" type="password" name="password" value="password123" placeholder="Masukkan password" required autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-[#4ebde1] hover:bg-[#3baacb] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4ebde1] transition-colors">
                Masuk
            </button>
        </form>

        <!-- Divider -->
        <div class="relative flex py-6 items-center">
            <div class="flex-grow border-t border-gray-100"></div>
            <span class="flex-shrink-0 mx-4 text-gray-400 text-xs">Belum punya akun?</span>
            <div class="flex-grow border-t border-gray-100"></div>
        </div>

        <!-- Additional Buttons -->
        <div class="flex flex-col gap-3">
            <a href="#" class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-[#81c784] hover:bg-[#6ab36d] transition-colors">
                Daftar Online
            </a>
            <a href="#" class="w-full flex justify-center py-2.5 px-4 border-2 border-[#4ebde1] rounded-xl text-sm font-bold text-[#4ebde1] bg-white hover:bg-[#f0f8fa] transition-colors">
                Daftar On Site
            </a>
        </div>
    </div>

    <!-- Bottom Link -->
    <div class="mt-8 text-center">
        <a href="#" class="text-sm text-gray-500 hover:text-gray-700 underline font-medium">Akses Admin</a>
    </div>
</x-guest-layout>
