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
        Schema::create('penilaian_cf', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $table->foreignId('admin_id')->constrained('admin')->cascadeOnDelete();
            $table->date('tanggal_penilaian');
            $table->integer('bidang_pendidikan');
            $table->integer('bidang_penelitian');
            $table->integer('bidang_pengabdian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilaian_cf');
    }
};
