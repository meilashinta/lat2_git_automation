<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoleksisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('koleksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_koleksi')->unique();
            $table->string('nama_koleksi');
            $table->string('jenis_koleksi');
            $table->json('ukuran')->nullable(); // Kolom JSON untuk menyimpan ukuran
            $table->text('deskripsi');
            $table->string('asal');
            $table->string('keadaan');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('koleksis');
    }
}
