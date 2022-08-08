<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala');
            $table->string('dusun_kepala');
            $table->bigInteger('kode_pos');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');
            $table->integer('rt_kepala');
            $table->integer('rw_kepala');
            $table->string('nama_anggota');
            $table->bigInteger('no_ktp');
            $table->bigInteger('no_paspor')->nullable();
            $table->bigInteger('nomor_kitap')->nullable();
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('golongan_darah');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->date('tanggal_perkawinan')->nullable();
            $table->string('status_hubungan');
            $table->string('kewarganegaraan');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
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
        Schema::dropIfExists('kk');
    }
}
