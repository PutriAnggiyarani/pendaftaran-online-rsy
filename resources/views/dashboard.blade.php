<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-gray-800">Riwayat Pendaftaran Anda</h3>
                        <a href="{{ route('pendaftaran.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-150 ease-in-out">
                            + Daftar Berobat
                        </a>
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
