<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tryouts', function (Blueprint $table) {
            // Tambahkan kolom durasi jika belum ada
            if (!Schema::hasColumn('tryouts', 'durasi')) {
                $table->integer('durasi')->default(60)->after('tipe');
            }
        });
    }

    public function down(): void
    {
        Schema::table('tryouts', function (Blueprint $table) {
            if (Schema::hasColumn('tryouts', 'durasi')) {
                $table->dropColumn('durasi');
            }
        });
    }
};
