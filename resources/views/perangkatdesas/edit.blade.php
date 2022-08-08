@extends('layouts.adminapp')
@section('title','Edit Profile')

@section('content')
<div class="container px-5 mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Update Profile</div>
                <div class="card-body">
                    <form action="edit" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div action="form-group">
                            <label for="title">Nama</label>
                            <input value="{{ old('name') ?? $perangkatdesa->name }}" type="text" name="name" id="name"
                                class="form-control">
                        </div>
                        @error('name')
                        <div class="text-danger mt-2">
                            Nama harus diisi
                        </div>
                        @enderror

                        <div class="form-group mt-4">
                            <select name="title" class="form-select" aria-label="Default select example">
                                <label for="title">Jabatan</label>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Wakil Kepala Desa">Wakil Kepala Desa</option>
                                <option value="Sekretaris Desa<">Sekretaris Desa</option>
                                <option value="Bidang Penyediaan Pangan/Energi">Bidang
                                    Penyediaan Pangan/Energi</option>
                                <option value="Bidang Keamanan dan Ketertiban">Bidang Keamanan
                                    dan Ketertiban</option>
                                <option value="Bidang Kesehatan">Bidang Kesehatan</option>
                                <option value="Bidang Komunikasi/Penyuluhan dan Mitra Usaha">
                                    Bidang Komunikasi/Penyuluhan dan Mitra Usaha
                                </option>
                                <option value="Bidang Psikologi Publik dan Hiburan">Bidang
                                    Psikologi Publik dan Hiburan
                                </option>
                                <option value="Bidang Komunikasi/Penyuluhan dan Mitra Usaha">
                                    Bidang Komunikasi/Penyuluhan dan Mitra Usaha
                                </option>
                            </select>
                        </div>
                        @error('title')
                        <div class="text-danger mt-2">
                            Jabatan harus dipilih
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="">Foto Profil</label><br>
                            <input type="file" name="imageprofile" id="imageprofile">
                        </div>
                        @error('imageprofile')
                        <div class="text-danger mt-2">
                            Foto Profil harus diisi dan format jpeg, png, jpg, svg
                        </div>
                        @enderror

                        <div class="py-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection