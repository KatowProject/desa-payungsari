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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->string('tanggal_dikirim');
            $table->string('perihal_surat');
            $table->string('jenis_surat');
            $table->string('sifat_surat');
            $table->string('tujuan_surat');
            $table->string('pengelola_surat')->nullable();
            $table->string('isi_ringkas')->nullable();
            $table->string('file_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
