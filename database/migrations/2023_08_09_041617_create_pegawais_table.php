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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('divisi_id');
            $table->string('nama_pegawai');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('avatar')->nullable(); // Tambahkan kolom avatar
            $table->timestamps();

            $table->foreign('divisi_id')->references('id')->on('divisis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
