@extends('layouts.adminapp')
@section('title','Admin Perangkat Desa')

@section('content')
@section('title.app','Perangkat Desa')
@include('component.navadmin')
@include('component.alert')

<div class="row px-5">
    <a href="{{ route('create.perangkatdesa') }}" class="btn btn-primary">Tambah Perangkat Desa</a>
</div>

<div class="row px-5 pt-5">
    <h3>Daftar Perangkat Desa</h3>
</div>

<div class="row px-5 pt-3">
    <table class="table justify-content-sm-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perangkatdesas as $perangkatdesa)
            <tr>
                <th scope="row">{{ $perangkatdesa->id }}</th>
                <td>{{ $perangkatdesa->name }}</td>
                <td>{{ $perangkatdesa->title }}</td>
                <td><img src="{{ $perangkatdesa->takeImage }}/{{ $perangkatdesa->imageprofile }}" style="width: 120px;">
                </td>
                <td>
                    <a href="perangkatdesa/{{ $perangkatdesa->id }}/edit" class="btn btn-success ml-3">Edit</a>
                    <form class="d-inline ml-3" action="perangkatdesa/{{ $perangkatdesa->id }}/delete" method="post"
                        onsubmit="return confirm('Yakin hapus {{$perangkatdesa->name}} ?')">
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

<div class="row px-5 d-flex justify-content-center">
    {{ $perangkatdesas->links() }}
</div>
@endsection