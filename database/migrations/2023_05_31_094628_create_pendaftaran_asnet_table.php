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
        Schema::create('pendaftaran_asnet', function (Blueprint $table) {
            $table->id();
            $table->string('namaperusahaan');
            $table->string('pic');
            $table->string('kontakpic');
            $table->string('bandwidth');
            $table->enum('survey', ['sudah', 'belum']);
            $table->string('kabel');
            $table->enum('status', ['po', 'belum']);
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
        Schema::dropIfExists('pendaftaran_asnet');
    }
};
