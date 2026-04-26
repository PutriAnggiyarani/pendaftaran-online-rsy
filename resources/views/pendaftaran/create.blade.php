<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pendaftaran Berobat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-10 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Form Pendaftaran Pasien</h3>
                        <p class="text-gray-600 text-sm mt-1">Silakan lengkapi data di bawah ini untuk mendaftar.</p>
                    </div>

                    <form action="{{ route('pendaftaran.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama Pasien -->
                            <div>
                                <label for="nama_pasien" class="block text-sm font-medium text-gray-700">Nama Lengkap Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" value="{{ old('nama_pasien') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Contoh: Budi Santoso">
                                @error('nama_pasien')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- NIK -->
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700">Nomor Induk Kependudukan (NIK)</label>
                                <input type="text" name="nik" id="nik" value="{{ old('nik') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="16 digit NIK">
                                @error('nik')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tanggal Lahir -->
                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                @error('tanggal_lahir')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Jenis Kelamin -->
                            <div>
                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- No Telepon -->
                            <div>
                                <label for="no_telepon" class="block text-sm font-medium text-gray-700">No. Telepon / WhatsApp</label>
                                <input type="text" name="no_telepon" id="no_telepon" value="{{ old('no_telepon') }}" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="08xxxxxxxxxx">
                                @error('no_telepon')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Poli Tujuan -->
                            <div>
                                <label for="poli_tujuan" class="block text-sm font-medium text-gray-700">Poli Tujuan</label>
                                <select name="poli_tujuan" id="poli_tujuan" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                    <option value="">Pilih Poli</option>
                                    <option value="Poli Umum" {{ old('poli_tujuan') == 'Poli Umum' ? 'selected' : '' }}>Poli Umum</option>
                                    <option value="Poli Gigi" {{ old('poli_tujuan') == 'Poli Gigi' ? 'selected' : '' }}>Poli Gigi</option>
                                    <option value="Poli Penyakit Dalam" {{ old('poli_tujuan') == 'Poli Penyakit Dalam' ? 'selected' : '' }}>Poli Penyakit Dalam</option>
                                    <option value="Poli Anak" {{ old('poli_tujuan') == 'Poli Anak' ? 'selected' : '' }}>Poli Anak</option>
                                    <option value="Poli Kandungan" {{ old('poli_tujuan') == 'Poli Kandungan' ? 'selected' : '' }}>Poli Kandungan (Obgyn)</option>
                                </select>
                                @error('poli_tujuan')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tanggal Berobat -->
                            <div>
                                <label for="tanggal_berobat" class="block text-sm font-medium text-gray-700">Tanggal Berobat</label>
                                <input type="date" name="tanggal_berobat" id="tanggal_berobat" value="{{ old('tanggal_berobat') }}" required
                                    min="{{ date('Y-m-d') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                @error('tanggal_berobat')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="md:col-span-2">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                                <textarea name="alamat" id="alamat" rows="3" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Alamat sesuai KTP">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end gap-3">
                            <a href="{{ route('dashboard') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-150">
                                Daftar Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
