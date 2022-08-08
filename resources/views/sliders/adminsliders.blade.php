@extends('layouts.adminapp')
@section('title','Admin Slider')
@section('content')
@section('title.app','Sliders')
@include('component.navadmin')
@include('component.alert')

<div class="row px-5">
    <a href="{{ route('create.slider') }}" class="btn btn-primary">Buat Slider</a>
</div>

<div class="row px-5 pt-5">
    <h3>Daftar Slider</h3>
</div>

<div class="row px-5 pt-3">
    <table class="table justify-content-sm-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Judul</th>
                <th scope="col">Image Slider</th>
                {{-- <th scope="col">Status</th> --}}
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $slider)
            <tr>
                <th scope="row">{{ $slider->id }}</th>
                <td>{{ $slider->title }}</td>
                <td><img src="{{ $slider->takeImage }}/{{ $slider->imageslider }}" style="width: 120px;"></td>
                {{-- <td>{{ $slider->status == 0 ? 'Tidak Aktif' : 'Aktif'}}</td> --}}
                <td>
                    <form class="d-inline" action="sliders/{{ $slider->id }}/delete" method="post"
                        onsubmit="return confirm('Yakin hapus {{$slider->title}} ?')">
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