<!DOCTYPE html>
<html>
<head>
    <title>Bukti Registrasi Pasien</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }
        .header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }
        .header p {
            margin: 2px 0;
            font-size: 12px;
            font-style: italic;
        }
        .divider {
            border-top: 2px solid black;
            margin-bottom: 20px;
        }
        .content {
            width: 100%;
            font-size: 14px;
        }
        .content td {
            padding: 5px 0;
            vertical-align: top;
        }
        .content .label {
            width: 250px;
        }
        .content .colon {
            width: 15px;
        }
        .qr-code {
            text-align: right;
            vertical-align: top;
            padding-top: 10px !important;
        }
        .notes {
            margin-top: 40px;
            font-size: 11px;
        }
        .notes p {
            margin: 2px 0;
        }
        .notes .bold {
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>BUKTI REGISTRASI PASIEN</h1>
        <h2>RS CINTA</h2>
        <p>Alamat : Jl. Jendral Sudirman No. 123, JAKARTA - 12345</p>
        <p>Phone. 021 123 456 - email: info@rscinta.com - Website: rscinta.com</p>
    </div>

    <div class="divider"></div>

    <table class="content" cellspacing="0" cellpadding="0">
        <tr>
            <td class="label">Nomor Registrasi</td>
            <td class="colon">:</td>
            <td><strong>{{ $pendaftaran->no_rm }}</strong></td>
            <td rowspan="7" class="qr-code">
                @php
                    $qrData = "Registrasi: " . $pendaftaran->no_rm . "\nPasien: " . $pendaftaran->nama_pasien . "\nAntrian: " . $pendaftaran->no_antrian;
                @endphp
                <img src="data:image/svg+xml;base64,{!! base64_encode(QrCode::format('svg')->size(120)->generate($qrData)) !!}" alt="QR Code">
            </td>
        </tr>
        <tr>
            <td class="label">Nama</td>
            <td class="colon">:</td>
            <td><strong>{{ $pendaftaran->nama_pasien }}</strong></td>
        </tr>
        <tr>
            <td class="label">Nomor Antrian Pendaftaran</td>
            <td class="colon">:</td>
            <td>{{ $pendaftaran->no_antrian }}</td>
        </tr>
        <tr>
            <td class="label">Poli Tujuan</td>
            <td class="colon">:</td>
            <td>{{ $pendaftaran->poli_tujuan }}</td>
        </tr>
        <tr>
            <td class="label">Dokter</td>
            <td class="colon">:</td>
            <td>{{ $pendaftaran->dokter }}</td>
        </tr>
        <tr>
            <td class="label">Jadwal Kunjungan</td>
            <td class="colon">:</td>
            <td>{{ \Carbon\Carbon::parse($pendaftaran->tanggal_berobat)->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <td class="label">Jam Pendaftaran</td>
            <td class="colon">:</td>
            <td>Estimasi Pukul {{ \Carbon\Carbon::parse($pendaftaran->jam_periksa)->format('H:i') }} Waktu Setempat</td>
        </tr>
    </table>

    <div class="notes">
        <p>Keterangan:</p>
        <p>Pastikan Nomor HP / Kontak anda aktif untuk sms</p>
        <p>Diharapkan datang 30 menit sebelum estimasi jam pendaftaran</p>
        <p>Silahkan bawa berkas pelengkap lainnya saat datang ke Rumah Sakit</p>
        <p class="bold">Bagi Pasien yang sudah mengambil Antrian namun tidak datang diloket sampai 10 Nomor antrian selanjutnya, maka pasien harus mengambil ulang antrian</p>
    </div>

</body>
</html>
