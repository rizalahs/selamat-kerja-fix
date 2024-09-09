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
      Schema::create('patient_safeties', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->time('waktu_kejadian');
        $table->date('tanggal_kejadian');
        $table->string('jenis_kejadian');
        $table->string('lokasi_kejadian');
        $table->text('kronologi_kejadian');
        $table->text('alat_bahan')->nullable();
        $table->text('penyebab_kejadian');
        $table->text('kondisi_lingkungan')->nullable();
        $table->text('nama_korban')->nullable();
        $table->text('cedera')->nullable();
        $table->text('bagian_tubuh')->nullable();
        $table->text('tindakan_pertama')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_safeties');
    }
};
