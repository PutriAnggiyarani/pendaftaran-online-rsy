<x-guest-layout>
    <!-- Logo & Header -->
    <div class="flex flex-col items-center justify-center mb-8">
        <img src="{{ asset('build/assets/image/logors.png') }}" alt="Logo RS Cinta"
            class="w-20 h-20 object-contain mb-4">
        <h1 class="text-3xl font-extrabold text-[#1f2937] tracking-tight">RS DR M YASIN BONE</h1>
        <p class="text-[#64748b] text-sm mt-1">Sistem Registrasi Pasien</p>
    </div>

    <!-- Register Card -->
    <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.06)] p-8 max-w-2xl mx-auto w-full">
        <div class="text-center mb-6">
            <h2 class="text-lg font-bold text-[#1f2937]">Daftar Akun Baru</h2>
            <p class="text-[#64748b] text-sm mt-1">Lengkapi form berikut untuk mendaftar</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Grid Layout for Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Nama Lengkap -->
                <div class="col-span-1 md:col-span-2">
                    <label for="name" class="block text-sm font-semibold text-[#334155] mb-2">Nama Lengkap</label>
                    <input id="name" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- NIK -->
                <div>
                    <label for="nik" class="block text-sm font-semibold text-[#334155] mb-2">NIK</label>
                    <input id="nik" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="text" name="nik" :value="old('nik')" required />
                    <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-[#334155] mb-2">Email</label>
                    <input id="email" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-semibold text-[#334155] mb-2">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label for="tanggal_lahir" class="block text-sm font-semibold text-[#334155] mb-2">Tanggal Lahir <span id="usia-label" class="text-xs font-normal text-gray-500"></span></label>
                    <input id="tanggal_lahir" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required onchange="calculateAge()" />
                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                </div>

                <!-- Golongan Darah -->
                <div>
                    <label for="golongan_darah" class="block text-sm font-semibold text-[#334155] mb-2">Golongan Darah</label>
                    <select id="golongan_darah" name="golongan_darah" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]" required>
                        <option value="">Pilih Gol. Darah</option>
                        <option value="A" {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                        <option value="AB" {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                        <option value="O" {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                    <x-input-error :messages="$errors->get('golongan_darah')" class="mt-2" />
                </div>

                <!-- No Handphone -->
                <div>
                    <label for="no_handphone" class="block text-sm font-semibold text-[#334155] mb-2">No. Handphone</label>
                    <input id="no_handphone" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="text" name="no_handphone" :value="old('no_handphone')" required />
                    <x-input-error :messages="$errors->get('no_handphone')" class="mt-2" />
                </div>

                <!-- Alamat -->
                <div class="col-span-1 md:col-span-2">
                    <label for="alamat" class="block text-sm font-semibold text-[#334155] mb-2">Alamat Lengkap</label>
                    <textarea id="alamat" name="alamat" rows="2" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]" required>{{ old('alamat') }}</textarea>
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-[#334155] mb-2">Password</label>
                    <input id="password" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-[#334155] mb-2">Konfirmasi Password</label>
                    <input id="password_confirmation" class="block w-full px-3 py-2.5 border border-gray-200 rounded-xl text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <!-- Register Button -->
            <div class="mt-8">
                <button type="submit"
                    class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-[#4ebde1] hover:bg-[#3baacb] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#4ebde1] transition-colors">
                    Daftar Sekarang
                </button>
            </div>
        </form>

        <!-- Divider -->
        <div class="relative flex py-6 items-center">
            <div class="flex-grow border-t border-gray-100"></div>
            <span class="flex-shrink-0 mx-4 text-gray-400 text-xs">Sudah punya akun?</span>
            <div class="flex-grow border-t border-gray-100"></div>
        </div>

        <!-- Login Link -->
        <div class="flex justify-center">
            <a href="{{ route('login') }}" class="text-sm font-bold text-[#4ebde1] hover:text-[#3baacb] underline">
                Masuk ke akun Anda
            </a>
        </div>
    </div>

    <!-- Script to calculate age -->
    <script>
        function calculateAge() {
            const birthDateStr = document.getElementById('tanggal_lahir').value;
            if (!birthDateStr) {
                document.getElementById('usia-label').textContent = '';
                return;
            }
            
            const birthDate = new Date(birthDateStr);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();
            
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            document.getElementById('usia-label').textContent = '(Usia: ' + age + ' tahun)';
        }

        // Run on load in case there's old value
        window.onload = function() {
            calculateAge();
        }
    </script>
</x-guest-layout>
