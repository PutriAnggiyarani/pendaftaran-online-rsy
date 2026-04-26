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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik', 20)->nullable()->unique();
            $table->string('no_rm', 50)->nullable()->unique();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('golongan_darah', 5)->nullable();
            $table->string('no_handphone', 20)->nullable();
            $table->text('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nik',
                'no_rm',
                'jenis_kelamin',
                'tanggal_lahir',
                'golongan_darah',
                'no_handphone',
                'alamat',
            ]);
        });
    }
};
