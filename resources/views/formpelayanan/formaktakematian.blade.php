@extends('layouts.cobalayout')
@section('title', 'Form Akta Kematian')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row px-0">
        @include('component.alertlayanan')
    </div>
        <h1>SURAT KETERANGAN KEMATIAN</h1>
        <form action="formaktakematian/store" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="no">Nomor Kepala Keluarga</label>
                    <input type="text" class="form-control" id="nomor_kartu_keluarga" name="nomor_kartu_keluarga" required>
                </div>
            </div>
            <h2>Data Diri Jenazah</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_jenazah">NIK</label>
                    <input type="text" class="form-control" id="nik_jenazah" name="nik_jenazah" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_lengkap_jenazah">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap_jenazah" name="nama_lengkap_jenazah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="jenis_kelamin_jenazah">Jenis Kelamin</label>
                    <select id="jenis_kelamin_jenazah" class="form-control" name="jenis_kelamin_jenazah" required>
                        <option selected>Jenis Kelamin</option>
                        <option value="1">01. Laki-Laki</option>
                        <option value="2">02. Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tanggal_lahir_jenazah">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_jenazah" name="tanggal_lahir_jenazah" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="umur_jenazah">Umur</label>
                    <input type="number" class="form-control" id="umur_jenazah" name="umur_jenazah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tempat_lahir_jenazah">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir_jenazah" name="tempat_lahir_jenazah" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="prov_jenazah">Kode Provinsi</label>
                    <input type="number" class="form-control" id="prov_jenazah" name="prov_jenazah">
                </div>
                <div class="form-group col-md-4">
                    <label for="kab_jenazah">Kode Kabupaten</label>
                    <input type="number" class="form-control" id="kab_jenazah" name="kab_jenazah">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="agama_jenazah">Agama</label>
                    <select id="agama_jenazah" class="form-control" name="agama_jenazah" required>
                        <option selected>Agama</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="KRISTEN">KRISTEN</option>
                        <option value="KATOLIK">KATOLIK</option>
                        <option value="HINDU">HINDU</option>
                        <option value="BUDDHA">BUDDHA</option>
                        <option value="KONGHUCU">KONGHUCU</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="pekerjaan_jenazah">Pekerjaan</label>
                    <select id="pekerjaan_jenazah" class="form-control" name="pekerjaan_jenazah" required>
                        <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                        <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                        <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                        <option value="Pensiunan">04. Pensiunan</option>
                        <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                        <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                        <option value="Kepolisian RI">07. Kepolisian RI</option>
                        <option value="Perdagangan">08. Perdagangan</option>
                        <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                        <option value="Peternak">10. Peternak</option>
                        <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                        <option value="Industri">12. Industri</option>
                        <option value="Konstruksi">13. Konstruksi</option>
                        <option value="Transportasi">14. Transportasi</option>
                        <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                        <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                        <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                        <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                        <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                        <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                        <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                        <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                        <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                        <option value="Tukang Cukur">24. Tukang Cukur</option>
                        <option value="Tukang Listrik">25. Tukang Listrik</option>
                        <option value="Tukang Batu">26. Tukang Batu</option>
                        <option value="Tukang Kayu">27. Tukang Kayu</option>
                        <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                        <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                        <option value="Tukang Jahit">30. Tukang Jahit</option>
                        <option value="Tukang Gigi">31. Tukang Gigi</option>
                        <option value="Penata Rias">32. Penata Rias</option>
                        <option value="Penata Busana">33. Penata Busana</option>
                        <option value="Penata Rambut">34. Penata Rambut</option>
                        <option value="Mekanik">35. Mekanik</option>
                        <option value="Seniman">36. Seniman</option>
                        <option value="Tabib">37. Tabib</option>
                        <option value="Paraji">38. Paraji</option>
                        <option value="Perancang Busana">39. Perancang Busana</option>
                        <option value="Penerjemah">40. Penerjemah</option>
                        <option value="Imam Masjid">41. Imam Masjid</option>
                        <option value="Pendeta">42. Pendeta</option>
                        <option value="Pastor">43. Pastor</option>
                        <option value="Wartawan">44. Wartawan</option>
                        <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                        <option value="Juru Masak">46. Juru Masak</option>
                        <option value="Promotor Acara">47. Promotor Acara</option>
                        <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                        <option value="Anggota DPD">49. Anggota DPD</option>
                        <option value="Anggota BPK">50. Anggota BPK</option>
                        <option value="Presiden">51. Presiden</option>
                        <option value="Wakil Presiden">52. Wakil Presiden</option>
                        <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                        <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                        <option value="Duta Besar">55. Duta Besar</option>
                        <option value="Gubernur">56. Gubernur</option>
                        <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                        <option value="Bupati">58. Bupati</option>
                        <option value="Wakil Bupati">59. Wakil Bupati</option>
                        <option value="Walikota">60. Walikota</option>
                        <option value="Wakil Walikota">61. Wakil Walikota</option>
                        <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                        <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                        <option value="Dosen">64. Dosen</option>
                        <option value="Guru">65. Guru</option>
                        <option value="Pilot">66. Pilot</option>
                        <option value="Pengacara">67. Pengacara</option>
                        <option value="Notaris">68. Notaris</option>
                        <option value="Arsitek">69. Arsitek</option>
                        <option value="Akuntan">70. Akuntan</option>
                        <option value="Konsultan">71. Konsultan</option>
                        <option value="Dokter">72. Dokter</option>
                        <option value="Bidan">73. Bidan</option>
                        <option value="Perawat">74. Perawat</option>
                        <option value="Apoteker">75. Apoteker</option>
                        <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                        <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                        <option value="Penyiar Radio">78. Penyiar Radio</option>
                        <option value="Pelaut">79. Pelaut</option>
                        <option value="Peneliti">80. Peneliti</option>
                        <option value="Sopir">81. Sopir</option>
                        <option value="Pialang">82. Pialang</option>
                        <option value="Paranormal">83. Paranormal</option>
                        <option value="Pedagang">84. Pedagang</option>
                        <option value="Perangkat Desa">85. Perangkat Desa</option>
                        <option value="Kepala Desa">86. Kepala Desa</option>
                        <option value="Biarawati">87. Biarawati</option>
                        <option value="Wiraswasta">88. Wiraswasta</option>
                        <option value="Lainnya">89. Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_jenazah">Alamat</label>
                    <input type="text" class="form-control" id="alamat_jenazah" name="alamat_jenazah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_jenazah">Dusun</label>
                    <input type="text" class="form-control" id="dusun_jenazah" name="dusun_jenazah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_jenazah">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_jenazah" name="kelurahan_jenazah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_jenazah">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_jenazah" name="kecamatan_jenazah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_jenazah">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_jenazah" name="kabupaten_kota_jenazah"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_jenazah">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_jenazah" name="provinsi_jenazah" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="anak_ke">Anak ke</label>
                    <input type="number" class="form-control" id="anak_ke" name="anak_ke" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="tanggal_jenazah">Tanggal Kematian</label>
                    <input type="date" class="form-control" id="tanggal_jenazah" name="tanggal_kematian" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="waktu_jenazah">Waktu Kematian</label>
                    <input type="time" class="form-control" id="waktu_jenazah" name="waktu_kematian" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="sebab_kematian">Sebab Kematian</label>
                    <select id="sebab_kematian" class="form-control" name="sebab_kematian" required>
                        <option >Sebab Kematian</option>
                        <option selected value="1">1. Sakit biasa / tua</option>
                        <option value="2">2. Wabah Penyakit</option>
                        <option value="3">3. Kecelakaan</option>
                        <option value="4">4. Kriminalitas</option>
                        <option value="5">5. Bunuh Diri</option>
                        <option value="6">6. Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tempat_kematian">Tempat Kematian</label>
                    <input type="text" class="form-control" id="tempat_kematian" name="tempat_kematian" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="yang_menerangkan">Yang Menerangkan</label>
                    <select id="yang_menerangkan" class="form-control" name="yang_menerangkan" required>
                        <option selected>Yang Menerangkan</option>
                        <option value="1">1. Dokter</option>
                        <option value="2">2. Tenaga Kesehatan</option>
                        <option value="3">3. Kepolisian</option>
                        <option value="4">4. Lainnya</option>
                    </select>
                </div>
            </div>
            <hr>
            <h2>Data Diri Ayah</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_ayah">NIK</label>
                    <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_ayah">Nama</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir_ayah">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="umur_ayah">Umur</label>
                    <input type="number" class="form-control" id="umur_ayah" name="umur_ayah" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <select id="pekerjaan_ayah" class="form-control" name="pekerjaan_ayah" required>
                    <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                    <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                    <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                    <option value="Pensiunan">04. Pensiunan</option>
                    <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                    <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                    <option value="Kepolisian RI">07. Kepolisian RI</option>
                    <option value="Perdagangan">08. Perdagangan</option>
                    <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                    <option value="Peternak">10. Peternak</option>
                    <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                    <option value="Industri">12. Industri</option>
                    <option value="Konstruksi">13. Konstruksi</option>
                    <option value="Transportasi">14. Transportasi</option>
                    <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                    <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                    <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                    <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                    <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                    <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                    <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                    <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                    <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                    <option value="Tukang Cukur">24. Tukang Cukur</option>
                    <option value="Tukang Listrik">25. Tukang Listrik</option>
                    <option value="Tukang Batu">26. Tukang Batu</option>
                    <option value="Tukang Kayu">27. Tukang Kayu</option>
                    <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                    <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                    <option value="Tukang Jahit">30. Tukang Jahit</option>
                    <option value="Tukang Gigi">31. Tukang Gigi</option>
                    <option value="Penata Rias">32. Penata Rias</option>
                    <option value="Penata Busana">33. Penata Busana</option>
                    <option value="Penata Rambut">34. Penata Rambut</option>
                    <option value="Mekanik">35. Mekanik</option>
                    <option value="Seniman">36. Seniman</option>
                    <option value="Tabib">37. Tabib</option>
                    <option value="Paraji">38. Paraji</option>
                    <option value="Perancang Busana">39. Perancang Busana</option>
                    <option value="Penerjemah">40. Penerjemah</option>
                    <option value="Imam Masjid">41. Imam Masjid</option>
                    <option value="Pendeta">42. Pendeta</option>
                    <option value="Pastor">43. Pastor</option>
                    <option value="Wartawan">44. Wartawan</option>
                    <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                    <option value="Juru Masak">46. Juru Masak</option>
                    <option value="Promotor Acara">47. Promotor Acara</option>
                    <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                    <option value="Anggota DPD">49. Anggota DPD</option>
                    <option value="Anggota BPK">50. Anggota BPK</option>
                    <option value="Presiden">51. Presiden</option>
                    <option value="Wakil Presiden">52. Wakil Presiden</option>
                    <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                    <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                    <option value="Duta Besar">55. Duta Besar</option>
                    <option value="Gubernur">56. Gubernur</option>
                    <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                    <option value="Bupati">58. Bupati</option>
                    <option value="Wakil Bupati">59. Wakil Bupati</option>
                    <option value="Walikota">60. Walikota</option>
                    <option value="Wakil Walikota">61. Wakil Walikota</option>
                    <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                    <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                    <option value="Dosen">64. Dosen</option>
                    <option value="Guru">65. Guru</option>
                    <option value="Pilot">66. Pilot</option>
                    <option value="Pengacara">67. Pengacara</option>
                    <option value="Notaris">68. Notaris</option>
                    <option value="Arsitek">69. Arsitek</option>
                    <option value="Akuntan">70. Akuntan</option>
                    <option value="Konsultan">71. Konsultan</option>
                    <option value="Dokter">72. Dokter</option>
                    <option value="Bidan">73. Bidan</option>
                    <option value="Perawat">74. Perawat</option>
                    <option value="Apoteker">75. Apoteker</option>
                    <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                    <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                    <option value="Penyiar Radio">78. Penyiar Radio</option>
                    <option value="Pelaut">79. Pelaut</option>
                    <option value="Peneliti">80. Peneliti</option>
                    <option value="Sopir">81. Sopir</option>
                    <option value="Pialang">82. Pialang</option>
                    <option value="Paranormal">83. Paranormal</option>
                    <option value="Pedagang">84. Pedagang</option>
                    <option value="Perangkat Desa">85. Perangkat Desa</option>
                    <option value="Kepala Desa">86. Kepala Desa</option>
                    <option value="Biarawati">87. Biarawati</option>
                    <option value="Wiraswasta">88. Wiraswasta</option>
                    <option value="Lainnya">89. Lainnya</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_ayah">Alamat</label>
                    <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_ayah">Dusun</label>
                    <input type="text" class="form-control" id="dusun_ayah" name="dusun_ayah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_ayah">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_ayah" name="kelurahan_ayah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_ayah">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_ayah" name="kecamatan_ayah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_ayah">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_ayah" name="kabupaten_kota_ayah"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_ayah">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_ayah" name="provinsi_ayah" required>
                </div>
            </div>

            <hr>
            <h2>Data Diri Ibu</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_ibu">NIK</label>
                    <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_ibu">Nama Lengkap Ibu</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir_ibu">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="umur_ibu">Umur</label>
                    <input type="number" class="form-control" id="umur_ibu" name="umur_ibu" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan</label>
                <select id="pekerjaan_ibu" class="form-control" name="pekerjaan_ibu" required>
                    <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                    <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                    <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                    <option value="Pensiunan">04. Pensiunan</option>
                    <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                    <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                    <option value="Kepolisian RI">07. Kepolisian RI</option>
                    <option value="Perdagangan">08. Perdagangan</option>
                    <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                    <option value="Peternak">10. Peternak</option>
                    <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                    <option value="Industri">12. Industri</option>
                    <option value="Konstruksi">13. Konstruksi</option>
                    <option value="Transportasi">14. Transportasi</option>
                    <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                    <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                    <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                    <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                    <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                    <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                    <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                    <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                    <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                    <option value="Tukang Cukur">24. Tukang Cukur</option>
                    <option value="Tukang Listrik">25. Tukang Listrik</option>
                    <option value="Tukang Batu">26. Tukang Batu</option>
                    <option value="Tukang Kayu">27. Tukang Kayu</option>
                    <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                    <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                    <option value="Tukang Jahit">30. Tukang Jahit</option>
                    <option value="Tukang Gigi">31. Tukang Gigi</option>
                    <option value="Penata Rias">32. Penata Rias</option>
                    <option value="Penata Busana">33. Penata Busana</option>
                    <option value="Penata Rambut">34. Penata Rambut</option>
                    <option value="Mekanik">35. Mekanik</option>
                    <option value="Seniman">36. Seniman</option>
                    <option value="Tabib">37. Tabib</option>
                    <option value="Paraji">38. Paraji</option>
                    <option value="Perancang Busana">39. Perancang Busana</option>
                    <option value="Penerjemah">40. Penerjemah</option>
                    <option value="Imam Masjid">41. Imam Masjid</option>
                    <option value="Pendeta">42. Pendeta</option>
                    <option value="Pastor">43. Pastor</option>
                    <option value="Wartawan">44. Wartawan</option>
                    <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                    <option value="Juru Masak">46. Juru Masak</option>
                    <option value="Promotor Acara">47. Promotor Acara</option>
                    <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                    <option value="Anggota DPD">49. Anggota DPD</option>
                    <option value="Anggota BPK">50. Anggota BPK</option>
                    <option value="Presiden">51. Presiden</option>
                    <option value="Wakil Presiden">52. Wakil Presiden</option>
                    <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                    <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                    <option value="Duta Besar">55. Duta Besar</option>
                    <option value="Gubernur">56. Gubernur</option>
                    <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                    <option value="Bupati">58. Bupati</option>
                    <option value="Wakil Bupati">59. Wakil Bupati</option>
                    <option value="Walikota">60. Walikota</option>
                    <option value="Wakil Walikota">61. Wakil Walikota</option>
                    <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                    <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                    <option value="Dosen">64. Dosen</option>
                    <option value="Guru">65. Guru</option>
                    <option value="Pilot">66. Pilot</option>
                    <option value="Pengacara">67. Pengacara</option>
                    <option value="Notaris">68. Notaris</option>
                    <option value="Arsitek">69. Arsitek</option>
                    <option value="Akuntan">70. Akuntan</option>
                    <option value="Konsultan">71. Konsultan</option>
                    <option value="Dokter">72. Dokter</option>
                    <option value="Bidan">73. Bidan</option>
                    <option value="Perawat">74. Perawat</option>
                    <option value="Apoteker">75. Apoteker</option>
                    <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                    <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                    <option value="Penyiar Radio">78. Penyiar Radio</option>
                    <option value="Pelaut">79. Pelaut</option>
                    <option value="Peneliti">80. Peneliti</option>
                    <option value="Sopir">81. Sopir</option>
                    <option value="Pialang">82. Pialang</option>
                    <option value="Paranormal">83. Paranormal</option>
                    <option value="Pedagang">84. Pedagang</option>
                    <option value="Perangkat Desa">85. Perangkat Desa</option>
                    <option value="Kepala Desa">86. Kepala Desa</option>
                    <option value="Biarawati">87. Biarawati</option>
                    <option value="Wiraswasta">88. Wiraswasta</option>
                    <option value="Lainnya">89. Lainnya</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_ibu">Alamat</label>
                    <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_ibu">Dusun</label>
                    <input type="text" class="form-control" id="dusun_ibu" name="dusun_ibu" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_ibu">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_ibu" name="kelurahan_ibu" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_ibu">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_ibu" name="kecamatan_ibu" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_ibu">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_ibu" name="kabupaten_kota_ibu"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_ibu">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_ibu" name="provinsi_ibu" required>
                </div>
            </div>

            <hr>
            <h2>Data Diri Pelapor</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_pelapor">NIK</label>
                    <input type="text" class="form-control" id="nik_pelapor" name="nik_pelapor" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_pelapor">Nama Lengkap Pelapor</label>
                    <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir_pelapor">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_pelapor" name="tanggal_lahir_pelapor" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="umur_pelapor">Umur</label>
                    <input type="number" class="form-control" id="umur_pelapor" name="umur_pelapor" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan_pelapor">Pekerjaan</label>
                <select id="pekerjaan_pelapor" class="form-control" name="pekerjaan_pelapor" required>
                    <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                    <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                    <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                    <option value="Pensiunan">04. Pensiunan</option>
                    <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                    <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                    <option value="Kepolisian RI">07. Kepolisian RI</option>
                    <option value="Perdagangan">08. Perdagangan</option>
                    <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                    <option value="Peternak">10. Peternak</option>
                    <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                    <option value="Industri">12. Industri</option>
                    <option value="Konstruksi">13. Konstruksi</option>
                    <option value="Transportasi">14. Transportasi</option>
                    <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                    <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                    <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                    <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                    <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                    <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                    <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                    <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                    <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                    <option value="Tukang Cukur">24. Tukang Cukur</option>
                    <option value="Tukang Listrik">25. Tukang Listrik</option>
                    <option value="Tukang Batu">26. Tukang Batu</option>
                    <option value="Tukang Kayu">27. Tukang Kayu</option>
                    <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                    <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                    <option value="Tukang Jahit">30. Tukang Jahit</option>
                    <option value="Tukang Gigi">31. Tukang Gigi</option>
                    <option value="Penata Rias">32. Penata Rias</option>
                    <option value="Penata Busana">33. Penata Busana</option>
                    <option value="Penata Rambut">34. Penata Rambut</option>
                    <option value="Mekanik">35. Mekanik</option>
                    <option value="Seniman">36. Seniman</option>
                    <option value="Tabib">37. Tabib</option>
                    <option value="Paraji">38. Paraji</option>
                    <option value="Perancang Busana">39. Perancang Busana</option>
                    <option value="Penerjemah">40. Penerjemah</option>
                    <option value="Imam Masjid">41. Imam Masjid</option>
                    <option value="Pendeta">42. Pendeta</option>
                    <option value="Pastor">43. Pastor</option>
                    <option value="Wartawan">44. Wartawan</option>
                    <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                    <option value="Juru Masak">46. Juru Masak</option>
                    <option value="Promotor Acara">47. Promotor Acara</option>
                    <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                    <option value="Anggota DPD">49. Anggota DPD</option>
                    <option value="Anggota BPK">50. Anggota BPK</option>
                    <option value="Presiden">51. Presiden</option>
                    <option value="Wakil Presiden">52. Wakil Presiden</option>
                    <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                    <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                    <option value="Duta Besar">55. Duta Besar</option>
                    <option value="Gubernur">56. Gubernur</option>
                    <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                    <option value="Bupati">58. Bupati</option>
                    <option value="Wakil Bupati">59. Wakil Bupati</option>
                    <option value="Walikota">60. Walikota</option>
                    <option value="Wakil Walikota">61. Wakil Walikota</option>
                    <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                    <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                    <option value="Dosen">64. Dosen</option>
                    <option value="Guru">65. Guru</option>
                    <option value="Pilot">66. Pilot</option>
                    <option value="Pengacara">67. Pengacara</option>
                    <option value="Notaris">68. Notaris</option>
                    <option value="Arsitek">69. Arsitek</option>
                    <option value="Akuntan">70. Akuntan</option>
                    <option value="Konsultan">71. Konsultan</option>
                    <option value="Dokter">72. Dokter</option>
                    <option value="Bidan">73. Bidan</option>
                    <option value="Perawat">74. Perawat</option>
                    <option value="Apoteker">75. Apoteker</option>
                    <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                    <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                    <option value="Penyiar Radio">78. Penyiar Radio</option>
                    <option value="Pelaut">79. Pelaut</option>
                    <option value="Peneliti">80. Peneliti</option>
                    <option value="Sopir">81. Sopir</option>
                    <option value="Pialang">82. Pialang</option>
                    <option value="Paranormal">83. Paranormal</option>
                    <option value="Pedagang">84. Pedagang</option>
                    <option value="Perangkat Desa">85. Perangkat Desa</option>
                    <option value="Kepala Desa">86. Kepala Desa</option>
                    <option value="Biarawati">87. Biarawati</option>
                    <option value="Wiraswasta">88. Wiraswasta</option>
                    <option value="Lainnya">89. Lainnya</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_pelapor">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pelapor" name="alamat_pelapor" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_pelapor">Dusun</label>
                    <input type="text" class="form-control" id="dusun_pelapor" name="dusun_pelapor" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_pelapor">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_pelapor" name="kelurahan_pelapor" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_pelapor">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_pelapor" name="kecamatan_pelapor" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_pelapor">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_pelapor" name="kabupaten_kota_pelapor"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_pelapor">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_pelapor" name="provinsi_pelapor" required>
                </div>
            </div>

            <hr>
            <h2>Data Diri Saksi 1</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_saksi1">NIK Saksi 1</label>
                    <input type="text" class="form-control" id="nik_saksi1" name="nik_saksi1" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_saksi1">Nama Lengkap Saksi 1</label>
                    <input type="text" class="form-control" id="nama_saksi1" name="nama_saksi1" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir_saksi1">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_saksi1" name="tanggal_lahir_saksi1" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="umur_saksi1">Umur</label>
                    <input type="number" class="form-control" id="umur_saksi1" name="umur_saksi1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control" name="pekerjaan_saksi1" required>
                    <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                    <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                    <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                    <option value="Pensiunan">04. Pensiunan</option>
                    <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                    <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                    <option value="Kepolisian RI">07. Kepolisian RI</option>
                    <option value="Perdagangan">08. Perdagangan</option>
                    <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                    <option value="Peternak">10. Peternak</option>
                    <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                    <option value="Industri">12. Industri</option>
                    <option value="Konstruksi">13. Konstruksi</option>
                    <option value="Transportasi">14. Transportasi</option>
                    <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                    <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                    <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                    <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                    <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                    <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                    <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                    <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                    <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                    <option value="Tukang Cukur">24. Tukang Cukur</option>
                    <option value="Tukang Listrik">25. Tukang Listrik</option>
                    <option value="Tukang Batu">26. Tukang Batu</option>
                    <option value="Tukang Kayu">27. Tukang Kayu</option>
                    <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                    <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                    <option value="Tukang Jahit">30. Tukang Jahit</option>
                    <option value="Tukang Gigi">31. Tukang Gigi</option>
                    <option value="Penata Rias">32. Penata Rias</option>
                    <option value="Penata Busana">33. Penata Busana</option>
                    <option value="Penata Rambut">34. Penata Rambut</option>
                    <option value="Mekanik">35. Mekanik</option>
                    <option value="Seniman">36. Seniman</option>
                    <option value="Tabib">37. Tabib</option>
                    <option value="Paraji">38. Paraji</option>
                    <option value="Perancang Busana">39. Perancang Busana</option>
                    <option value="Penerjemah">40. Penerjemah</option>
                    <option value="Imam Masjid">41. Imam Masjid</option>
                    <option value="Pendeta">42. Pendeta</option>
                    <option value="Pastor">43. Pastor</option>
                    <option value="Wartawan">44. Wartawan</option>
                    <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                    <option value="Juru Masak">46. Juru Masak</option>
                    <option value="Promotor Acara">47. Promotor Acara</option>
                    <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                    <option value="Anggota DPD">49. Anggota DPD</option>
                    <option value="Anggota BPK">50. Anggota BPK</option>
                    <option value="Presiden">51. Presiden</option>
                    <option value="Wakil Presiden">52. Wakil Presiden</option>
                    <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                    <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                    <option value="Duta Besar">55. Duta Besar</option>
                    <option value="Gubernur">56. Gubernur</option>
                    <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                    <option value="Bupati">58. Bupati</option>
                    <option value="Wakil Bupati">59. Wakil Bupati</option>
                    <option value="Walikota">60. Walikota</option>
                    <option value="Wakil Walikota">61. Wakil Walikota</option>
                    <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                    <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                    <option value="Dosen">64. Dosen</option>
                    <option value="Guru">65. Guru</option>
                    <option value="Pilot">66. Pilot</option>
                    <option value="Pengacara">67. Pengacara</option>
                    <option value="Notaris">68. Notaris</option>
                    <option value="Arsitek">69. Arsitek</option>
                    <option value="Akuntan">70. Akuntan</option>
                    <option value="Konsultan">71. Konsultan</option>
                    <option value="Dokter">72. Dokter</option>
                    <option value="Bidan">73. Bidan</option>
                    <option value="Perawat">74. Perawat</option>
                    <option value="Apoteker">75. Apoteker</option>
                    <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                    <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                    <option value="Penyiar Radio">78. Penyiar Radio</option>
                    <option value="Pelaut">79. Pelaut</option>
                    <option value="Peneliti">80. Peneliti</option>
                    <option value="Sopir">81. Sopir</option>
                    <option value="Pialang">82. Pialang</option>
                    <option value="Paranormal">83. Paranormal</option>
                    <option value="Pedagang">84. Pedagang</option>
                    <option value="Perangkat Desa">85. Perangkat Desa</option>
                    <option value="Kepala Desa">86. Kepala Desa</option>
                    <option value="Biarawati">87. Biarawati</option>
                    <option value="Wiraswasta">88. Wiraswasta</option>
                    <option value="Lainnya">89. Lainnya</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_saksi1">Alamat</label>
                    <input type="text" class="form-control" id="alamat_saksi1" name="alamat_saksi1" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_saksi1">Dusun</label>
                    <input type="text" class="form-control" id="dusun_saksi1" name="dusun_saksi1" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_saksi1">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_saksi1" name="kelurahan_saksi1" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_saksi1">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_saksi1" name="kecamatan_saksi1" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_saksi1">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_saksi1" name="kabupaten_kota_saksi1"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_saksi1">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_saksi1" name="provinsi_saksi1" required>
                </div>
            </div>

            <hr>
            <h2>Data Diri Saksi 2</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nik_saksi2">NIK Saksi 2</label>
                    <input type="text" class="form-control" id="nik_saksi2" name="nik_saksi2" required>
                </div>
                <div class="form-group col-md-8">
                    <label for="nama_saksi2">Nama Lengkap Saksi 2</label>
                    <input type="text" class="form-control" id="nama_saksi2" name="nama_saksi2" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir_saksi2">Tanggal/Bulan/Tahun Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir_saksi2" name="tanggal_lahir_saksi2">
                </div>
                <div class="form-group col-md-6">
                    <label for="umur_saksi2">Umur</label>
                    <input type="number" class="form-control" id="umur_saksi2" name="umur_saksi2" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control" name="pekerjaan_saksi2" required>
                    <option value="Belum/Tidak Bekerja">01. Belum/Tidak Bekerja</option>
                    <option value="Mengurus Rumah Tangga">02. Mengurus Rumah Tangga</option>
                    <option value="Pelajar/Mahasiswa">03. Pelajar/Mahasiswa</option>
                    <option value="Pensiunan">04. Pensiunan</option>
                    <option value="Pegawai Negeri Sipil">05. Pegawai Negeri Sipil</option>
                    <option value="Tentara Nasional Indonesia">06. Tentara Nasional Indonesia</option>
                    <option value="Kepolisian RI">07. Kepolisian RI</option>
                    <option value="Perdagangan">08. Perdagangan</option>
                    <option value="Petani/Pekebun">09. Petani/Pekebun</option>
                    <option value="Peternak">10. Peternak</option>
                    <option value="Nelayan Perikanan">11. Nelayan Perikanan</option>
                    <option value="Industri">12. Industri</option>
                    <option value="Konstruksi">13. Konstruksi</option>
                    <option value="Transportasi">14. Transportasi</option>
                    <option value="Karyawan Swasta">15. Karyawan Swasta</option>
                    <option value="Karyawan BUMN">16. Karyawan BUMN</option>
                    <option value="Karyawan BUMD">17. Karyawan BUMD</option>
                    <option value="Karyawan Honorer">18. Karyawan Honorer</option>
                    <option value="Buruh Harian Lepas">19. Buruh Harian Lepas</option>
                    <option value="Buruh Tani/Perkebunan">20. Buruh Tani/Perkebunan</option>
                    <option value="Buruh Nelayan/Perikanan">21. Buruh Nelayan/Perikanan</option>
                    <option value="Buruh Peternakan">22. Buruh Peternakan</option>
                    <option value="Pembantu Rumah Tangga">23. Pembantu Rumah Tangga</option>
                    <option value="Tukang Cukur">24. Tukang Cukur</option>
                    <option value="Tukang Listrik">25. Tukang Listrik</option>
                    <option value="Tukang Batu">26. Tukang Batu</option>
                    <option value="Tukang Kayu">27. Tukang Kayu</option>
                    <option value="Tukang Sol Sepatu">28. Tukang Sol Sepatu</option>
                    <option value="Tukang Las/Pandai Besi">29. Tukang Las/Pandai Besi</option>
                    <option value="Tukang Jahit">30. Tukang Jahit</option>
                    <option value="Tukang Gigi">31. Tukang Gigi</option>
                    <option value="Penata Rias">32. Penata Rias</option>
                    <option value="Penata Busana">33. Penata Busana</option>
                    <option value="Penata Rambut">34. Penata Rambut</option>
                    <option value="Mekanik">35. Mekanik</option>
                    <option value="Seniman">36. Seniman</option>
                    <option value="Tabib">37. Tabib</option>
                    <option value="Paraji">38. Paraji</option>
                    <option value="Perancang Busana">39. Perancang Busana</option>
                    <option value="Penerjemah">40. Penerjemah</option>
                    <option value="Imam Masjid">41. Imam Masjid</option>
                    <option value="Pendeta">42. Pendeta</option>
                    <option value="Pastor">43. Pastor</option>
                    <option value="Wartawan">44. Wartawan</option>
                    <option value="Ustadz/Mubaligh">45. Ustadz/Mubaligh</option>
                    <option value="Juru Masak">46. Juru Masak</option>
                    <option value="Promotor Acara">47. Promotor Acara</option>
                    <option value="Anggota DPR-RI">48. Anggota DPR-RI</option>
                    <option value="Anggota DPD">49. Anggota DPD</option>
                    <option value="Anggota BPK">50. Anggota BPK</option>
                    <option value="Presiden">51. Presiden</option>
                    <option value="Wakil Presiden">52. Wakil Presiden</option>
                    <option value="Anggota Mahkamah Konstitusi">53. Anggota Mahkamah Konstitusi</option>
                    <option value="Anggota Kabinet/Kementrian">54. Anggota Kabinet/Kementrian</option>
                    <option value="Duta Besar">55. Duta Besar</option>
                    <option value="Gubernur">56. Gubernur</option>
                    <option value="Wakil Gubernur">57. Wakil Gubernur</option>
                    <option value="Bupati">58. Bupati</option>
                    <option value="Wakil Bupati">59. Wakil Bupati</option>
                    <option value="Walikota">60. Walikota</option>
                    <option value="Wakil Walikota">61. Wakil Walikota</option>
                    <option value="Anggota DPRD Provinsi">62. Anggota DPRD Provinsi</option>
                    <option value="Anggota DPRD Kabupaten/Kota">63. Anggota DPRD Kabupaten/Kota</option>
                    <option value="Dosen">64. Dosen</option>
                    <option value="Guru">65. Guru</option>
                    <option value="Pilot">66. Pilot</option>
                    <option value="Pengacara">67. Pengacara</option>
                    <option value="Notaris">68. Notaris</option>
                    <option value="Arsitek">69. Arsitek</option>
                    <option value="Akuntan">70. Akuntan</option>
                    <option value="Konsultan">71. Konsultan</option>
                    <option value="Dokter">72. Dokter</option>
                    <option value="Bidan">73. Bidan</option>
                    <option value="Perawat">74. Perawat</option>
                    <option value="Apoteker">75. Apoteker</option>
                    <option value="Psikiater/Psikolog">76. Psikiater/Psikolog</option>
                    <option value="Penyiar Televisi">77. Penyiar Televisi</option>
                    <option value="Penyiar Radio">78. Penyiar Radio</option>
                    <option value="Pelaut">79. Pelaut</option>
                    <option value="Peneliti">80. Peneliti</option>
                    <option value="Sopir">81. Sopir</option>
                    <option value="Pialang">82. Pialang</option>
                    <option value="Paranormal">83. Paranormal</option>
                    <option value="Pedagang">84. Pedagang</option>
                    <option value="Perangkat Desa">85. Perangkat Desa</option>
                    <option value="Kepala Desa">86. Kepala Desa</option>
                    <option value="Biarawati">87. Biarawati</option>
                    <option value="Wiraswasta">88. Wiraswasta</option>
                    <option value="Lainnya">89. Lainnya</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="alamat_saksi2">Alamat</label>
                    <input type="text" class="form-control" id="alamat_saksi2" name="alamat_saksi2" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dusun_saksi2">Dusun</label>
                    <input type="text" class="form-control" id="dusun_saksi2" name="dusun_saksi2" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelurahan_saksi2">Kelurahan</label>
                    <input type="text" class="form-control" id="kelurahan_saksi2" name="kelurahan_saksi2" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kecamatan_saksi2">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan_saksi2" name="kecamatan_saksi2" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kabupaten_kota_saksi2">Kabupaten/Kota</label>
                    <input type="text" class="form-control" id="kabupaten_kota_saksi2" name="kabupaten_kota_saksi2"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="provinsi_saksi2">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi_saksi2" name="provinsi_saksi2" required>
                </div>
            </div>
            <div class="form-row d-flex justify-content-center mt-3 mb-4">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection
