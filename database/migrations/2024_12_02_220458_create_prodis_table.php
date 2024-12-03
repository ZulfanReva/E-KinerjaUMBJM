<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id(); // Primary key otomatis
            $table->string('nama_prodi'); // Kolom nama prodi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodi');
    }
}