@extends('layouts.adminapp')
@section('title','Buat Slider')

@section('content')
<div class="container px-5 mt-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Slider Baru</div>
                <div class="card-body">
                    <form action="store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div action="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div action="form-group">
                            <label for="title">Sub Judul</label>
                            <input type="text" name="subtitle" id="subtitle" class="form-control">
                        </div>

                        <div action="form-group">
                            <label for="title">Link</label>
                            <input type="text" name="link" id="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Slider</label><br>
                            <input type="file" name="imageslider" id="imageslider">
                        </div>

                        @error('imageslider')
                        <div class="text-danger mt-2">
                            Slider harus di isi dan berformat jpeg, png, jpg, svg
                        </div>
                        @enderror

                        {{-- <div action="form-group">
                            <label for="title">Status</label>
                            <select name="status" id="status">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div> --}}

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