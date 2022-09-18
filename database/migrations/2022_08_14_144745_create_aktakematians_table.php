<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktakematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktakematians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_keluarga');
            $table->string('nomor_kartu_keluarga');
            
            // jenazah
            $table->string('nik_jenazah');
            $table->string('nama_lengkap_jenazah');
            $table->string('jenis_kelamin_jenazah');
            $table->date('tanggal_lahir_jenazah');
            $table->integer('umur_jenazah');
            $table->string('tempat_lahir_jenazah');
            $table->string('prov_jenazah');
            $table->string('kab_jenazah');
            $table->string('agama_jenazah');
            $table->string('pekerjaan_jenazah');
            
            $table->string('alamat_jenazah');
            $table->string('dusun_jenazah');
            $table->string('kelurahan_jenazah');
            $table->string('kecamatan_jenazah');
            $table->string('kabupaten_kota_jenazah');
            $table->string('provinsi_jenazah');

            $table->integer('anak_ke');
            $table->date('tanggal_kematian');
            $table->string('waktu_kematian');
            $table->integer('sebab_kematian');
            $table->string('tempat_kematian');
            $table->integer('yang_menerangkan');
            
            //ibu
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->integer('umur_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('dusun_ibu');
            $table->string('kelurahan_ibu');
            $table->string('kecamatan_ibu');
            $table->string('kabupaten_kota_ibu');
            $table->string('provinsi_ibu');

            //ayah
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->integer('umur_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('dusun_ayah');
            $table->string('kelurahan_ayah');
            $table->string('kecamatan_ayah');
            $table->string('kabupaten_kota_ayah');
            $table->string('provinsi_ayah');

            //pelapor
            $table->string('nik_pelapor');
            $table->string('nama_pelapor');
            $table->date('tanggal_lahir_pelapor');
            $table->integer('umur_pelapor');
            $table->string('pekerjaan_pelapor');
            $table->string('alamat_pelapor');
            $table->string('dusun_pelapor');
            $table->string('kelurahan_pelapor');
            $table->string('kecamatan_pelapor');
            $table->string('kabupaten_kota_pelapor');
            $table->string('provinsi_pelapor');

            //saksi 1
            $table->string('nik_saksi1');
            $table->string('nama_saksi1');
            $table->date('tanggal_lahir_saksi1');
            $table->integer('umur_saksi1');
            $table->string('pekerjaan_saksi1');
            $table->string('alamat_saksi1');
            $table->string('dusun_saksi1');
            $table->string('kelurahan_saksi1');
            $table->string('kecamatan_saksi1');
            $table->string('kabupaten_kota_saksi1');
            $table->string('provinsi_saksi1');
            
            //saksi 2
            $table->string('nik_saksi2');
            $table->string('nama_saksi2');
            $table->date('tanggal_lahir_saksi2');
            $table->integer('umur_saksi2');
            $table->string('pekerjaan_saksi2');
            $table->string('alamat_saksi2');
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
        Schema::dropIfExists('aktakematians');
    }
}
