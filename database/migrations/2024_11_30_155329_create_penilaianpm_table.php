<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penilaian_pm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $table->foreignId('admin_id')->constrained('admin')->cascadeOnDelete();
            $table->foreignId('penialaincf_id')->constrained('penilaian_cf')->cascadeOnDelete();
            $table->foreignId('penilaiansf_id')->constrained('penilaian_sf')->cascadeOnDelete();
            $table->date('tanggal_penilaian');
            $table->text('umpan_balik');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilaian_pm');
    }
};
