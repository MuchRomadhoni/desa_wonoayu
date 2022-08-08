@extends('layouts.adminapp')
@section('title','Admin Statistik')
@section('content')
    @section('title.app','Statistik')
    @include('component.navadmin')
    @include('component.alert')

    <div class="row px-5 pt-5">
        <h3>Daftar Statistic</h3>
    </div>

    <div class="row px-5 pt-3">
        <table class="table justify-content-sm-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Penduduk</th>
                    <th scope="col">Kepala Keluarga</th>
                    <th scope="col">Anggota Keluarga</th>
                    <th scope="col">Laki-laki</th>
                    <th scope="col">Perempuan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($statistics as $statistic)
                <tr>
                    <th scope="row">{{ $statistic->id }}</th>
                    <td>{{ $statistic->penduduk }}</td>
                    <td>{{ $statistic->kepala_keluarga }}</td>
                    <td>{{ $statistic->anggota_keluarga }}</td>
                    <td>{{ $statistic->male }}</td>
                    <td>{{ $statistic->female }}</td>
                    <td>
                        <a href="statistics/{{ $statistic->id }}/edit" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
