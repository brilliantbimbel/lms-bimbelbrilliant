<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();

            // 1. Disesuaikan dengan auth()->id() di controller (user_id)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // 2. FIXED: Mengacu ke nama tabel 'kelases' agar tidak foreign key mismatch
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('cascade');

            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->enum('tipe', ['pdf', 'video', 'link', 'html'])->default('pdf');

            // 3. Kolom khusus agar mendukung PDF, Link Video, dan HTML Interaktif
            $table->string('file_path')->nullable();   // Untuk PDF
            $table->string('url_video')->nullable();   // Untuk YouTube / Video
            $table->longText('konten_html')->nullable(); // Untuk HTML Interaktif

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
