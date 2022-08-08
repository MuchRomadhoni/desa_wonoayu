@extends('layouts.adminapp')
@section('title','Admin Print KTP')

@section('content')
@section('title.app','Print KTP')
@include('component.navadmin')

<div class="row px-5 pt-2">
    <h3>Daftar Print KTP</h3>
</div>

@include('component.subnavadmin')

<div class="row px-5 pt-3">
    <table class="table justify-content-sm-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Jenis Permohonan</th>
                <th scope="col">No. KK</th>
                <th scope="col">NIK</th>
                <th scope="col">Alamat</th>
                <th scope="col">Rt</th>
                <th scope="col">Rw</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($morektp as $ktp)
            <tr>
                <th scope="row">{{ $ktp->id }}</th>
                <td>{{ $ktp->nama_lengkap }}</td>
                <td>{{ $ktp->permohonan_ktp }}</td>
                <td>{{ $ktp->no_kk }}</td>
                <td>{{ $ktp->nik }}</td>
                <td>{{ $ktp->alamat }}</td>
                <td>{{ $ktp->rt }}</td>
                <td>{{ $ktp->rw }}</td>
                <td>
                    <a href="{{route('ktp.pdf', $ktp->id)}}" target="_blank" class="btn btn-success">Print</a>
                    <form class="d-inline" action="{{route('ktp.destroy',$ktp->id)}}" method="post"
                        onsubmit="return confirm('Yakin hapus {{$ktp->nama_lengkap}} ?')">
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