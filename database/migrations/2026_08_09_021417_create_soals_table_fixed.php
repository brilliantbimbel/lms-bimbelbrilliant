<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Buat tabel soals jika belum ada
        if (!Schema::hasTable('soals')) {
            Schema::create('soals', function (Blueprint $table) {
                $table->id();
                $table->foreignId('tryout_id')->constrained('tryouts')->onDelete('cascade');
                $table->text('pertanyaan');
                $table->enum('tipe_soal', ['pg', 'pg_kompleks', 'isian', 'uraian']);

                // Pilihan jawaban untuk PG / PG Kompleks
                $table->json('pilihan')->nullable();

                // Kunci Jawaban
                $table->text('kunci_jawaban')->nullable();

                $table->integer('bobot')->default(1);
                $table->text('pembahasan')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
