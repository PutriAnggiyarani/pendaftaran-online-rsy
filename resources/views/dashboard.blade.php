<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Hero Banner: Info Antrian -->
            <div class="bg-gradient-to-r from-[#4ebde1] to-[#6bc693] rounded-2xl shadow-md p-8 text-white mb-10 relative overflow-hidden">
                <!-- Decorative Circle -->
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-white opacity-10 rounded-full blur-2xl"></div>
                <div class="absolute right-40 -bottom-20 w-40 h-40 bg-white opacity-10 rounded-full blur-xl"></div>
                
                <h2 class="text-xl font-bold mb-1 relative z-10">Info Antrian Anda</h2>
                <p class="text-white/80 text-sm mb-6 relative z-10">Antrian berikutnya</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 relative z-10">
                    <!-- No Antrian -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/80 text-xs">No Antrian</p>
                            <p class="text-2xl font-extrabold">A-012</p>
                        </div>
                    </div>
                    
                    <!-- Poli -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/80 text-xs">Poli</p>
                            <p class="text-xl font-extrabold">Umum</p>
                        </div>
                    </div>
                    
                    <!-- Jam Periksa -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/80 text-xs">Jam Periksa</p>
                            <p class="text-xl font-extrabold">09:30 WIB</p>
                        </div>
                    </div>
                </div>
                
                <button class="relative z-10 bg-white text-[#4ebde1] px-6 py-2 rounded-full text-sm font-bold shadow-sm hover:bg-gray-50 transition-colors">
                    Lihat Detail
                </button>
            </div>

            <!-- Menu Utama -->
            <h3 class="text-2xl font-extrabold text-gray-800 mb-6">Menu Utama</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <!-- Daftar Berobat -->
                <a href="{{ route('pendaftaran.create') }}" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-4 border border-transparent hover:border-blue-100 group">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-gray-800 text-center">Daftar Berobat</span>
                </a>
                
                <!-- Jadwal Dokter -->
                <a href="#" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-4 border border-transparent hover:border-green-100 group">
                    <div class="w-14 h-14 rounded-full bg-green-50 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-gray-800 text-center">Jadwal Dokter</span>
                </a>
                
                <!-- Riwayat Kunjungan -->
                <a href="#" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-4 border border-transparent hover:border-orange-100 group">
                    <div class="w-14 h-14 rounded-full bg-orange-50 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-gray-800 text-center">Riwayat Kunjungan</span>
                </a>
                
                <!-- Pembayaran -->
                <a href="#" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-4 border border-transparent hover:border-purple-100 group">
                    <div class="w-14 h-14 rounded-full bg-purple-50 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-gray-800 text-center">Pembayaran</span>
                </a>
                
                <!-- Profil -->
                <a href="#" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center justify-center gap-4 border border-transparent hover:border-yellow-100 group">
                    <div class="w-14 h-14 rounded-full bg-yellow-50 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-gray-800 text-center">Profil</span>
                </a>
            </div>

            <!-- Optional: Riwayat Pendaftaran Bawah (Tetap ada namun dibawah) -->
            <div class="mt-12 bg-white overflow-hidden shadow-sm sm:rounded-2xl">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-gray-800">Riwayat Pendaftaran Anda</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pasien</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Poli Tujuan</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Berobat</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @forelse ($pendaftarans as $index => $pendaftaran)
                                    <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm font-medium text-gray-900">{{ $pendaftaran->nama_pasien }}<br><span class="text-xs text-gray-500">{{ $pendaftaran->nik }}</span></td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ $pendaftaran->poli_tujuan }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-500">{{ \Carbon\Carbon::parse($pendaftaran->tanggal_berobat)->translatedFormat('d F Y') }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap">
                                            @if ($pendaftaran->status === 'Menunggu')
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Menunggu</span>
                                            @elseif ($pendaftaran->status === 'Diproses')
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Diproses</span>
                                            @elseif ($pendaftaran->status === 'Selesai')
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Selesai</span>
                                            @else
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Batal</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-6 px-6 text-center text-sm text-gray-500">
                                            Belum ada riwayat pendaftaran.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
