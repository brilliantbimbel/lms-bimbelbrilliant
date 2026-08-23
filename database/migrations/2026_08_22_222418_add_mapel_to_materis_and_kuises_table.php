<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Hanya tambah kolom mapel ke 'materis' jika kolomnya belum ada
        if (Schema::hasTable('materis') && !Schema::hasColumn('materis', 'mapel')) {
            Schema::table('materis', function (Blueprint $table) {
                $table->string('mapel')->nullable();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('materis') && Schema::hasColumn('materis', 'mapel')) {
            Schema::table('materis', function (Blueprint $table) {
                $table->dropColumn('mapel');
            });
        }
    }
};
