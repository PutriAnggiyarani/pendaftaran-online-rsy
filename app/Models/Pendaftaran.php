<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'user_id', 'nama_pasien', 'nik', 'tanggal_lahir', 
        'jenis_kelamin', 'no_telepon', 'alamat', 'poli_tujuan', 
        'tanggal_berobat', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
