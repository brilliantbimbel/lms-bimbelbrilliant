<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tabel Paket Ujian TKA
        Schema::create('tka_pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('users')->onDelete('cascade');
            $table->string('judul');
            $table->string('mapel');
            $table->string('kelas');
            $table->integer('durasi_menit');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Tabel Soal TKA (PG, PG Kompleks, B/S, Isian)
        Schema::create('tka_soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tka_paket_id')->constrained('tka_pakets')->onDelete('cascade');
            $table->enum('tipe_soal', ['pg', 'pg_kompleks', 'benar_salah', 'isian']);
            $table->text('stimulus')->nullable(); // Teks wacana / bacaan
            $table->text('pertanyaan');
            $table->json('opsi_json')->nullable(); // Opsi Pilihan A,B,C / List Pernyataan B/S
            $table->json('kunci_json'); // Kunci Jawaban
            $table->integer('bobot_nilai')->default(1);
            $table->timestamps();
        });

        // 3. Tabel Sesi Ujian Siswa
        Schema::create('tka_sesis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tka_paket_id')->constrained('tka_pakets')->onDelete('cascade');
            $table->timestamp('waktu_mulai');
            $table->timestamp('waktu_selesai')->nullable();
            $table->enum('status', ['mengerjakan', 'menunggu_penilaian', 'selesai'])->default('mengerjakan');
            $table->float('nilai_akhir')->nullable();
            $table->timestamps();
        });

        // 4. Tabel Jawaban Siswa per Soal
        Schema::create('tka_jawabans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tka_sesi_id')->constrained('tka_sesis')->onDelete('cascade');
            $table->foreignId('tka_soal_id')->constrained('tka_soals')->onDelete('cascade');
            $table->json('jawaban_siswa')->nullable();
            $table->boolean('is_ragu')->default(false);
            $table->float('skor_otomatis')->default(0);
            $table->float('skor_manual')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tka_jawabans');
        Schema::dropIfExists('tka_sesis');
        Schema::dropIfExists('tka_soals');
        Schema::dropIfExists('tka_pakets');
    }
};
