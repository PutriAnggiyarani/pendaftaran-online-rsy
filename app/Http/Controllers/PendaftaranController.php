<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftarans = \App\Models\Pendaftaran::where('user_id', auth()->id())->latest()->get();
        return view('dashboard', compact('pendaftarans'));
    }

    public function home()
    {
        $pendaftarans = \App\Models\Pendaftaran::where('user_id', auth()->id())->latest()->get();
        return view('home', compact('pendaftarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'jenis_pendaftaran' => 'required|in:Online,On Site',
            'poli_tujuan' => 'required|string|max:255',
            'dokter' => 'required|string|max:255',
            'tanggal_berobat' => 'required|date|after_or_equal:today',
            'jam_periksa' => 'required',
        ]);

        // Generate RM and Antrian
        $noRm = 'RM-' . date('Y') . '-' . rand(100000, 999999);
        $noAntrian = 'C-' . rand(100, 999);

        $pendaftaran = \App\Models\Pendaftaran::create([
            'user_id' => auth()->id(),
            'nama_pasien' => $request->nama_pasien,
            'nik' => $request->nik,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'jenis_pendaftaran' => $request->jenis_pendaftaran,
            'poli_tujuan' => $request->poli_tujuan,
            'dokter' => $request->dokter,
            'tanggal_berobat' => $request->tanggal_berobat,
            'jam_periksa' => $request->jam_periksa,
            'no_rm' => $noRm,
            'no_antrian' => $noAntrian,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('pendaftaran.show', $pendaftaran->id)->with('success', 'Pendaftaran berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        // Pastikan hanya user bersangkutan yang bisa melihat
        if ($pendaftaran->user_id !== auth()->id()) {
            abort(403);
        }
        return view('pendaftaran.show', compact('pendaftaran'));
    }

    public function pdf(Pendaftaran $pendaftaran)
    {
        if ($pendaftaran->user_id !== auth()->id()) {
            abort(403);
        }

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pendaftaran.pdf', compact('pendaftaran'));
        return $pdf->stream('Bukti_Registrasi_' . $pendaftaran->no_rm . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
