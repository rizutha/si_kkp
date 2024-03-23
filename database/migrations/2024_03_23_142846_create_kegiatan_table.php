<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan', 255);
            $table->string('penyelenggara', 100);
            $table->string('lokasi', 255);
            $table->longText('syarat_pendaftaran');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('waktu_kegiatan', 255);
            $table->date('batas_pendaftaran');
            $table->string('link_pendaftaran', 255);
            $table->string('biaya_pendaftaran', 255);
            $table->string('website', 255);
            $table->enum('status_kegiatan', ['Buka', 'Tutup']);
            $table->string('gambar', 255);
            $table->integer('kuota_peserta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
