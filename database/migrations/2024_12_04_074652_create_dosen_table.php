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
            $table->string('nama_dosen');
            $table->string('nidn')->unique();
            $table->unsignedBigInteger('prodi_id'); // Mengganti kolom 'prodi' menjadi 'prodi_id'
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->timestamps();

            // Menambahkan foreign key yang menghubungkan prodi_id dengan id di tabel prodi
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen');
    }
};
