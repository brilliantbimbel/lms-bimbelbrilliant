<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('materis', function (Blueprint $table) {
        // Pilihan: 'modul' (default) atau 'latihan'
        $table->string('kategori_modul')->default('modul')->after('tipe');
    });
}

public function down(): void
{
    Schema::table('materis', function (Blueprint $table) {
        $table->dropColumn('kategori_modul');
    });
}
};
