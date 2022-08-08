@extends('layouts.adminapp')
@section('title','Edit Statistik')

@section('content')
<div class="container px-5 mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Edit Statistik</div>
                <div class="card-body">
                    <form action="update" method="POST" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div action="form-group">
                            <label for="title">Jumlah Penduduk</label>
                            <input value="{{ old('penduduk') ?? $statistic->penduduk }}" type="number" name="penduduk" id="penduduk" class="form-control col-4">
                        </div>
                        @error('penduduk')
                        <div class="text-danger mt-2">
                            Harus diisi
                        </div>
                        @enderror

                        <div action="form-group">
                            <label for="title">Jumlah Kepala Keluarga</label>
                            <input value="{{ old('kepala_keluarga') ?? $statistic->kepala_keluarga }}" type="number" name="kepala_keluarga" id="kepala_keluarga" class="form-control col-4">
                        </div>
                        @error('kepala_keluarga')
                        <div class="text-danger mt-2">
                            Harus diisi
                        </div>
                        @enderror

                        <div action="form-group">
                            <label for="title">Jumlah Anggota Keluarga</label>
                            <input value="{{ old('anggota_keluarga') ?? $statistic->anggota_keluarga }}" type="number" name="anggota_keluarga" id="anggota_keluarga" class="form-control col-4">
                        </div>
                        @error('anggota_keluarga')
                        <div class="text-danger mt-2">
                            Harus diisi
                        </div>
                        @enderror

                        <div action="form-group">
                            <label for="title">Jumlah Penduduk Laki Laki</label>
                            <input value="{{ old('male') ?? $statistic->male }}" type="number" name="male" id="male" class="form-control col-4">
                        </div>
                        @error('male')
                        <div class="text-danger mt-2">
                            Harus diisi
                        </div>
                        @enderror

                        <div action="form-group">
                            <label for="title">Jumlah Penduduk Perempuan</label>
                            <input value="{{ old('female') ?? $statistic->female }}" type="number" name="female" id="female" class="form-control col-4">
                        </div>
                        @error('female')
                        <div class="text-danger mt-2">
                            Harus diisi
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
