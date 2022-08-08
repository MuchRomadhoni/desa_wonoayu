@extends('layouts.cobalayout')
@section('title','Form KTP')

@section('content')
<div class="container" style="margin-top: 100px">
    <div class="row px-0">
        @include('component.alertlayanan')
    </div>

    <h1>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK ELEKTRONIK (KTP-EL)</h1>
    <br>
    <h4>Pilih jenis permohonan ktp kemudian persiapkan prasyarat permohonan setelah mengisi form dibawah ini</h4>
    <form action="formktp/store" method="POST">
        @csrf
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="permohonan_ktp" id="permohonan_ktp" value="KTP Baru" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <label class="form-check-label" for="ktpbaru">
                            KTP BARU
                        </label>
                    </div>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="mt-2">
                            <h4>Persyaratan Pengajuan e-KTP Baru</h4>
                            <table class="table justify-content-center">
                                <thead>
                                    <th>No</th>
                                    <th>Persyaratan</th>
                                </thead>
                                <tbody>
                                    <th>1
                                        <br>
                                        2
                                        <br>
                                        3
                                    </th>
                                    <th>
                                        <p>111111111111111111111111111111
                                            <br>
                                            222222222222222222222
                                            <br>
                                            333333333333333333333333
                                        </p>
                                    </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="form-check">
                        <input class="form-check-input collapsed" type="radio" name="permohonan_ktp" id="permohonan_ktp" value="Perpanjangan KTP" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <label class="form-check-label" for="perpanjanganktp">
                            PERPANJANGAN KTP
                        </label>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="mt-2">
                            <h4>Persyaratan Pengajuan Perpanjangan e-KTP</h4>
                            <table class="table justify-content-center">
                                <thead>
                                    <th>No</th>
                                    <th>Persyaratan</th>
                                </thead>
                                <tbody>
                                    <th>1
                                        <br>
                                        2
                                        <br>
                                        3
                                    </th>
                                    <th>
                                        <p>Surat Pengantar dari Desa
                                            <br>
                                            Melampirkan e-KTP yang Lama (ASLI)
                                            <br>
                                            Fotokopi KK Terbaru (KK yang Sudah Diperbarui)
                                        </p>
                                    </th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <div class="form-check">
                        <input class="form-check-input collapsed" type="radio" name="permohonan_ktp" id="permohonan_ktp" value="Penggantian Data" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <label class="form-check-label" for="penggantiandata">
                            PENGGANTIAN DATA
                        </label>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="mt-2">
                            <h4>Persyaratan Pengajuan Perpanjangan e-KTP</h4>
                            <table class="table justify-content-center">
                                <thead>
                                    <th>No</th>
                                    <th>Persyaratan</th>
                                </thead>
                                <tbody>
                                    <th>1
                                        <br>
                                        2
                                        <br>
                                        3
                                    </th>
                                    <th>
                                        <p>Surat Pengantar dari Desa
                                            <br>
                                            Melampirkan e-KTP yang Lama (ASLI)
                                            <br>
                                            Fotokopi KK Terbaru (KK yang Sudah Diperbarui)
                                        </p>
                                    </th>
                                </tbody>
                            </table>
                        </div>
                </div>
                </div>
            </div>
        </div>

        

        @error('permohonan_ktp')
        <div class="form-row text-danger">
            Permohonan harus diisi dengan benar
        </div>
        @enderror

        <br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class='form-control' id="nama_lengkap" name="nama_lengkap">
                @error('nama_lengkap')
                <div class="form-row text-danger">
                    Nama harus diisi dengan benar
                </div>
                @enderror
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="no_kk">Nomor KK</label>
                <input min="0" type="number" class='form-control' id="no_kk" name="no_kk"
                    style="-webkit-appearance: none" margin=" 0">
                <div class="form-row">
                    @error('no_kk')
                    <div class="text-danger mt-0">
                        Nomor KK harus diisi dengan benar
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="nik">NIK</label>
                <input min="0" type="number" class='form-control' id="nik" name="nik"
                    style="-webkit-appearance: none; margin=" 0">
                @error('nik')
                <div class="text-danger mt-0">
                    NIK harus diisi dengan benar
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <input type="text" class='form-control' id="alamat" name="alamat">
                @error('alamat')
                <div class="text-danger mt-0">
                    Alamat harus diisi dengan benar
                </div>
                @enderror
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="rt">RT</label>
                <input type="text" class='form-control' id="rt" name="rt">
                @error('rt')
                <div class="text-danger">
                    RT harus diisi dengan benar
                </div>
                @enderror
            </div>
            <div class="form-group col-md-1">
                <label for="rw">RW</label>
                <input type="text" class='form-control' id="rw" name="rw">
                @error('rw')
                <div class="text-danger">
                    RW harus diisi dengan benar
                </div>
                @enderror
            </div>
        </div>


        <div class="form-row d-flex justify-content-center mb-4">
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </div>
    </form>
</div>
@endsection