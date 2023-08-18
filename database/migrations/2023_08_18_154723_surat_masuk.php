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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->string('tanggal_diterima');
            $table->string('perihal_surat');
            $table->string('asal_surat');
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
        Schema::dropIfExists('surat_masuk');
    }
};
