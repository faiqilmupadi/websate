<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwalkuliah', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap jadwal kuliah
            $table->string('nama_kelas'); // Foreign key untuk nama kelas
            $table->string('kode_mk'); // Foreign key untuk kode mata kuliah
            $table->string('kode_ruang'); // Foreign key untuk kode ruang
            $table->string('hari'); // Hari perkuliahan
            $table->time('jam'); // Jam perkuliahan
            $table->timestamps(); // Untuk mencatat waktu pembuatan dan update

            // Menambahkan foreign key constraints
            $table->foreign('nama_kelas')->references('nama_kelas')->on('kelas')->onDelete('cascade');
            $table->foreign('kode_mk')->references('kode_mk')->on('matakuliah')->onDelete('cascade');
            $table->foreign('kode_ruang')->references('kode_ruang')->on('ruangperkuliahan')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliah');
    }
};