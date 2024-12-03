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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nidn')->unique();
            $table->string('prodi');
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen');
    }
};
