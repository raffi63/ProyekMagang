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
            $table->string('namapelanggan');
            $table->enum('penyedia', ['asnet', 'sengked']);
            $table->enum('keterangan', ['instalasi', 'maintenance']);
            $table->dateTime('waktu_visit');
            $table->string('action_keterangan');
            $table->dateTime('waktu_selesai')->nullable();
            $table->string('teknisi');
            $table->enum('status', ['proses_perbaikan','selesai']);
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
