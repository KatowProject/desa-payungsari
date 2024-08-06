<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kegiatan_kades', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->string('keterangan');
            $table->timestamps();
        });

        Schema::create('kegiatan_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatan_kades_id')->constrained('kegiatan_kades')->onDelete('cascade');
            $table->string('photo_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan_photos');
        Schema::dropIfExists('kegiatan_kades');
    }
};
