<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->enum('jenis_pendaftaran', ['Online', 'On Site'])->default('Online')->after('status');
            $table->string('dokter')->nullable()->after('poli_tujuan');
            $table->time('jam_periksa')->nullable()->after('tanggal_berobat');
            $table->string('no_rm')->nullable()->after('jam_periksa');
            $table->string('no_antrian')->nullable()->after('no_rm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropColumn(['jenis_pendaftaran', 'dokter', 'jam_periksa', 'no_rm', 'no_antrian']);
        });
    }
};
