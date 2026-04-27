<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - RS DR M YASIN BONE</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen">

    <!-- Header -->
    <header class="bg-white sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-4xl mx-auto px-4 h-16 flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors text-gray-600">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            
            <div class="flex items-center gap-3">
                <!-- <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-[#6bc693] to-[#4ebde1] flex items-center justify-center shadow-sm"> -->
                    <img src="{{ asset('build/assets/image/logors.png') }}" alt="Logo RS Cinta" class="w-15 h-15 object-contain">
                <div>
                    <h1 class="text-lg font-bold text-[#1f2937] leading-none">Profil Saya</h1>
                    <p class="text-[11px] text-[#64748b] mt-1 font-medium tracking-wide">RS DR M YASIN BONE</p>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-8 pb-20 space-y-6">
        
        <!-- Main Profile Banner -->
        <div class="bg-gradient-to-r from-[#4ebde1] to-[#6bc693] rounded-2xl shadow-md p-6 sm:p-8 text-white relative overflow-hidden flex flex-col sm:flex-row items-center sm:items-start gap-6">
            <!-- Decorative Elements -->
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-xl"></div>
            
            <!-- Avatar -->
            <div class="relative shrink-0">
                <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full border-4 border-white/20 bg-white/10 flex items-center justify-center overflow-hidden backdrop-blur-sm shadow-inner">
                    <svg class="w-16 h-16 text-white/80 mt-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>

            <!-- User Info -->
            <div class="flex-1 text-center sm:text-left z-10 w-full">
                <h2 class="text-2xl sm:text-3xl font-extrabold mb-1">{{ auth()->user()->name }}</h2>
                <p class="text-white/90 text-sm mb-4">{{ auth()->user()->email }}</p>
                
                <div class="flex flex-wrap justify-center sm:justify-start gap-2 mb-4 sm:mb-0">
                    <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-semibold shadow-sm">
                        No RM: RM-2026-000123
                    </span>
                    <span class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-semibold shadow-sm">
                        NIK: 3201234567890123
                    </span>
                </div>
            </div>

            <!-- Edit Button -->
            <div class="z-10 shrink-0 w-full sm:w-auto">
                <a href="{{ route('profile.edit') }}" class="w-full sm:w-auto bg-white text-[#4ebde1] hover:text-[#3daecf] hover:bg-gray-50 px-5 py-2.5 rounded-full text-sm font-bold shadow-sm transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit Profil
                </a>
            </div>
        </div>

        <!-- Informasi Pribadi -->
        <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-100 overflow-hidden">
            <div class="bg-[#f4faf8] px-6 py-4 flex items-center gap-2 border-b border-gray-50">
                <svg class="w-5 h-5 text-[#4ebde1]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <h3 class="font-bold text-[#334155] text-[15px]">Informasi Pribadi</h3>
            </div>
            
            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Nama Lengkap</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        {{ auth()->user()->name }}
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Tanggal Lahir</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        15 Mei 1995 <span class="text-gray-500">(30 tahun)</span>
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Jenis Kelamin</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        Perempuan
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Golongan Darah</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        A+
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Kontak -->
        <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-100 overflow-hidden">
            <div class="bg-[#f4faf5] px-6 py-4 flex items-center gap-2 border-b border-gray-50">
                <svg class="w-5 h-5 text-[#6bc693]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <h3 class="font-bold text-[#334155] text-[15px]">Informasi Kontak</h3>
            </div>
            
            <div class="p-6 space-y-5">
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">No Handphone</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 flex items-center gap-3">
                        <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-sm text-[#1e293b]">081234567890</span>
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Email</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 flex items-center gap-3">
                        <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-sm text-[#1e293b]">{{ auth()->user()->email }}</span>
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Alamat</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 flex items-start gap-3">
                        <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-sm text-[#1e293b] leading-relaxed">Jl. Merdeka No. 123, Jakarta Pusat, DKI Jakarta 10110</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Medis -->
        <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.03)] border border-gray-100 overflow-hidden">
            <div class="bg-[#fcf8f4] px-6 py-4 flex items-center gap-2 border-b border-gray-50">
                <svg class="w-5 h-5 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <h3 class="font-bold text-[#334155] text-[15px]">Informasi Medis</h3>
            </div>
            
            <div class="p-6 space-y-5">
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Alergi</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        Tidak ada
                    </div>
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-[#475569] mb-1.5 ml-1">Riwayat Penyakit</p>
                    <div class="bg-[#f8fafc] rounded-xl px-4 py-3 text-sm text-[#1e293b]">
                        Tidak ada riwayat penyakit serius
                    </div>
                </div>
            </div>
        </div>

        <!-- Keamanan Data -->
        <div class="bg-blue-50/50 border border-blue-100 rounded-2xl p-6 flex gap-4 mt-8 shadow-sm">
            <div class="shrink-0 mt-0.5">
                <svg class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <div>
                <h4 class="font-bold text-[#1f2937] text-sm mb-1.5">Keamanan Data</h4>
                <p class="text-xs text-[#64748b] leading-relaxed">Semua informasi pribadi Anda dilindungi dengan sistem enkripsi tingkat tinggi. Data medis Anda hanya dapat diakses oleh tenaga medis yang berwenang.</p>
            </div>
        </div>

    </main>
</body>
</html>
