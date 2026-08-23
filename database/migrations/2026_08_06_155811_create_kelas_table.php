<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kelas'); // Contoh: 12 SMA IPA 1
        $table->enum('jenjang', ['SD', 'SMP', 'SMA', 'UTBK/Alumni']);
        $table->string('tahun_ajaran'); // Contoh: 2026/2027
        $table->foreignId('tentor_id')->nullable()->constrained('users')->onDelete('set null'); // Tentor Wali Kelas
        $table->timestamps();
    });

    // Tabel Pivot untuk Hubungan Kelas & Siswa (Banyak Siswa bisa di Banyak/Satu Kelas)
    Schema::create('kelas_user', function (Blueprint $table) {
        $table->id();
        $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('kelas_user');
    Schema::dropIfExists('kelas');
}
};
