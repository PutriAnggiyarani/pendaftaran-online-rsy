<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran Pasien - RS CINTA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#f4f8fa] pb-12">
    
    <!-- Custom Header -->
    <header class="bg-white h-16 flex items-center px-4 sm:px-6 shadow-sm sticky top-0 z-50">
        <a href="{{ route('dashboard') }}" class="mr-4 text-gray-500 hover:text-gray-700 transition-colors">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>
        <div class="flex items-center gap-3">
            <img src="{{ asset('build/assets/image/logors.png') }}" alt="Logo RS Cinta" class="w-8 h-8 object-contain">
            <div>
                <h1 class="text-sm font-bold text-[#1f2937] leading-tight">Form Pendaftaran Pasien</h1>
                <p class="text-[10px] text-[#64748b]">RS CINTA</p>
            </div>
        </div>
    </header>

    <div class="max-w-4xl mx-auto px-4 mt-8">
        
        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl" role="alert">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            
            <!-- Data Pasien -->
            <div class="bg-white rounded-2xl mb-6 shadow-[0_2px_10px_rgb(0,0,0,0.02)] overflow-hidden">
                <div class="bg-[#f4fbf7] px-6 py-3 flex items-center gap-2 border-b border-green-50/50">
                    <svg class="w-4 h-4 text-red-500 transform -rotate-45" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-sm font-bold text-[#1f2937]">Data Pasien</h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div>
                            <label class="block text-xs font-semibold text-[#334155] mb-1.5">Nama Lengkap</label>
                            <input type="text" name="nama_pasien" value="{{ old('nama_pasien') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]">
                        </div>
                        
                        <!-- NIK -->
                        <div>
                            <label class="block text-xs font-semibold text-[#334155] mb-1.5">NIK</label>
                            <input type="text" name="nik" value="{{ old('nik') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]">
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <label class="block text-xs font-semibold text-[#334155] mb-1.5">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1] text-gray-500">
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="block text-xs font-semibold text-[#334155] mb-2">Jenis Kelamin</label>
                            <div class="flex items-center gap-6 mt-1">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="text-[#4ebde1] focus:ring-[#4ebde1] border-gray-300" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }} required>
                                    <span class="text-sm text-[#334155]">Laki-laki</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="text-[#4ebde1] focus:ring-[#4ebde1] border-gray-300" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} required>
                                    <span class="text-sm text-[#334155]">Perempuan</span>
                                </label>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="md:col-span-2">
                            <label class="block text-xs font-semibold text-[#334155] mb-1.5">Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]">
                        </div>

                        <!-- No HP -->
                        <div class="md:col-span-2">
                            <label class="block text-xs font-semibold text-[#334155] mb-1.5">No HP</label>
                            <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1]">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pilih Jenis Pendaftaran -->
            <div class="bg-white rounded-2xl mb-6 shadow-[0_2px_10px_rgb(0,0,0,0.02)] overflow-hidden">
                <div class="bg-[#f4fbf7] px-6 py-3 flex items-center gap-2 border-b border-green-50/50">
                    <svg class="w-4 h-4 text-red-500 transform -rotate-45" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-sm font-bold text-[#1f2937]">Pilih Jenis Pendaftaran</h2>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-8">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="jenis_pendaftaran" value="Online" class="text-[#4ebde1] focus:ring-[#4ebde1] border-gray-300" {{ old('jenis_pendaftaran', 'Online') == 'Online' ? 'checked' : '' }} required>
                            <span class="text-sm text-[#334155]">Online</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="jenis_pendaftaran" value="On Site" class="text-[#4ebde1] focus:ring-[#4ebde1] border-gray-300" {{ old('jenis_pendaftaran') == 'On Site' ? 'checked' : '' }} required>
                            <span class="text-sm text-[#334155]">On Site</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Pilih Layanan -->
            <div class="bg-white rounded-2xl mb-6 shadow-[0_2px_10px_rgb(0,0,0,0.02)] overflow-hidden">
                <div class="bg-[#fcf8f6] px-6 py-3 flex items-center gap-2 border-b border-orange-50/50">
                    <svg class="w-4 h-4 text-red-500 transform -rotate-45" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-sm font-bold text-[#1f2937]">Pilih Layanan</h2>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-[#334155] mb-1.5">Poli</label>
                        <select name="poli_tujuan" class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1] text-[#334155]" required>
                            <option value="">Pilih Poli</option>
                            <option value="Umum" {{ old('poli_tujuan') == 'Umum' ? 'selected' : '' }}>Umum</option>
                            <option value="Kandungan" {{ old('poli_tujuan') == 'Kandungan' ? 'selected' : '' }}>Kandungan</option>
                            <option value="Gigi" {{ old('poli_tujuan') == 'Gigi' ? 'selected' : '' }}>Gigi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-[#334155] mb-1.5">Dokter</label>
                        <select name="dokter" class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1] text-[#334155]" required>
                            <option value="">Pilih Dokter</option>
                            <option value="Dr. Budi" {{ old('dokter') == 'Dr. Budi' ? 'selected' : '' }}>Dr. Budi</option>
                            <option value="Dr. Siti" {{ old('dokter') == 'Dr. Siti' ? 'selected' : '' }}>Dr. Siti</option>
                            <option value="Dr. Ani" {{ old('dokter') == 'Dr. Ani' ? 'selected' : '' }}>Dr. Ani</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Jadwal -->
            <div class="bg-white rounded-2xl mb-6 shadow-[0_2px_10px_rgb(0,0,0,0.02)] overflow-hidden">
                <div class="bg-[#f9f5fa] px-6 py-3 flex items-center gap-2 border-b border-purple-50/50">
                    <svg class="w-4 h-4 text-red-500 transform -rotate-45" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-sm font-bold text-[#1f2937]">Jadwal</h2>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-[#334155] mb-1.5">Tanggal Periksa</label>
                        <input type="date" name="tanggal_berobat" value="{{ old('tanggal_berobat') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1] text-[#334155]">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-[#334155] mb-1.5">Jam</label>
                        <input type="time" name="jam_periksa" value="{{ old('jam_periksa') }}" required class="w-full rounded-xl border-gray-200 text-sm shadow-sm focus:ring-[#4ebde1] focus:border-[#4ebde1] text-[#334155]">
                    </div>
                </div>
            </div>

            <!-- Notice RM -->
            <div class="bg-[#edf8fb] rounded-2xl p-4 flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-xl bg-white border border-[#c4eaf3] flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-[#4ebde1]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-[#64748b]">Nomor Rekam Medis</p>
                    <p class="text-[15px] font-bold text-[#1f2937]">Akan digenerate otomatis setelah pendaftaran</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button type="reset" class="w-full sm:w-1/2 py-3.5 bg-white border border-gray-300 rounded-xl font-bold text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-[#4ebde1] transition-colors">
                    Reset
                </button>
                <button type="submit" class="w-full sm:w-1/2 py-3.5 bg-[#42a5f5] rounded-xl font-bold text-white shadow-sm hover:bg-[#2196f3] focus:outline-none focus:ring-2 focus:ring-[#4ebde1] transition-colors">
                    Simpan Pendaftaran
                </button>
            </div>
            
        </form>
    </div>
</body>
</html>
