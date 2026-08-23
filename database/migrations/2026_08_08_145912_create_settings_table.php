<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bimbel')->default('Bimbel Brilliant');
            $table->string('slogan')->nullable()->default('Portal Pembelajaran & Tryout Interaktif');
            $table->string('logo_path')->nullable();
            $table->string('no_wa_admin')->nullable()->default('081234567890');
            $table->string('email_admin')->nullable()->default('admin@brilliant.com');
            $table->string('tahun_ajaran')->default('2026/2027');
            $table->enum('semester', ['Ganjil', 'Genap'])->default('Ganjil');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
