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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('no_ktp')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('paket', ['h1', 'h2', 'h3', 'h4'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->enum('level', ['noc', 'cs', 'pelanggan', 'marketing', 'teknisi', 'admin'])->default('pelanggan');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
