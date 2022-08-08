<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->string('permohonan_ktp');
            $table->string('nama_lengkap');
            $table->bigInteger('no_kk');
            $table->bigInteger('nik');
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
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
        Schema::dropIfExists('ktp');
    }
}
