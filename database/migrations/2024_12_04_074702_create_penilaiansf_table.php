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
        Schema::create('penilaian_sf', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $table->foreignId('pengawas_id')->constrained('pengawas')->cascadeOnDelete();
            $table->string('periode');
            $table->integer('orientasi_pelayanan');
            $table->integer('integritas');
            $table->integer('komitmen');
            $table->integer('disiplin');
            $table->integer('kerjasama');
            $table->integer('kepemimpinan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilaian_sf');
    }
};
