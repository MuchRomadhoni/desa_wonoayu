@extends('layouts.adminapp')
@section('title','Admin Galeri')
@section('content')
    @section('title.app','Galeri')
    @include('component.navadmin')
    @include('component.alert')

    <div class="row px-5">
        <a href="{{ route('create.gallery') }}" class="btn btn-primary">Tambah Galeri</a>
    </div>

    <div class="row px-5 pt-5">
        <h3>Daftar Galeri Foto</h3>
    </div>

    <div class="row px-5 pt-3">
        <table class="table justify-content-sm-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Image Slider</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($galleries as $gallery)
                <tr>
                    <th scope="row">{{ $gallery->id }}</th>
                    <td>{{ $gallery->title }}</td>
                    <td><img src="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" style="width: 120px;"></td>
                    <td>
                        <form class="d-inline" action="galleries/{{ $gallery->id }}/delete" method="post" onsubmit="return confirm('Yakin hapus {{$gallery->title}} ?')">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
