<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('namapelanggan');
            $table->enum('penyedia', ['sengked', 'asnet']);
            $table->enum('keterangan', ['instalasi', 'maintenance']);
            $table->dateTime('waktu_visit')->nullable();
            $table->string('action_keterangan')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->string('teknisi')->nullable();
            $table->enum('status', ['proses_perbaikan','selesai'])->nullable();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhan');
    }
};
