<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penilaian_pm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_admin')->constrained('users');
            $table->foreignId('id_dosen')->constrained('dosen');
            $table->foreignId('id_penilaiancf')->constrained('penilaian_cf');
            $table->foreignId('id_penilaiansf')->constrained('penilaian_sf');
            $table->foreignId('periode_id')->constrained('periode')->onDelete('cascade');
            $table->text('umpan_balik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_pm');
    }
};