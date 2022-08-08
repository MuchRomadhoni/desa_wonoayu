@extends('layouts.adminapp')
@section('title','Admin Berita')

@section('content')
@section('title.app','Berita')
@include('component.navadmin')
@include('component.alert')

<div class="row px-5">
    <a href="{{ route('create.post') }}" class="btn btn-primary">Buat Berita</a>
</div>

<div class="row px-5 pt-5">
    <h3>Daftar Berita</h3>
</div>

<div class="row px-5 pt-3">
    <table class="table justify-content-sm-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Judul</th>
                <th scope="col">Waktu Publish</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at->format('d M y | h:i:s') }}</td>
                <td>
                    <a style="color: white;" target="_blank" href="{{ route('showpost', $post->slug) }}"
                        class="btn btn-info">Show</a>
                    <a href="posts/{{ $post->slug }}/edit" class="btn btn-success ml-3">Edit</a>
                    <form class="d-inline ml-3" action="posts/{{ $post->slug }}/delete" method="post"
                        onsubmit="return confirm('Yakin hapus dengan judul post {{$post->title}} ?')">
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
    {{ $posts->links() }}
</div>
@endsection