<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user dummy (Pasien)
        $user = \App\Models\User::factory()->create([
            'name' => 'Pasien Dummy',
            'email' => 'pasien@rscinta.com',
            'password' => bcrypt('password123'),
        ]);

        // Buat data pendaftaran dummy
        \App\Models\Pendaftaran::create([
            'user_id' => $user->id,
            'nama_pasien' => 'Pasien Dummy',
            'nik' => '3201012345678901',
            'tanggal_lahir' => '1990-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'no_telepon' => '081234567890',
            'alamat' => 'Jl. Contoh Alamat No. 123, Kota Bogor',
            'poli_tujuan' => 'Poli Umum',
            'tanggal_berobat' => \Carbon\Carbon::tomorrow()->toDateString(),
            'status' => 'Menunggu',
        ]);
        
        \App\Models\Pendaftaran::create([
            'user_id' => $user->id,
            'nama_pasien' => 'Pasien Dummy',
            'nik' => '3201012345678901',
            'tanggal_lahir' => '1990-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'no_telepon' => '081234567890',
            'alamat' => 'Jl. Contoh Alamat No. 123, Kota Bogor',
            'poli_tujuan' => 'Poli Gigi',
            'tanggal_berobat' => \Carbon\Carbon::yesterday()->toDateString(),
            'status' => 'Selesai',
        ]);
    }
}
