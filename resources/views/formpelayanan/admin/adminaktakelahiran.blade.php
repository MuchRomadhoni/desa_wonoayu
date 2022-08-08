@extends('layouts.adminapp')
@section('title','Admin Print Akta Kelahiran')

@section('content')
@section('title.app','Print Akta Kelahiran')
@include('component.navadmin')

<div class="row px-5 pt-2">
    <h3>Daftar Print Akta Kelahiran</h3>
</div>

@include('component.subnavadmin')

<div class="row px-5 pt-3">
    <table class="table justify-content-sm-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Pemohon</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($moreaktakelahiran as $aktakelahiran)
            <tr>
                <th scope="row">{{ $aktakelahiran->id }}</th>
                <td>{{ $aktakelahiran->nama_kepala_keluarga }}</td>
                <td>
                    <a href="{{route('aktakelahiran.pdf', $aktakelahiran->id)}}" target="_blank" class="btn btn-success">Print</a>
                    <form class="d-inline" action="{{route('aktakelahiran.destroy',$aktakelahiran->id)}}" method="post"
                        onsubmit="return confirm('Yakin hapus {{$aktakelahiran->nama_lengkap}} ?')">
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