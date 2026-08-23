<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tryout_id')->constrained('tryouts')->onDelete('cascade');
            $table->text('pertanyaan');
            $table->enum('tipe_soal', ['pg', 'pg_kompleks', 'isian', 'uraian']);

            // Pilihan jawaban untuk PG / PG Kompleks (disimpan JSON)
            $table->json('pilihan')->nullable();

            // Kunci Jawaban:
            // - PG: "A" / "B" / "C" / "D"
            // - PG Kompleks: JSON ["A", "C"]
            // - Isian Singkat: Teks Jawaban Singkat
            // - Uraian: Boleh NULL / Kunci Acuan Guru
            $table->text('kunci_jawaban')->nullable();

            $table->integer('bobot')->default(1);
            $table->text('pembahasan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
