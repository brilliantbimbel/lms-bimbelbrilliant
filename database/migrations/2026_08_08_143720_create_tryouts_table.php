<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tryouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('user_id')->comment('Tentor Pembuat')->nullable();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->integer('durasi_menit')->default(60); // Durasi pengerjaan
            $table->enum('status', ['draft', 'terbit'])->default('terbit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tryouts');
    }
};
