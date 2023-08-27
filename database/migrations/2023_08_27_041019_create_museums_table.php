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
        Schema::create('museums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_museum');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('kontak');
            $table->string('jenis_museum');
            $table->string('nama_pemilik');
            $table->integer('jumlah_koleksi');
            $table->text('visi');
            $table->text('misi');
            $table->date('tanggal_berdiri_peresmian');
            $table->text('sejarah');
            $table->string('sumber_pendanaan');
            $table->string('kepemilikan_tanah');
            $table->decimal('luas_lahan', 8, 2); // Menggunakan 8 digit total dan 2 digit di belakang koma
            $table->decimal('harga_tiket_masuk', 10, 2); // Menggunakan 10 digit total dan 2 digit di belakang koma
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('museums');
    }
};
