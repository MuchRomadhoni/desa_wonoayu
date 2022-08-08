@extends('layouts.cobalayout')
@section('title','Form Surat Pernyataan')

@section('content')
<div class="container" style="margin-top: 100px">
    <h1>SURAT PERNYATAAN KEMATIAN</h1>
    <form>
        <h2>Yang bertanda tangan di bawah ini saya:</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Lengkap</label>
                <input type="email" class="form-control" id="nama">
            </div>
            <div class="form-group col-md-6">
                <label for="no">NIK</label>
                <input type="text" class="form-control" id="no">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" id="Umur">
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control">
                    <option>01. Belum/Tidak Bekerja</option>
                    <option>02. Mengurus Rumah Tangga</option>
                    <option>03. Pelajar/Mahasiswa</option>
                    <option>04. Pensiunan</option>
                    <option>05. Pegawai Negeri Sipil</option>
                    <option>06. Tentara Nasional Indonesia</option>
                    <option>07. Kepolisian RI</option>
                    <option>08. Perdagangan</option>
                    <option>09. Petani/Pekebun</option>
                    <option>10. Peternak</option>
                    <option>11. Nelayan Perikanan</option>
                    <option>12. Industri</option>
                    <option>13. Konstruksi</option>
                    <option>14. Transportasi</option>
                    <option>15. Karyawan Swasta</option>
                    <option>16. Karyawan BUMN</option>
                    <option>17. Karyawan BUMD</option>
                    <option>18. Karyawan Honorer</option>
                    <option>19. Buruh Harian Lepas</option>
                    <option>20. Buruh Tani/Perkebunan</option>
                    <option>21. Buruh Nelayan/Perikanan</option>
                    <option>22. Buruh Peternakan</option>
                    <option>23. Pembantu Rumah Tangga</option>
                    <option>24. Tukang Cukur</option>
                    <option>25. Tukang Listrik</option>
                    <option>26. Tukang Batu</option>
                    <option>27. Tukang Kayu</option>
                    <option>28. Tukang Sol Sepatu</option>
                    <option>29. Tukang Las/Pandai Besi</option>
                    <option>30. Tukang Jahit</option>
                    <option>31. Tukang Gigi</option>
                    <option>32. Penata Rias</option>
                    <option>33. Penata Busana</option>
                    <option>34. Penata Rambut</option>
                    <option>35. Mekanik</option>
                    <option>36. Seniman</option>
                    <option>37. Tabib</option>
                    <option>38. Paraji</option>
                    <option>39. Perancang Busana</option>
                    <option>40. Penerjemah</option>
                    <option>41. Imam Masjid</option>
                    <option>42. Pendeta</option>
                    <option>43. Pastor</option>
                    <option>44. Wartawan</option>
                    <option>45. Ustadz/Mubaligh</option>
                    <option>46. Juru Masak</option>
                    <option>47. Promotor Acara</option>
                    <option>48. Anggota DPR-RI</option>
                    <option>49. Anggota DPD</option>
                    <option>50. Anggota BPK</option>
                    <option>51. Presiden</option>
                    <option>52. Wakil Presiden</option>
                    <option>53. Anggota Mahkamah Konstitusi</option>
                    <option>54. Anggota Kabinet/Kementrian</option>
                    <option>55. Duta Besar</option>
                    <option>56. Gubernur</option>
                    <option>57. Wakil Gubernur</option>
                    <option>58. Bupati</option>
                    <option>59. Wakil Bupati</option>
                    <option>60. Walikota</option>
                    <option>61. Wakil Walikota</option>
                    <option>62. Anggota DPRD Provinsi</option>
                    <option>63. Anggota DPRD Kabupaten/Kota</option>
                    <option>64. Dosen</option>
                    <option>65. Guru</option>
                    <option>66. Pilot</option>
                    <option>67. Pengacara</option>
                    <option>68. Notaris</option>
                    <option>69. Arsitek</option>
                    <option>70. Akuntan</option>
                    <option>71. Konsultan</option>
                    <option>72. Dokter</option>
                    <option>73. Bidan</option>
                    <option>74. Perawat</option>
                    <option>75. Apoteker</option>
                    <option>76. Psikiater/Psikolog</option>
                    <option>77. Penyiar Televisir</option>
                    <option>78. Penyiar Radio</option>
                    <option>79. Pelaut</option>
                    <option>80. Peneliti</option>
                    <option>81. Sopir</option>
                    <option>82. Pialang</option>
                    <option>83. Paranormal</option>
                    <option>84. Pedagang</option>
                    <option>85. Perangkat Desa</option>
                    <option>86. Kepala Desa</option>
                    <option>87. Biarawati</option>
                    <option>88. Wiraswasta</option>
                    <option>89. Lainnya</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-group">
            <label for="status">Status Hubungan Dalam Keluarga</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>

        <h2>Dengan ini menyatakan bahwa yang tersebut di bawah ini:</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Lengkap</label>
                <input type="email" class="form-control" id="nama">
            </div>
            <div class="form-group col-md-6">
                <label for="no">NIK</label>
                <input type="text" class="form-control" id="no">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" id="Umur">
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <select id="pekerjaan" class="form-control">
                    <option>01. Belum/Tidak Bekerja</option>
                    <option>02. Mengurus Rumah Tangga</option>
                    <option>03. Pelajar/Mahasiswa</option>
                    <option>04. Pensiunan</option>
                    <option>05. Pegawai Negeri Sipil</option>
                    <option>06. Tentara Nasional Indonesia</option>
                    <option>07. Kepolisian RI</option>
                    <option>08. Perdagangan</option>
                    <option>09. Petani/Pekebun</option>
                    <option>10. Peternak</option>
                    <option>11. Nelayan Perikanan</option>
                    <option>12. Industri</option>
                    <option>13. Konstruksi</option>
                    <option>14. Transportasi</option>
                    <option>15. Karyawan Swasta</option>
                    <option>16. Karyawan BUMN</option>
                    <option>17. Karyawan BUMD</option>
                    <option>18. Karyawan Honorer</option>
                    <option>19. Buruh Harian Lepas</option>
                    <option>20. Buruh Tani/Perkebunan</option>
                    <option>21. Buruh Nelayan/Perikanan</option>
                    <option>22. Buruh Peternakan</option>
                    <option>23. Pembantu Rumah Tangga</option>
                    <option>24. Tukang Cukur</option>
                    <option>25. Tukang Listrik</option>
                    <option>26. Tukang Batu</option>
                    <option>27. Tukang Kayu</option>
                    <option>28. Tukang Sol Sepatu</option>
                    <option>29. Tukang Las/Pandai Besi</option>
                    <option>30. Tukang Jahit</option>
                    <option>31. Tukang Gigi</option>
                    <option>32. Penata Rias</option>
                    <option>33. Penata Busana</option>
                    <option>34. Penata Rambut</option>
                    <option>35. Mekanik</option>
                    <option>36. Seniman</option>
                    <option>37. Tabib</option>
                    <option>38. Paraji</option>
                    <option>39. Perancang Busana</option>
                    <option>40. Penerjemah</option>
                    <option>41. Imam Masjid</option>
                    <option>42. Pendeta</option>
                    <option>43. Pastor</option>
                    <option>44. Wartawan</option>
                    <option>45. Ustadz/Mubaligh</option>
                    <option>46. Juru Masak</option>
                    <option>47. Promotor Acara</option>
                    <option>48. Anggota DPR-RI</option>
                    <option>49. Anggota DPD</option>
                    <option>50. Anggota BPK</option>
                    <option>51. Presiden</option>
                    <option>52. Wakil Presiden</option>
                    <option>53. Anggota Mahkamah Konstitusi</option>
                    <option>54. Anggota Kabinet/Kementrian</option>
                    <option>55. Duta Besar</option>
                    <option>56. Gubernur</option>
                    <option>57. Wakil Gubernur</option>
                    <option>58. Bupati</option>
                    <option>59. Wakil Bupati</option>
                    <option>60. Walikota</option>
                    <option>61. Wakil Walikota</option>
                    <option>62. Anggota DPRD Provinsi</option>
                    <option>63. Anggota DPRD Kabupaten/Kota</option>
                    <option>64. Dosen</option>
                    <option>65. Guru</option>
                    <option>66. Pilot</option>
                    <option>67. Pengacara</option>
                    <option>68. Notaris</option>
                    <option>69. Arsitek</option>
                    <option>70. Akuntan</option>
                    <option>71. Konsultan</option>
                    <option>72. Dokter</option>
                    <option>73. Bidan</option>
                    <option>74. Perawat</option>
                    <option>75. Apoteker</option>
                    <option>76. Psikiater/Psikolog</option>
                    <option>77. Penyiar Televisir</option>
                    <option>78. Penyiar Radio</option>
                    <option>79. Pelaut</option>
                    <option>80. Peneliti</option>
                    <option>81. Sopir</option>
                    <option>82. Pialang</option>
                    <option>83. Paranormal</option>
                    <option>84. Pedagang</option>
                    <option>85. Perangkat Desa</option>
                    <option>86. Kepala Desa</option>
                    <option>87. Biarawati</option>
                    <option>88. Wiraswasta</option>
                    <option>89. Lainnya</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Alamat</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tanggal">Telah meninggal dunia pada tanggal</label>
                <input type="date" class="form-control" id="tanggal">
            </div>
            <div class="form-group col-md-6">
                <label for="pukul">Pukul</label>
                <input type="time" class="form-control" id="pukul">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Di alamat</label>
            <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-row d-flex justify-content-center mt-3 mb-4">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
@endsection