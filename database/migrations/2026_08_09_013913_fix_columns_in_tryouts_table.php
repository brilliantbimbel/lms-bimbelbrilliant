<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tryouts', function (Blueprint $table) {
            // Tambahkan kolom jika belum ada
            if (!Schema::hasColumn('tryouts', 'kelas_id')) {
                $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('cascade');
            }
            if (!Schema::hasColumn('tryouts', 'tentor_id')) {
                $table->foreignId('tentor_id')->nullable()->constrained('users')->onDelete('cascade');
            }
            if (!Schema::hasColumn('tryouts', 'tipe')) {
                $table->string('tipe')->default('kuis');
            }
            if (!Schema::hasColumn('tryouts', 'durasi')) {
                $table->integer('durasi')->default(60);
            }
        });
    }

    public function down(): void
    {
        //
    }
};
