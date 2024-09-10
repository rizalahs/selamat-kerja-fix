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
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_kejadian');
            $table->time('waktu_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('jenis_kejadian');
            $table->text('kronologi_kejadian');
            $table->string('Alat');
            $table->text('penyebab');
            $table->string('kondisi');
            $table->string('namakorban');
            $table->string('cedera');
            $table->string('bagiantubuh');
            $table->string('tindakan');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidents');
    }
};
