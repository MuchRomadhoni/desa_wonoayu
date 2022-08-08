@extends('layouts.adminapp')
@section('title','Tambah Galeri Foto Baru')

@section('content')
<div class="container px-5 mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Tambah Foto Baru</div>
                <div class="card-body">
                    <form action="store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div action="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        @error('title')
                        <div class="text-danger mt-2">
                            Judul harus diisi
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="">Foto</label><br>
                            <input type="file" name="imagegallery" id="imagegallery">
                        </div>
                        @error('imagegallery')
                        <div class="text-danger mt-2">
                            Slider harus di isi dan berformat jpeg, png, jpg, svg
                        </div>
                        @enderror

                        <div class="py-3">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
