@extends('layouts.app')
@section('title', 'Beranda')

@include('layouts.navigation')

@section('content')
<div class="container">
    <div class="row py-5 px-5">
        <h1>Selamat datang di Desa Plinggisan</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
        <div class="carousel-item @if($loop->first) active @endif">
            <a href="{{ $slider->link }}" target="_blank" rel="noopener noreferrer"><img class="d-block w-100" src="{{ $slider->takeImage }}/{{ $slider->imageslider }}" alt=""></a>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row py-3 px-5">
        <h4>Portal Berita</h4>
    </div>

    <div class="row px-4 px-0">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card mb-4">
                @if ($post->thumbnail)
                <img style="height: 275px; object-fit: cover; object-position: center;" src="{{ $post->takeImage }}" class="card-img-top">
                @endif
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{!! Str::limit($post->body, 100) !!}</p>
                    <a href="/posts/{{ $post->slug }}" style="font-style: italic;">Read More</a>
                </div>
                <div class="card-footer pb-0">
                    <p style="font-size: 10pt;">Publish pada {{ $post->created_at->format("d M y") }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row px-5 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

</div>
@endsection
