<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktakelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktakelahirans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_keluarga');
            $table->string('nomor_kartu_keluarga');
            $table->string('nama_anak');
            $table->string('jenis_kelamin_anak');
            $table->string('tempat_dilahirkan');
            $table->string('tempat_kelahiran');
            $table->string('hari_kelahiran');
            $table->date('tanggal_kelahiran');
            $table->string('waktu_kelahiran');
            $table->integer('jenis_kelahiran');
            $table->integer('kelahiran_ke');
            $table->string('penolong_kelahiran');
            $table->string('berat_bayi');
            $table->string('panjang_bayi');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->string('tanggal_lahir_ibu');
            $table->integer('umur_ibu');
            $table->string('pekerjaan_ibu');
            $table->date('tanggal_pencatatan_perkawinan');
            $table->string('kewarganegaraan_ibu');
            $table->string('kebangsaan_ibu');
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->string('tanggal_lahir_ayah');
            $table->integer('umur_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('kebangsaan_ayah');
            $table->string('nik_pelapor');
            $table->string('nama_pelapor');
            $table->integer('umur_pelapor');
            $table->string('jenis_kelamin_pelapor');
            $table->string('pekerjaan_pelapor');

            $table->string('nik_saksi1');
            $table->string('nama_saksi1');
            $table->integer('umur_saksi1');
            
            $table->string('nik_saksi2');
            $table->string('nama_saksi2');
            $table->integer('umur_saksi2');
            
            $table->string('dusun_ibu');
            $table->string('kelurahan_ibu');
            $table->string('kecamatan_ibu');
            $table->string('kabupaten_kota_ibu');
            $table->string('provinsi_ibu');

            $table->string('dusun_ayah');
            $table->string('kelurahan_ayah');
            $table->string('kecamatan_ayah');
            $table->string('kabupaten_kota_ayah');
            $table->string('provinsi_ayah');

            $table->string('dusun_pelapor');
            $table->string('kelurahan_pelapor');
            $table->string('kecamatan_pelapor');
            $table->string('kabupaten_kota_pelapor');
            $table->string('provinsi_pelapor');

            $table->string('dusun_saksi1');
            $table->string('kelurahan_saksi1');
            $table->string('kecamatan_saksi1');
            $table->string('kabupaten_kota_saksi1');
            $table->string('provinsi_saksi1');

            $table->string('dusun_saksi2');
            $table->string('kelurahan_saksi2');
            $table->string('kecamatan_saksi2');
            $table->string('kabupaten_kota_saksi2');
            $table->string('provinsi_saksi2');
            
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
        Schema::dropIfExists('aktakelahirans');
    }
}
