@extends('layouts.cobalayout')
@section('title','Form KK')

@section('content')
<div class="container" style="margin-top: 100px">
    <div class="row px-0">
        @include('component.alertlayanan')
    </div>
    <h1>FORMULIR ISIAN KARTU KELUARGA</h1>
    <form action="formkk/store" method="POST">
        @csrf
        <h2>Data Kepala Keluarga</h2>
        <div class="form-group">
            <label for="nama_kepala">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_kepala" name="nama_kepala" required>
        </div>
        <div class="form-group">
            <label for="dusun_kepala">Dusun</label>
            <input type="text" class="form-control" id="dusun_kepala" name="dusun_kepala" required>
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="number" class="form-control" id="kode_pos" name="kode_pos" required>
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
        </div>
        
        <div class="form-group">
            <label for="kabupaten_kota">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten_kota" required>
        </div>

        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="rt_kepala">RT</label>
                <input type="number" class="form-control" id="rt_kepala" name="rt_kepala" required>
            </div>
            <div class="form-group col-md-6">
                <label for="rw_kepala">RW</label>
                <input type="number" class="form-control" id="rw_kepala" name="rw_kepala" required>
            </div>
        </div>
        <h2> Data Keluarga </h2>
            <div class="form-group">
                <label for="nama_anggota">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required>
            </div>
        <div class="form-group">
            <label for="no_ktp">Nomor KTP/NIK</label>
            <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="no_paspor">Nomor Paspor</label>
                <input type="text" class="form-control" id="no_paspor" name="no_paspor">
            </div>
            <div class="form-group col-md-6">
                <label for="nomor_kitap">Nomor KITAP</label>
                <input type="text" class="form-control" id="nomor_kitap" name="nomor_kitap">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="LAKI-LAKI">Laki-Laki</option>
                    <option value="PEREMPUAN">Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="Tempat Lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group col-md-4">
                <label for="tanggal_lahir">Tanggal/Bulan/Tahun Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
        </div>
        <div class="form-group">
            <label for="golongan_darah">Golongan Darah</label>
            <select id="golongan_darah" class="form-control" name="golongan_darah">
                <option selected>Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="TIDAK TAHU">TIDAK TAHU</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select id="agama" name="agama" class="form-control">
                <option selected>Agama</option>
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="HINDU">HINDU</option>
                <option value="BUDDHA">BUDDHA</option>
                <option value="KONGHUCU">KONGHUCU</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="status_perkawinan">Status Perkawinan</label>
                <select id="status_perkawinan" class="form-control" name="status_perkawinan">
                    <option selected>Status Perkawinan</option>
                    <option value="BELUM KAWIN">Belum Kawin</option>
                    <option value="KAWIN TERCATAT">Kawin Tercatat</option>
                    <option value="CERAI HIDUP">Cerai Hidup</option>
                    <option value="CERAI MATI">Cerai Mati</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="tanggal_perkawinan">Tanggal Perkawinan</label>
                <input type="date" class="form-control" id="tanggal_perkawinan" name="tanggal_perkawinan">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="status_hubungan">Status Hubungan dalam Keluarga</label>
                <select id="status_hubungan" class="form-control" name="status_hubungan">
                    <option selected>Status Hubungan dalam Keluarga</option>
                    <option value="KEPALA KELUARGA">Kepala Keluarga</option>
                    <option value="SUAMI">Suami</option>
                    <option value="ISTRI">Istri</option>
                    <option value="ANAK">Anak</option>
                    <option value="MENANTU">Menantu</option>
                    <option value="CUCU">Cucu</option>
                    <option value="ORANG TUA">Orangtua</option>
                    <option value="MERTUA">Mertua</option>
                    <option value="FAMILI LAIN">Family Lain</option>
                    <option value="PEMBANTU">Pembantu</option>
                    <option value="LAINNYA">Lainnya</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select id="kewarganegaraan" class="form-control" name="kewarganegaraan">
                    <option selected>kewarganegaraan</option>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select id="pendidikan_terakhir" class="form-control" name="pendidikan_terakhir">
                    <option selected>Pendidikan Terakhir</option>
                    <option value="TIDAK/BELUM SEKOLAH">Tidak/Belum Sekolah</option>
                    <option value="BELUM TAMAT SD/SEDERAJAT">Belum Tamat SD/sederajat</option>
                    <option value="TAMAT SD/SEDERAJAT">Tamat SD/Sederajat</option>
                    <option value="SLTP/SEDERAJAT">SLTP/Sederajat</option>
                    <option value="SLTA/SEDERAJAT">SLTA/Sederajat</option>
                    <option value="DIPLOMA I/II">Diploma I/II</option>
                    <option value="AKADEMI/DIPLOMA III/SARJANA MUDA">Akademi/Diploma III/Sarjana Muda</option>
                    <option value="DIPLOMA IV/STRATA I">Diploma IV/Strata I</option>
                    <option value="STRATA II">Strata II</option>
                    <option value="STRATA III">Strata III</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control" name="pekerjaan">
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
            <div class="form-group col-md-8">
                <label for="nama_ibu">Nama Lengkap Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nama_ayah">Nama Lengkap Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
            </div>
        </div>
        <div class="form-row d-flex justify-content-center mt-3 mb-4">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
@endsection