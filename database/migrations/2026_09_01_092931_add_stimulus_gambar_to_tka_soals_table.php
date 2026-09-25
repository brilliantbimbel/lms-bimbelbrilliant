<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tka_soals', function (Blueprint $table) {
            $table->string('stimulus_gambar')->nullable()->after('stimulus');
        });
    }

    public function down(): void
    {
        Schema::table('tka_soals', function (Blueprint $table) {
            $table->dropColumn('stimulus_gambar');
        });
    }
};
