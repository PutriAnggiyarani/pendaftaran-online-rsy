<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Berhasil - RS CINTA</title>
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
                <h1 class="text-sm font-bold text-[#1f2937] leading-tight">Status Pendaftaran</h1>
                <p class="text-[10px] text-[#64748b]">RS CINTA</p>
            </div>
        </div>
    </header>

    <div class="max-w-2xl mx-auto px-4 mt-8">
        
        <!-- Success Header -->
        <div class="text-center mb-8">
            <div class="w-24 h-24 mx-auto bg-gradient-to-b from-[#6bc693] to-[#4ebde1] rounded-full flex items-center justify-center shadow-[0_0_40px_rgba(78,189,225,0.25)] mb-6">
                <div class="w-10 h-10 border-2 border-white rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-extrabold text-[#1f2937] flex items-center justify-center gap-3">
                <div class="w-8 h-8 bg-[#4ade80] rounded flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                Pendaftaran Berhasil!
            </h2>
            <p class="text-[#64748b] mt-3">Data pendaftaran Anda telah tersimpan</p>
        </div>

        <!-- Receipt Card -->
        <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 mb-8">
            <!-- Card Header -->
            <div class="flex flex-col items-center justify-center mb-6">
                <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-[#6bc693] to-[#4ebde1] flex items-center justify-center mb-2 shadow-sm">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <h3 class="text-xs font-bold text-[#64748b]">RS CINTA</h3>
                <p class="text-[10px] text-[#94a3b8]">Sistem Registrasi Pasien</p>
            </div>

            <hr class="border-gray-100">

            <!-- Detail Grid with lines -->
            <div class="flex flex-col">
                <!-- Row 1 -->
                <div class="grid grid-cols-2 py-4">
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">Nama</p>
                        <p class="text-[15px] font-bold text-[#1f2937]">{{ $pendaftaran->nama_pasien }}</p>
                    </div>
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">No RM</p>
                        <p class="text-[15px] font-bold text-[#4ebde1]">{{ $pendaftaran->no_rm }}</p>
                    </div>
                </div>
                <hr class="border-gray-100">
                
                <!-- Row 2 -->
                <div class="grid grid-cols-2 py-4">
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">Poli</p>
                        <p class="text-[15px] font-bold text-[#1f2937]">{{ $pendaftaran->poli_tujuan }}</p>
                    </div>
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">Dokter</p>
                        <p class="text-[15px] font-bold text-[#1f2937]">{{ $pendaftaran->dokter }}</p>
                    </div>
                </div>
                <hr class="border-gray-100">

                <!-- Row 3 -->
                <div class="grid grid-cols-2 py-4">
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">Tanggal</p>
                        <p class="text-[15px] font-bold text-[#1f2937]">{{ \Carbon\Carbon::parse($pendaftaran->tanggal_berobat)->translatedFormat('j F Y') }}</p>
                    </div>
                    <div>
                        <p class="text-[11px] text-[#94a3b8] mb-1">Jam</p>
                        <p class="text-[15px] font-bold text-[#1f2937]">{{ \Carbon\Carbon::parse($pendaftaran->jam_periksa)->format('H:i') }} WIB</p>
                    </div>
                </div>
                <hr class="border-gray-100 mb-6">
            </div>

            <!-- Antrian Box -->
            <div class="bg-[#f0fcf4] rounded-2xl p-6 text-center mb-6">
                <p class="text-sm text-[#64748b] mb-1">No Antrian</p>
                <p class="text-6xl font-black text-[#6bc693] tracking-tight">{{ $pendaftaran->no_antrian }}</p>
            </div>

            <!-- Catatan -->
            <div class="bg-[#fff7ed] border-l-4 border-[#fb9b5d] p-4 rounded-r-xl mb-8">
                <p class="text-[13px] text-[#334155] leading-relaxed">
                    <span class="font-bold">Catatan:</span> Harap datang 15 menit sebelum jam pemeriksaan. Bawa kartu identitas dan nomor rekam medis Anda.
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <button onclick="window.print()" class="w-full sm:w-1/2 py-3.5 bg-[#fb9b5d] rounded-xl font-bold text-white shadow-sm hover:bg-[#e88a4e] focus:outline-none focus:ring-2 focus:ring-[#fb9b5d] transition-colors flex justify-center items-center gap-2 text-sm">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download PDF
                </button>
                <a href="{{ route('dashboard') }}" class="w-full sm:w-1/2 py-3.5 bg-[#4ebde1] rounded-xl font-bold text-white shadow-sm hover:bg-[#3baacb] focus:outline-none focus:ring-2 focus:ring-[#4ebde1] transition-colors flex justify-center items-center gap-2 text-sm">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Kembali ke Dashboard
                </a>
            </div>
        </div>

        <div class="text-center pb-8">
            <a href="{{ route('dashboard') }}" class="text-[#4ebde1] hover:text-[#3baacb] text-[13px] font-medium transition-colors">
                Lihat Riwayat Kunjungan &rarr;
            </a>
        </div>

    </div>
</body>
</html>
