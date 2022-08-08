@extends('layouts.adminapp')
@section('title','Admin Print KK')

@section('content')
@section('title.app','Print KK')
@include('component.navadmin')

<div class="row px-5 pt-2">
    <h3>Daftar Print KK</h3>
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
            @foreach($morekk as $kk)
            <tr>
                <th scope="row">{{ $kk->id }}</th>
                <td>{{ $kk->nama_lengkap }}</td>
                <td>
                    <a href="{{route('kk.pdf', $kk->id)}}" target="_blank" class="btn btn-success">Print</a>
                    <form class="d-inline" action="{{route('kk.destroy',$kk->id)}}" method="post"
                        onsubmit="return confirm('Yakin hapus {{$kk->nama_lengkap}} ?')">
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