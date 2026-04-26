<x-guest-layout>
    <!-- Logo & Header -->
    <div class="flex flex-col items-center justify-center mb-8">
        <img src="{{ asset('build/assets/image/logors.png') }}" alt="Logo RS Cinta" class="w-20 h-20 object-contain mb-4">
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
